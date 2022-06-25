<?php

    //include('./config/connection.php');
    include_once(dirname(__FILE__).'/../config/connection.php');

    $stmt = $conectar->prepare("DELETE FROM posts WHERE id = :ID");
    $id = $_GET['id'];
    $stmt->bindparam(':ID', $id);
    $stmt->execute();

    echo "Registro Apagado!";

?>