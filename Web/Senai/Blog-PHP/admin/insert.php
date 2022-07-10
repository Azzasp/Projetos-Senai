<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Inserir</title>
</head>
<body>   
    <div class="container">
        <h1>Inserir</h1>
        <form action="enviar.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Titulo</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Data</label>
                <input type="date" name="data" class="form-control"  placeholder="DD/MM/AA" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Texto Descritivo</label>
                <input type="text" name="description" class="form-control"  placeholder="Descrição" id="exampleInputPassword1">
            </div>
            <input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image"/>
            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>