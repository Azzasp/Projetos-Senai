<?php

    include_once('../config/conn.php');

    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $connect->prepare("INSERT INTO posts (title, description) VALUES (:title, :description)");

    $stmt->bindparam(':title', $title);
    $stmt->bindparam(':description', $description);

    $stmt->execute();

    header("location: ../index.php");


?>