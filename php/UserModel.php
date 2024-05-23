<?php

namespace php;

include("./DBConnection.php");
include("./User.php");

class UserModel
{
    function getUsersFromDB()
    {
        $dbConnection = new DBConnection();
        $usersfromdb = $dbConnection->getUsers();
        if($usersfromdb->num_rows > 0){
            while($user = $usersfromdb->fetch_assoc()) {
                $users[] = new User($user["userid"], $user["username"]);
            }}
                return $users;
    }
}