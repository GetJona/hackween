<?php

include_once('DataInterfaz.php');

class SingleValue implements DataInterfaz{
    public $value;
    public $type;

    /**
     * SingleValue constructor.
     * @param $value
     * @param $type
     */
    public function __construct($value, $type)
    {
        $this->value = $value;
        $this->type = $type;
    }


    function getType(){
        return $this->type;
    }

    function setType($type){
        return $this->type=$type;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}