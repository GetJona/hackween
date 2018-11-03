<?php

include_once('DataInterfaz.php');
include_once('SingleValue.php');
include_once('CompoundValue.php');

class HandleData{

    public $public;

    public function __construct(){

    }

    public function handleTypes($data){
        $break_l = preg_split('/\n/', $data);
        $this->public = $this->breakLines($break_l);
    }

    public function breakLines($lines){
        $list_lines=[];
        foreach ($lines as $index => $line){
            $list_lines[] = $this->breakValues($line);
        }
        return $list_lines;
    }

    public function breakValues($line){
        $obj=null;
        if(stripos($line,':' )===false){
            $obj = new SingleValue($line, 0);
        }else{
            $result = preg_split('/\:/', $line);
            $obj = new CompoundValue($result[0],$result[1], 1);
        }
        return $obj;
    }

}