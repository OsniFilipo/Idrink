
 
<?php
    require_once 'connection/conecta_banco.php';

    $id = $_POST["drinkId"];


    $stmt = $conn->prepare("SELECT id,nome,valor,descricao,fotoDrink,fotoMateriais FROM drink where id = " . $id);
    $stmt->execute();
    $listaUsuario = $stmt->fetchAll();
    echo json_encode($listaUsuario);


 ?>