<?php
include "../connect/connect.php";

$stmt = $pdo->prepare("SELECT COUNT(*) FROM phrases WHERE phrase = :phrase LIMIT 1");
$stmt->bindParam(":phrase", $_POST['phrase']);
$stmt->execute();
$result = $stmt->fetchColumn();

if($result == 1) //user existiert bereits
{
    header('Location: phrases.php?phrase=false'); 
}
else{ //user existiert noch nicht -> hinzufügen
    $stmt = $pdo->prepare("INSERT INTO phrases(phrase, checked) VALUES(:phrase, false)");
    $stmt->bindParam(":phrase", $_POST['phrase']);
    $stmt->execute(); 

    header('Location: phrases.php?phrase=true'); 
}
?>