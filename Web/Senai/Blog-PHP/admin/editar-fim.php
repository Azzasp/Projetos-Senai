<?php
include_once(dirname(__FILE__).'/../config/connection.php');

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

$stmt = $conectar->prepare('UPDATE posts SET id = :id, title = :title, description = :description WHERE id = :id');

$stmt->bindParam(":title", $title);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":id", $id);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header('Location: view2.php');
?>
