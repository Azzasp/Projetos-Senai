<?php

    include_once('../config/connection.php');

    $id = $_GET['id'];

    $stmt = $conectar->prepare("SELECT id, title, description, data FROM posts WHERE id = :id");
    $stmt->execute(array('id' =>$id));

    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <div class="container">
        <?php foreach($result as $post): ?>
            <h1><?= $post['title'] ?></h1>
		    <p><?= date('d/m/Y', strtotime($post['data'])); ?></p>
		    <p>
		        <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
		    </p>
		    <p><?= $post['description'] ?></p>
        <?php endforeach; ?>
    </div>

    <?php include_once('../PHP/footer.php'); ?>
</body>
</html>
