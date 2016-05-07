<?php

/*
 PHP notes - OOP (Class and Object)
 Compiled by: Ehsan
 Github: github.com/EhsanZB
*/

class Person
{
    public $name;

    function __construct($defaultName){
        echo "new person '$defaultName' has been created!" . "<br>";
        $this->name = $defaultName;
    }

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}