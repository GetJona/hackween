<?php

include_once('SaveData.php');
class InvoiceFormated{

    private $tableName='invoice_formated';
    public $id='';
    public $seller='';
    public $seller_id='';
    public $client='';
    public $client_number='';
    public $datetime_invoice='';
    public $phone_seller='';
    public $phone_client='';
    public $total='';

    public function setData(
        $seller, $seller_id, $client, $client_number, $datetime_invoice, $phone_seller, $phone_client, $total
    ){
        $this->$seller=$seller;
        $this->$seller_id=$seller_id;
        $this->$client=$client;
        $this->$client_number=$client_number;
        $this->$datetime_invoice=$datetime_invoice;
        $this->$phone_seller=$phone_seller;
        $this->$phone_client=$phone_client;
        $this->$total=$total;
    }

    public function insertData(){
        $query = "INSERT INTO `".$this->tableName."` ( 
        `seller`, `seller_id`, `client`, `client_number`, `datetime_invoice`, `phone_seller`, `phone_client`, `total` 
        )". " VALUES (
        '".$this->seller."', '".$this->seller_id."', '".$this->client."', '".$this->client_number."', 
        '".$this->datetime_invoice."', '".$this->phone_seller."', '".$this->phone_client."', '".$this->total."'
        )";

        $save = new SaveData();
        return $save->insertData($query);
    }

}