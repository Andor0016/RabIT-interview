<?php

namespace php;

require_once($_SERVER["DOCUMENT_ROOT"] . "/php/Advertisement.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/php/AdvertisementView.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/php/DBConnection.php");

class AdvertisementController
{
    //A function, which handle data from database, to view
    public function getAdvertisements()
    {
        $dbConnection = new DBConnection();
        $advertisementsfromdb = $dbConnection->getAdvertisements();
        if($advertisementsfromdb->num_rows > 0){
            while($advertisement = $advertisementsfromdb->fetch_assoc()) {
                $advertisements[] = new Advertisement($advertisement['advid'], $advertisement['username'], $advertisement['advtitle']);
            }}
        $advertisementView = new AdvertisementView();
        $advertisementView->showAdvertisements($advertisements);
    }
}

//I forgot to ask, can I use JavaScript, so I called the needed method here:
$advertisementController = new AdvertisementController();
$advertisementController->getAdvertisements();