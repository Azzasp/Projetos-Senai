<?php

    $conectar = new PDO("mysql:dbname=blog; host=localhost", "root", "");

        "CREATE TABLE posts(
        id int NOT NULL auto_increment,
        title varchar(30) NOT NULL,
        description longtext,
        data date,
        image varchar(150),
        primary key (id)
        )DEFAULT CHARSET =utf8";
        

?>