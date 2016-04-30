<?php

class Person
{
    private $name;

    public function __construct()
    {
        echo "New Person created.";
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}