<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../main.css">
    </head>
    <body>
        <header>
            <p><?php
                if(isset($_SESSION['user_id'])){
                    echo $_SESSION['username'];
                }
            ?></p>
            <nav><ul>
                <li><a href="../main/main.php">Startseite</a></li>
                <li><a href="../bingo/bingo.php">Bingo</a></li>
                <li><a href="../phrases/phrases.php">Phrasen</a></li>
                <li><a href="../regist/regist.php">Account</a></li>
            </ul></nav>
        </header>
    </body>
</html>