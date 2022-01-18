
 
<?php
    require_once 'connection/conecta_banco.php';

    $sql = "delete from carrinho";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

 ?>