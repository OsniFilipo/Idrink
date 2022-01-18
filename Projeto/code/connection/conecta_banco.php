<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "banco_site";
 try {
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 } catch(PDOException $e) 
 {
 echo "Erro: " . $e->getMessage();
 $conn = null;
 }
?> 
