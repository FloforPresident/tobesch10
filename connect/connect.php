<?php

    $db = "testdb";

    try{
        $pdo = new PDO("mysql:host=localhost;dbname={$db}" , 'root', '');
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }


?>