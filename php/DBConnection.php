<?php

namespace php;

use mysqli;

class DBConnection
{
    public function getUsers(){
        $connection = $this->connect();
        $sqlquery = "SELECT userid, username FROM users";
        $users = $connection->query($sqlquery);
        $this->disconnect($connection);
        return $users;
    }

    public function getAdvertisements(){
        $connection = $this->connect();
        $sqlquery = "SELECT advid, userid, advtitle FROM advertisements";
        $advertisements = $connection->query($sqlquery);
        $this->disconnect($connection);
        return $advertisements;
    }

    private function connect(){
        $serverCredentials = json_decode(file_get_contents("../resources/databaseCredentials.json"), true);
        $serverpath = $serverCredentials["dbconnection"];
        $username = $serverCredentials["dbuser"];
        $password = $serverCredentials["dbpassword"];
        $dbname = $serverCredentials["dbname"];

        $connection = new mysqli($serverpath, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        return $connection;
    }

    private function disconnect($connection){
        $connection->close();
    }
}