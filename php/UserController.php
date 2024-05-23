<?php

namespace php;

include("./User.php");
include("./UserView.php");
include("./DBConnection.php");

class UserController
{
    //A function, which handle data from database, to view
    public function getUsers()
    {
        $dbConnection = new DBConnection();
        $usersfromdb = $dbConnection->getUsers();
        if($usersfromdb->num_rows > 0){
            while($user = $usersfromdb->fetch_assoc()) {
                $users[] = new User($user["userid"], $user["username"]);
            }}
        $userView = new UserView();
        $userView->showUsers($users);
    }
}

//I forgot to ask, can I use JavaScript, so I called the needed method here:
$userController = new UserController();
$userController->getUsers();