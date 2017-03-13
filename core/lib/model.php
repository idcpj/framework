<?php
namespace core\lib;
use Medoo\Medoo;

class model extends Medoo {
    public function __construct(){
        $option = config::get('database');
        parent::__construct($option);
    }

}