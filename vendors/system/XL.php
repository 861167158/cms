<?php
/**
 * Created by PhpStorm.
 * User: JaysonWang
 * Date: 16/5/21
 * Time: 下午9:55
 */

define('SYSPATH', __DIR__ . '/');

function d()
{
    echo '<pre>';
    foreach (func_get_args() as $arg) {
        if (is_array($arg) || is_object($arg)) {
            print_r($arg);
        } else {
            var_dump($arg);
        }
    }
    exit();
}

class XL
{

    public function run(){
        $router = new \vendors\system\core\Router('r');
        $data = \vendors\system\core\Router::go($router->controller, $router->action);
    }

    public static function autoload($class)
    {
        $class = str_replace('\\', '/', $class);
        $file = realpath(SYSPATH . '../../' . $class . '.php');
//        d($file);
        if(file_exists($file)){
            include $file;
            return true;
        }
        return false;
    }

}

spl_autoload_register(array('XL','autoload'));