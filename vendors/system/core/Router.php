<?php
/**
 * Created by PhpStorm.
 * User: JaysonWang
 * Date: 16/5/21
 * Time: 下午11:05
 */

namespace vendors\system\core;


class Router
{

	public $get = array();

	public $post = array();

	public $request = array();

	public $controller = 'main';

	public $action = 'index';


	public function __construct($uri = '')
	{
		$this->get = Util::addslashes($_GET);
		$this->post = Util::addslashes($_POST);
		$this->request = Util::addslashes($_REQUEST);

		//unset($_GET);
		//unset($_POST);
		//unset($_REQUEST);

		if($uri){
			$uri = $this->get($uri);
		}

		if($uri){
			$_uri = explode('/', $uri);
			if(count($_uri) >= 2){
				list($this->controller, $this->action) = $_uri;
			}else if(count($_uri) == 1){
				$this->controller = $_uri[0];
			}
		}
		
	}
	
	public static function go($controller, $action){
		$class = "\\application\\controller\\$controller";
		$obj = new $class();
		return $obj->$action();
	}

	public function get($key){
		return $this->get[$key];
	}

	public function post($key){
		return $this->post[$key];
	}


}