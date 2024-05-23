<?php

namespace php;

include("./DBConnection.php");

class UserModel
{
    function getUsersFromDB()
    {
        $dbConnection = new DBConnection();
        $users = $dbConnection->getUsers();
        return $users;
    }
}