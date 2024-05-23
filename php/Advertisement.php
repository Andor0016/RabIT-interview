<?php

namespace php;

class Advertisement
{
    private $id;
    private $user;
    private $title;

    public function __construct($id, $user, $title)
    {
        $this->id = $id;
        $this->user = $user;
        $this->title = $title;
    }

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