<?php
/**
 * Created by PhpStorm.
 * User: JaysonWang
 * Date: 16/5/21
 * Time: 下午10:26
 */

namespace vendors\system\core;


class Util
{

    public static function addslashes($data){
        if(!is_array($data)){
            return addslashes($data);
        }
        foreach ($data as &$_data){
            if(!is_array($_data)){
                $_data = addslashes($_data);
            }
        }
        return $data;
    }

    /**
     * 输出json
     * @param $data
     */
    public static function json_encode($data){
        echo json_encode($data);
        exit;
    }

    /**
     * 解析json
     * @param $data
     * @param bool $asArray
     */
    public static function json_decode($data, $asArray = true){
        echo self::json_decode($data, $asArray);
    }

}