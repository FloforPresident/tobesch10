<?php include "../config/config.php";

    try{
        $pdo = new PDO("mysql:host=localhost;dbname={$db}" , 'admin', 'abc123');
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }


?>