<?php

    include_once('../config/conn.php');

    $id = $_POST['id'];
    

    $stmt = $connect->prepare("DELETE FROM posts WHERE id=:id");

    $stmt->bindparam(':id', $id);

    $stmt->execute();

    header("location: ../index.php");


?>