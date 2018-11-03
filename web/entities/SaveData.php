<?php


class SaveData{

    private $openFile = '../config/database.json';
    /** @var $con PDO  */
    private $con = '';
    private $dataConnect = '';




    public function __construct(){
        $this->dataConnect =  json_decode( file_get_contents($this->openFile));
    }

    public function connectToDatatabase(){
        $this->con = new PDO(
            'mysql:host='.$this->dataConnect->database->host.
            ';dbname='.$this->dataConnect->database->dbName, $this->dataConnect->database->user, $this->dataConnect->database->password
        );
    }

    public function closeCon(){
        $this->con = null;
    }

    public function insertData($query){
        $this->connectToDatatabase();
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $result = $this->con->exec ($query);
        } catch (PDOException $e) {
            echo ("Syntax Error: ".$e->getMessage());
        }

        $this->closeCon();
        return $result;
    }


}