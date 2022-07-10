<?php

    include_once('../config/conn.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    

    $stmt = $connect->prepare("UPDATE posts SET title = :title, description = :description WHERE id= :id");

    $stmt->bindparam(':id', $id);
    $stmt->bindparam(':title', $title);
    $stmt->bindparam(':description', $description);

    $stmt->execute();

    header("location: ../index.php");


?>