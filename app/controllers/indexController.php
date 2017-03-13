<?php
namespace app\controllers;


use app\models\test;

class indexController extends \core\main
{
    public function index()
    {
        $data_1= "data6667";
//        $data_2="123";
        $this->assign('data_1',$data_1);
//        $this->assign('data_2',$data_2);
        $this->display('index.tpl');
    }

}
