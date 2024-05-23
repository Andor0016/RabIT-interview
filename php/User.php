<?php

namespace php;

class User
{
    //represents the id number, of the user
    private $id;
    //represents the name of user
    private $name;

    //initialize an object, of class
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    //the methods above the comments, returns the value of private properties
    public function getId(){
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

}