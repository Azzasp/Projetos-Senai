<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Posts</title>
</head>
<body>
    <form action="admin/insert.php" method="POST">
        <div class="container">
            <div>
                <label>Digite o Título:</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Descrição:</label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </div>
    </form>
    <form action="admin/delete.php" method="POST">
        <div class="container">
            <div>
                <label>Delete por ID:</label>
                <input type="text" name="id">
            </div>
            <div>
                <input type="submit" value="Deletar">
            </div>
        </div>
    </form>
    <form action="admin/update.php" method="POST">
        <div class="container">
            <div>
                <label>Digite o ID do usuario:</label>
                <input type="text" name="id">
            </div>
            <div>
                <label>Digite o Título:</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Altere a Descrição:</label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <input type="submit" value="Atualizar">
            </div>
        </div>
    </form>
    <form action="admin/lista.php" method="POST">
        <div class="container">
            <div>
                <label>Digite o ID do usuario:</label>
                <input type="text" name="id">
            </div>
            <div>
                <input type="submit" value="Listar">
            </div>
        </div>
    </form>
</body>
</html>