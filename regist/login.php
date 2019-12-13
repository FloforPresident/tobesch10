<?php
session_start();
include "../connect/connect.php";

if (!empty( $_POST)) {
    if ( isset($_POST['username']) && isset($_POST['password']) ) {

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->execute();
        $user = $stmt->fetch();

        if ( password_verify( $_POST['password'], $user['password'] ) ) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $_POST['username'];
            header('Location: regist.php?login=true');
        }
        else{
            header('Location: regist.php?login=false');
        }
    }
}
?>