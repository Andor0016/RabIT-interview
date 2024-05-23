<?php

namespace php\Advertisement;

include("./AdvertisementModel.php");
include("./AdvertisementView.php");

class AdvertisementController
{
    public function getAdvertisements()
    {
        $advertisementModel = new AdvertisementModel();
        $advertisements = $advertisementModel->getAdvertisementsFromDB();
        $advertisementView = new AdvertisementView();
        $advertisementView->showAdvertisements($advertisements);
    }
}

$advertisementController = new AdvertisementController();

$advertisementController->getAdvertisements();