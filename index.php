<?php
function p($par){
    echo "<pre>";
    print_r($par);
    echo "</pre>";
}
/**
 * 入口文件
 */

date_default_timezone_set('Asia/Shanghai');

//1.定义常量
define('IMOOC', realpath('./'));
define('CORE',IMOOC.'/core');
define('APP', IMOOC.'/app');
define('MODULE', '\app');
define('DEBUG', true);

//include_once IMOOC.'/vendor/autoload.php';
include_once  'vendor/autoload.php';


if (DEBUG){
    //初始化即可
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error', 'on');
}else {
    ini_set('display_error', 'off');
}
//2.加载数据库

//include_once CORE.'/common/function.php';
//include_once CORE.'/main.php';
//3.启动框架
spl_autoload_register('core\main::load');//若发现么有类就调用此函数
\core\main::run();