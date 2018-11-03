<?php

include_once('SaveData.php');
class InvoiceProduct{

    private $tableName='invoice_product';
    public $id='';
    public $id_invoice='';
    public $product='';
    public $quantity='';
    public $value='';

    public function setData( $id_invoice, $product, $quantity, $value){
        $this->id_invoice = $id_invoice;
        $this->product = $product;
        $this->quantity = $quantity;
        $this->value = $value;
    }

    public function insertData(){
        $query = "INSERT INTO `".$this->tableName."` ( `id_invoice`, `product`, `quantity`, `value` )".
        " VALUES ('".$this->id_invoice."', '".$this->product."', '".$this->quantity."', '".$this->value."')";

        $save = new SaveData();
        return $save->insertData($query);
    }

}