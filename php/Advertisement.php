<?php

namespace php;

class Advertisement
{
    //represents the id number of the advertisement
    private $id;
    //represents the user's name, who owns the advertisement
    private $user;
    //represents the advertisement's title
    private $title;

    //initialize an object, of the class
    public function __construct($id, $user, $title)
    {
        $this->id = $id;
        $this->user = $user;
        $this->title = $title;
    }

    //the methods above the comments, returns the value of private properties
    public function getId(){
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTitle()
    {
        return $this->title;
    }

}