<?php
namespace Admin\Logic;
use Think\Model;

class VisitLogic extends Model {

	/**
	 * 获取当前月和上月网站访问流量数组
	 *
	 */

	public function getVisitCount($y,$m) {

		//如果当前月份为1月,则上月为去年12月
		if ($m == 1) {
			$y_ = $y-1;
			$m_ = 12;
		} else {
			$y_ = $y;
			$m_ = $m - 1;
		}	

		$nowCondition['y'] = $y;
		$nowCondition['m'] = $m;
		$newVisitArr = $this->getVisitCount_($nowCondition);

		$lastCondition['y'] = $y_;
		$lastCondition['m'] = $m_;
		$lastVisitArr = $this->getVisitCount_($lastCondition);

		$countArr = array (
				"now"=>$newVisitArr,
				"last"=>$lastVisitArr
			);
		return $countArr;
	}

	//getVisitCount的辅助函数,用于计算出该月每天的访问量
	public function getVisitCount_ ($condition) {

		$visitCount = array();
		for ($i = 1; $i<=31 ; $i ++) {
			$condition['d'] = $i;
			$result = $this->where($condition)->select();
			if (is_null($result)) {
				$visitCount[] = 0;
				continue;
			}

			$count = 0;
			foreach ($result as $key=>$val) {
				$count += $val['view'];
			}
			$visitCount[] = $count;
		}

		return $visitCount;
	}
}