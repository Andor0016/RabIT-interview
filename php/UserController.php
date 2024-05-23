<?php

namespace php;

include("./UserModel.php");
include("./UserView.php");

class UserController
{
    public function getUsers()
    {
        $userModel = new UserModel();
        $users = $userModel->getUsersFromDB();
        $userView = new UserView();
        $userView->showUsers($users);
    }
}

$userController = new UserController();

$userController->getUsers();