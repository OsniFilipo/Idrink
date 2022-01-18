<?php
    require_once 'connection/conecta_banco.php';


    $stmt = $conn->prepare("SELECT drink.id, nome, carrinho.valor, quantidade FROM carrinho inner join drink on carrinho.drinkId = drink.id");
    $stmt->execute();
    $listaCarrinho = $stmt->fetchAll();
    echo json_encode($listaCarrinho);

 ?>