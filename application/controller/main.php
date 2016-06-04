<?php
/**
 * Created by PhpStorm.
 * User: JaysonWang
 * Date: 16/5/22
 * Time: 下午12:08
 */

namespace application\controller;


class main
{

	public $hi = 111;

	public function index(){
		$ret = array(
			'code' => 0,
			'msg' => '',
			'data' => array(
				array(date('Y-m-d H:i:s')),
				array('飞行模式','无线局域网','蓝牙','蜂窝移动网络','个人热点','运营商'),
				array('通知','控制中心','勿扰模式'),
			)
		);
		// d($server);
		$ret['data'][] = array_keys($_SERVER);
		echo json_encode($ret);
	}

	public function delete(){
		$ret = array(
			'ret' => 0,
			'msg' => 'hello world!'
		);
		echo json_encode($ret);
	}



}