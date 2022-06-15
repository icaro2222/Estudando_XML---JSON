<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../../app/controller/Room.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<link rel="stylesheet" href="../../public/css/style.css">
<head>
        <title>Lista de Room</title>
</head>

<body>
   
	<main>
    <h1>Listar Room</h1>
    
    
    <a href="../"><button>Voltar</button></a>

    <!-- Inicio da tabela -->
    <table class="table">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>Endereco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $room=New Room;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $room->delete($id);
                    }
                                                         
                    
                    

                    foreach ($room->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->nome;?> </td>
                        <td> <?php echo $value->endereco;?> </td>
                    <td>

                        <form method="post" action="Alterarroom.php">
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                         </form>
                        <td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->



    </form>
    </main>
    
</body>
</html>
