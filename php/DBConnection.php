<?php

namespace php;

use mysqli;

class DBConnection
{
    //Return the result of query
    public function getUsers(){
        $connection = $this->connect();
        $sqlquery = "SELECT userid, username FROM users";
        $users = $connection->query($sqlquery);
        $this->disconnect($connection);
        return $users;
    }

    //Return the result of query
    public function getAdvertisements(){
        $connection = $this->connect();
        $sqlquery = "SELECT advid, username, advtitle FROM advertisements, users WHERE advertisements.userid = users.userid";
        $advertisements = $connection->query($sqlquery);
        $this->disconnect($connection);
        return $advertisements;
    }

    //Create a connection with database
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
    //Close the connection with database
    private function disconnect($connection){
        $connection->close();
    }
}