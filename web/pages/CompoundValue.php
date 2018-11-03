<?php

include_once('DataInterfaz.php');
class CompoundValue implements DataInterfaz{
    public $type;
    public $name;
    public $value;

    /**
     * SingleValue constructor.
     * @param $value
     * @param $type
     */
    public function __construct($name, $value, $type )
    {
        $this->value = $value;
        $this->type = $type;
        $this->name = $name;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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