<?php

namespace php\Advertisement;

use php\DBConnection;
use php\User\User;

include("../DBConnection.php");
include("./Advertisement.php");

class AdvertisementModel
{
    function getAdvertisementsFromDB()
    {
        $dbConnection = new DBConnection();
        $advertisementsfromdb = $dbConnection->getAdvertisements();
        if($advertisementsfromdb->num_rows > 0){
            while($advertisement = $advertisementsfromdb->fetch_assoc()) {
                $userfromdb = $dbConnection->getUserByID($advertisement['userid']);
                $user = new User($advertisement['userid'], $userfromdb[0]['username']);
                $advertisement = new Advertisement($advertisement['advid'], $user, $advertisement['advtitle']);
                $advertisements[] = $advertisement;
            }}
        return $advertisements;
    }
}