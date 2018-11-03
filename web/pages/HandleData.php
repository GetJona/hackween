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

    function getDate($line){
        $coincidencias = null;
        if(preg_match('#(fecha(\s)*venta|venta(\s)*fecha|fecha)(.)*(19[0-9]+|20[0-9]+|( |-|\/))#mi', $line,$coincidencias)){
            if(!preg_match('#(en|fe|ma|ab|ma|ju|ju|ag|se|oc|no|di)+([a-z])+ ([0-9])+ (de) ([0-9])+#mi', $line,$coincidencias)){
                if(!preg_match('#([0-9])* (\/|-|de) ([a-z])* ([0-9])*#mi', $line, $coincidencias)){
                    if(!preg_match('#([0-9])* (\/|-|de) ([a-z])* ([0-9])*#mi', $line, $coincidencias)){
                        if(!preg_match('#([0-9])+(\-)+([0-9])+(\-)+([0-9])+#mi', $line, $coincidencias)){
                            return '';
                        }else{
                            return $coincidencias[0];
                        }
                    }else{
                        return $coincidencias[0];
                    }
                }else{

                    return $coincidencias[0];
                }
            }else{
                return $coincidencias[0];
            }
        }else{
            return '';
        }
    }

    function getSeller($text){
        $result = explode("\n", $text);
        foreach ($result as $r){
            if(!empty(trim($r))){
                return $r;
            }
        }
        return '';
    }

    function getNitSeller($text){
        $matchs = preg_match_all('/(nit)(.)*([0-9\-])/mi', $text);
        if(is_array($matchs)  && count($matchs)>0){
            return $matchs[0];
        }
        return '';
    }

    function getNitClient($text){
        $matchs = preg_match_all('(nit)(.)*([0-9\-])', $text);
        if(is_array($matchs)  && count($matchs)>0 && isset($matchs[1])){
            return $matchs[1];
        }
        return '';
    }

    function findProducts($text){
        $result = explode("\n", $text);
        $headers='';
        $products='';
        foreach ($result as $index =>$line){
            if(stripos($line, 'can')!==false ){

            }
        }
        return '';
    }

}