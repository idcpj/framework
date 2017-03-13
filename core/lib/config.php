<?php
namespace core\lib;
class config{
    public static $conf =array();
    
    public static function get($file,$name=null) {
        /**
         * 1.判断配置文件是否存在
         * 2.判断配置是否存在
         * 3.缓存配置
         */  
        if (isset(self::$conf[$file])){
            return $name==null?self::$conf[$file]:self::$conf[$file][$name];
        }else { 
            $path = IMOOC.'/core/config/'.$file.'.php';
            if(is_file($path)){
            $conf = include_once $path;
                if ($name!=null){
                    if(isset($conf[$name])){
                        self::$conf[$file] =$conf;
                        return self::$conf[$file][$name];
                    }else {
                        throw new \Exception("没有这个配置项");
                    }
                }else{
                    self::$conf[$file]=$conf;
                    return self::$conf[$file];
                }
            }else {
                throw new \Exception("找不到配置文件".$file);
            }
        }
    }

}




