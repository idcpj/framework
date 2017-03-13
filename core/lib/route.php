<?php
namespace core\lib;

class route{
    public $ctrl;
    public $action;    
    public $par=array();
    
    public function  __construct(){
        /**
         * 1.隐藏index.php
         * 2.获取URL.参数部分
         * 3.返回对应控制
         */
        if (isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL']!='/'){
            //index/index
            $path = $_SERVER['REDIRECT_URL'];
            $pathArr = explode('/', trim($path,'/'));
            
            if(isset($pathArr[0])){
                $this->ctrl=$pathArr[0];
                unset($pathArr[0]);
            }
            if(isset($pathArr[1])){
                $this->action=$pathArr[1];
                unset($pathArr[1]);
            }else {
                $this->action =config::get( 'route','ACTION');
            }
            
            //url参数 转换成GET  id/1/str/2/test3
            for ($i=2 ; $i<count($pathArr)+2 ; $i=$i+2){
                if (isset($pathArr[$i+1])){
                    $this->par[$pathArr[$i]]=$pathArr[$i+1];
                }
            }
        }else{
            $this->ctrl= config::get( 'route','CTRL');
            $this->action = config::get( 'route','ACTION');
        }
    }
}
