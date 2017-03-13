<?php

namespace core;

use core\lib\log;
use core\lib\route;
use Smarty;
use Twig_Autoloader;
use Twig_Environment;
use Twig_Loader_Filesystem;


class main{
    
    public $assign;
    public $i=0;
    //初始化
    public static  function  run(){
        log::init();
        $route = new route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP.'/controllers/'.$ctrlClass.'Controller.php';
        $ctrlClass =MODULE.'\\controllers\\'.$ctrlClass.'Controller';

        if (is_file($ctrlFile)){
             include_once $ctrlFile;
             $ctrl = new $ctrlClass;
             $ctrl->$action();
             log::log('contrller:'.$ctrlClass.'      '.'action:'.$action);
        }else {
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    //自动加载类
    public static   function load($class){
        $class = str_replace('\\', '/', $class);
        $file=IMOOC.'/'.$class.'.php';
        if (is_file($file)){
            include_once $file;
        }else {
            return false;
        }
    }

    public function assign($name,$value){
        $this->assign['name']=$name;
        $this->assign['value']=$value;

    }

    public function display($file){
       $smarty = new smarty();
//       $smarty->debugging = DEBUG;
       $smarty->caching = true;
       $smarty->cache_lifetime = 0;
       $smarty->assign($this->assign['name'],$this->assign['value']);
       $smarty->display($file);
    }



}






