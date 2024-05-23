<?php

//Lekérem az url-t
$URI = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$URI = ltrim($URI, "/");

//Összekötöttem a módosított url-eket, a hozzájuk tartozó php fájlokkal
$pageMap = [
  "users" => "php/UserController",
  "advertisements" => "php/AdvertisementController"
];

//Megnyitottam a szükséges fájlokat, vagy továbbengedtem, hogy betöltse a főoldalt
if (array_key_exists($URI, $pageMap)) {
  require_once "./" . $pageMap[$URI] . ".php";
  die();
}

?>

<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <meta author="Andor Balo">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="./style/styles.css">
    </head> 
    <body>
        <main>
            <h1 class="headtitle">Welcome!</h1>
            <h3 class="title">Select from the available options!</h3>
            <div class="menu">
                <a href="/users">
                    <p>Users</p>
                </a>
                <a href="/advertisements">
                    <p>Advertisements</p>
                </a>
            </div>
        </main>
    </body>
</html>