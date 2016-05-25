<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 登录日志模型 <逻辑层>
//+---------------------------------
//| Author: webdd <2014/9/4>
//+---------------------------------

namespace Admin\Logic;
use Think\Model;

class LogLogic extends Model {

	//书写登录日志
	public function write($username,$ip,$status,$info){

		// 定位当前IP所在的城市
		$Ip = new \Org\Net\IpLocation (); // 实例化类
		$location = $Ip->getlocation ( $ip ); // 获取某个IP地址所在的位置
		$data['username'] = $username;
		$data['logintime'] = time();
		$data['loginip'] = $ip;
		$data['status'] = $status;
		$data['password'] = "密码保密";
		$data['info'] = $info;
		$data['area'] = $location['country'].$location['area'];
		$this->data($data)->add();

	}

}