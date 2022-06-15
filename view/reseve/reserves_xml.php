<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Reseve.php');
require_once('../../app/controller/Guest.php');
require_once('../../app/controller/Daily.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style-grid.css">
<head>
<meta charset="utf-8">

</head>
<body>
<h1>Reserves</h1>
<?php
    $link = "/var/www/html/Icaro/document/avaliacao-candidatos-main/database/reserves.xml"; 
    //link do arquivo xml
    $xml = simplexml_load_file($link); 
    //carrega o arquivo XML e retornando um Array

    // var_dump($xml);

    $reseve = new Reseve;
    $guest = new Guest;
    $daily = new Daily;
    


    foreach($xml->children() as $Reseve) {

        var_dump($Reseve->CheckIn);

        $reseve->setCheckin($Reseve->CheckIn);
        $reseve->setCheckin($Reseve->CheckOut);

        $reseve->setCheckin($Reseve['id']);
        $reseve->setCheckin($Reseve['hotelCode']);
        $reseve->setCheckin($Reseve['roomCode']);



        foreach($Reseve->children() as $Guests) {
            foreach($Guests->children() as $Guest) {

                $guest->nome = $Guest->Name;
                $guest->lastNome = $Guest->LastName;
                $guest->phone = $Guest->Phone;

                if($guest->insert()){
                    echo "<br><br>Guest ". $guest->nome. " inserido no banco com sucesso";
                }   
            }
        }

        foreach($Reseve->children() as $Dailies) {
            foreach($Dailies->children() as $Daily) {

                $daily->setDate($Daily->Date);
                $daily->value = $Daily->Value;

                if($daily->insert()){
                    echo "<br><br>Guest ". $daily->date. " inserido no banco com sucesso";
                }   
            }

                if($reseve->insert()){
                    echo "<br><br>Guest ". $reseve->total. " inserido no banco com sucesso";
                }   
        }
    }

?>
</body>
</html>