<?php
namespace core\lib\drive\log;
use core\lib\config;

//文件系统
class file{
    public  $path;
    public function __construct(){
        $config = config::get('log','OPTION');
        $this->path = $config['PATH'];
    }
    
    public function log($message,$file='log'){
        /**
         * 1.确定文件的存储位置是否存在
         *     否则新建目录
         * 2.写入日记
         */
        if(!is_dir($this->path.date('Ymd'))){
            mkdir($this->path.date('Ymd'),0777,true);
        }
        $message=date('Y-m-d H:i:s').json_encode($message.PHP_EOL);
        file_put_contents($this->path.date('Ymd').'/'.$file.'.php',$message,FILE_APPEND);
    }
}