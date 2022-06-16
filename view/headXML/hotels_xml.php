<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__.'/../../app/controller/Hotel.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="../../public/css/style.css">
<head>
<meta charset="utf-8">

</head>
<body>
<h1>Hotels</h1>
<?php
    $link = "/var/www/html/Icaro/document/avaliacao-candidatos-main/database/hotels.xml"; 
    //link do arquivo xml
    $xml = simplexml_load_file($link); 
    //carrega o arquivo XML e retornando um Array

    $hotel = new Hotel;

    foreach($xml->children() as $Hotel) {
        $hotel->setId($Hotel['id']);
        $hotel->setNome($Hotel->Name);

        // echo $hotel->getNome();
        // echo "<br>Hotel ". $hotel->getNome(). " inserido no banco com sucesso";

        if($hotel->insert()){
            echo "<br><br>Hotel ". $hotel->getNome(). " inserido no banco com sucesso";
        }
    }

?>
</body>
</html>