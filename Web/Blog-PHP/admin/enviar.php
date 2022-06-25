<?php
    
    include('../config/connection.php');

        $stmt = $conectar->prepare("INSERT INTO posts(title, description, data, image) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE)");
        
        $title = $_POST['title'];
        $description = $_POST['description'];
        $data = $_POST['data'];

        $arquivo = $_FILES['image'];

        move_uploaded_file($arquivo['tmp_name'],'../uploads/'.$arquivo['name']);

        $image = 'uploads/'.$arquivo['name'];

        $stmt->bindParam(":TITLE", $title);
        $stmt->bindParam(":DESCRIPTION", $description);
        $stmt->bindParam(":DATA", $data);
        $stmt->bindParam(":IMAGE", $image);

        $stmt->execute();
        header("location: view2.php");

?>