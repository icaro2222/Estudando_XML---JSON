<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__.'/../../app/controller/Room.php');
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<link rel="stylesheet" href="../../public/css/style.css">
<head>
        <title>cadastro de Room</title>

</head>

<body>
    
	<main>
        <div class="center">
            <a href="../"><button>Voltar</button></a>
        </div>
        <div class="center">
            <h1>Cadastrar Room</h1>

   <?php    
      $Room = new Room;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];

            $Room->setNome($nome);

            if($Room->insert()){
                echo "Room ". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>
            <input type="submit" name="cadastrar"/>
            
    </form>

        </div>
        <div class="center">
        </div>
    </main>
    
</body>
</html>
