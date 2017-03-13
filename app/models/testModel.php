<?php


namespace app\models;


use core\lib\model;

class testModel extends model
{
    public $table='test';

    public function tlist(){
        return $this->select($this->table,'*');
    }

    public function getone($id){
        return $this->select($this->table,"*",['id'=>$id]);
    }
}
