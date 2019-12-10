<?php
include "../connect/connect.php";

$options = [
    'cost' => 12,
];
$password = password_hash($_POST['pass'], PASSWORD_BCRYPT, $options);

$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username LIMIT 1");
$stmt->bindParam(":username", $_POST['user']);
$stmt->execute();
$result = $stmt->fetchColumn();

if($result == 1) //user existiert bereits
{
    header('Location: regist.php?login=false'); 
}
else{ //user existiert noch nicht -> hinzufügen
    $stmt = $pdo->prepare("INSERT INTO users(username, password) VALUES(:username,:password)");
    $stmt->bindParam(":username", $_POST['user']);
    $stmt->bindParam(":password", $password);
    $stmt->execute(); 

    header('Location: regist.php?login=true'); 
}
?>