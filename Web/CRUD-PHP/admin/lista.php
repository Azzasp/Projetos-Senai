<?php

    include_once('../config/conn.php');

    $id = $_POST['id'];
      

    $stmt = $connect->prepare("SELECT*FROM posts WHERE id=:id");

    $stmt->bindparam(':id', $id);
    $stmt->execute();

    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
    print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <form action="return.php">
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>