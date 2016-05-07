<?php
class Person
{
    public $name;

    function setName($name){
        $this->name = $name;
    }

    function getName(){

        if (is_null($this->name)){
            throw new Exception("No name has been set yet!");
        }else{
            return $this->name;
        }

    }
}