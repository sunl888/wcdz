<?php
namespace Home\Controller;
use Think\Controller;


class BaseController extends Controller {

	/**
	 *  构造方法
	 */
	public function __construct() {
		parent::__construct();
		$this->loginCount();
		//获取导航参数
		$this->getNav();
		//获取配置信息
		$this->getWebInfo();
	
	}

	/**
	 * 获取网站信息
	 */
	public function getWebInfo() {
		$Config = M ('Config');
		$webInfoArr = $Config->select();
		//p($Config->getLastsql());
		$webInfo = array();
		//处理网站信息数组
		foreach ($webInfoArr as $key=>$val) {
			$webInfo[$val['varname']] = $val['value'];
		}
		$this->assign('webInfo',$webInfo);
		
	}
	
	
	/**
	 * 获取页面导航栏
	 */
	public function getNav() {
		$Class = D ('Class',"Model");
		$navList = $Class->getNav ();
		$this->assign ( 'navList', $navList );
	}
   
	/**
	 *  统计网站流量函数
	 */
	public function loginCount() {

		$ip = get_client_ip();
		$time = time();

		//判断当前用户是否任然存在于session中
		if (is_null(session(md5($ip)))) {
			$Visit = M ('Visit');
			$condition['ip'] = $ip;
			$v = $Visit->where($condition)->order('time desc')->find();
			if (is_null($v)) {
				$data['ip'] = $ip;
				$data['time'] = $time;
				$data['view'] = 1;
				$data['y'] = date('y',$time);
				$data['m'] = date('m',$time);
				$data['d'] = date('d',$time);
				$Visit->add($data);
				unset($data);
			} else {
				$vid = $v['vid'];
				$lastTime = $v['time'];
				$y = date('y',$lastTime);
				$m = date('m',$lastTime);
				$d = date('d',$lastTime);
				$y_ = date('y',$time);
				$m_ = date('m',$time);
				$d_ = date('d',$time);

				if ($y == $y_ && $m == $m_ && $d == $d_) {
					//用户当天访问量加1
					$Visit->where('vid = '.$vid)->setInc('view');
				} else {
					$data['ip'] = $ip;
					$data['time'] = $time;
					$data['view'] = 1;
					$data['y'] = $y_;
					$data['m'] = $m_;
					$data['d'] = $d_;
					$Visit->add($data);
				}
			}

			//给session赋值
			session(md5($ip),'hnjrxxw');	

		} 
		return;
	}
	
}