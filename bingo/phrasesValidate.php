<?php
include "../connect/connect.php";
session_start();

$stmt = $pdo->prepare("SELECT COUNT(*) FROM phrases WHERE phrase = :phrase LIMIT 1");
$stmt->bindParam(":phrase", $_POST['phrase']);
$stmt->execute();
$result = $stmt->fetchColumn();

if($result == 1) //user existiert bereits
{
    header('Location: bingo.php?phrase=false'); 
}
else{ //user existiert noch nicht -> hinzufügen
    $date = date("Y-m-d");
    $kw = date("W", strtotime($date));

    $stmt = $pdo->prepare("INSERT INTO phrases(phrase, checked, user, stamp, kw) 
                            VALUES(:phrase, false, :user, :stamp, :kw)");
    $stmt->bindParam(":phrase", $_POST['phrase']);
    $stmt->bindParam(":user", $_SESSION['username']);
    $stmt->bindParam(":stamp", $date);
    $stmt->bindParam(":kw", $kw);
    $stmt->execute(); 

    header('Location: bingo.php?phrase=true'); 
}
?>