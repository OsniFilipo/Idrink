
 
<?php
    require_once 'connection/conecta_banco.php';

    $drinkId = $_POST["drinkId"];
    $qtd = $_POST["quantidade"];
    $valor = $_POST["valor"];

    $valorFinal = $qtd * $valor;


    $sql = "INSERT INTO carrinho (drinkId, quantidade, valor) VALUES (" . $drinkId . "," . $qtd . "," . $valorFinal . ")";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

 ?>