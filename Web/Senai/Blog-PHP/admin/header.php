<?php

    include_once(dirname(__FILE__).'/../config/connection.php');

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Meus Posts</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<main class="col-md-9 col-lg-10">
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                <h2>Bom dia,  <?php echo $_SESSION['nome']; ?> </h2>
                <p><a href="?sair">Deslogar</a></p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-item">Controlar Posts</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item">Controlar Slides</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</main>