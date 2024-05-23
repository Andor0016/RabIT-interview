<?php

namespace php;

include("./DBConnection.php");
include("./Advertisement.php");
include("./User.php");

class AdvertisementModel
{
    function getAdvertisementsFromDB()
    {
        $dbConnection = new DBConnection();
        $advertisementsfromdb = $dbConnection->getAdvertisements();
        if($advertisementsfromdb->num_rows > 0){
            while($advertisement = $advertisementsfromdb->fetch_assoc()) {
                $advertisement = new Advertisement($advertisement['advid'], $advertisement['username'], $advertisement['advtitle']);
                $advertisements[] = $advertisement;
            }}
        return $advertisements;
    }
}