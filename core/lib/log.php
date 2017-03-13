<?php
namespace core\lib;
class log{
    /**
     * 1.确定存储方式
     *  a.写进文件
     *  b写进数据库
     *  c.写进缓存
     * 2.写日志
     * 
     */
    
    public static $class;
    
    public static function init(){
        $drive = config::get('log','DRIVE');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class= new $class;
        
    }
    public static function log($name,$file='log'){
        self::$class->log($name,$file);
        
    }
}