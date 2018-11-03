<?php

include_once('SaveData.php');
class InvoiceRaw{

    private $tableName='invoice_raw';
    public $id='';
    public $datetime='';
    public $ip='';
    public $data_raw='';
    public $image='';

    public function setData( $datetime, $ip, $data_raw, $image){
        $this->datetime=$datetime;
        $this->ip=$ip;
        $this->data_raw=$data_raw;
        $this->image=$image;
    }

    public function insertData(){
        $query = "INSERT INTO `".$this->tableName."` ( `datetime`, `ip`, `data_raw`, `image` )".
        " VALUES ('".$this->datetime."', '".$this->ip."', '".addslashes($this->data_raw)."', '".$this->image."')";

        $save = new SaveData();
        return $save->insertData($query);
    }

}