<?php
session_start();
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
    header('Location: regist.php?regist=false'); 
}
else{ //user existiert noch nicht -> hinzufügen
    $stmt = $pdo->prepare("INSERT INTO users(username, password) VALUES(:username,:password)");
    $stmt->bindParam(":username", $_POST['user']);
    $stmt->bindParam(":password", $password);
    $stmt->execute(); 

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(":username", $_POST['user']);
    $stmt->execute();
    $user = $stmt->fetch();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    header('Location: regist.php?regist=true'); 
}
?>