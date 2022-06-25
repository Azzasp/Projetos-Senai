<?php

$user ="root";
$pass = "";
$dbname = "atividade";
$host = "localhost";

try{
    $connect = new PDO("mysql:host =" .$host."; dbname=" .$dbname,$user,$pass);
}catch(Exception $e){
    echo "$e";
}

?>