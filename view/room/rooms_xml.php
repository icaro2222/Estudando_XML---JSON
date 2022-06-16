<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__.'/../../app/controller/Room.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="stylesheet" href="../../public/css/style.css">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">

</head>
<body>
<h1>Rooms</h1>
<?php
    $link = __DIR__."/../../document/avaliacao-candidatos-main/database/rooms.xml"; 
    //link do arquivo xml
    $xml = simplexml_load_file($link); 
    //carrega o arquivo XML e retornando um Array

    $room = new Room;
    
    foreach($xml->children() as $Rooms) {

        $room->setId($Rooms['id']);
        $room->setNome($Rooms->Name);
        $room->setFk($Rooms['hotelCode']);
        
        if($room->insert()){
            echo "<br><br>Room ". $room->getNome(). " inserido no banco com sucesso";
        }
    }
?>
</body>
</html>