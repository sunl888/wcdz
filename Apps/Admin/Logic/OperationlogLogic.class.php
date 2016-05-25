<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 操作日志模型 <逻辑层>
//+---------------------------------
//| Author: webdd <2014/9/5>
//+---------------------------------

namespace Admin\Logic;
use Think\Model;

class OperationlogLogic extends Model {

	public function write($uid,$status,$info,$get,$ip="null"){

		$data['uid'] = $uid;
		$data['status'] = $status;
		$data['info'] = $info;
		$data['get'] = $get;
		$data['ip'] = get_client_ip();
		$data['time'] = time();

		//p($data);
		$this->data($data)->add();

	}

}