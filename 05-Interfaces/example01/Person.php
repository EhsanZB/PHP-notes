<?php
require 'Interfaces.php';

class Person implements PersonInterface
{
    public $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}