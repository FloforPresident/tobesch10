<!DOCTYPE html>
<html>
    <head>
        <title>Registrieren</title>
        <script type="module" src="registMain.js"></script>
        <style>
            header nav ul li:last-child{
                background-color: #92a4c5
            }
        </style>
    </head>
    <body>
        <?php include "../nav/nav.php" ?>

        <main>
            <p id="message">
                    <?php
                        if(isset($_GET['regist'])){
                            if($_GET['regist'] == 'true'){
                                echo 'Du hast dich erfolgreich registriert <br>';
                            }
                            else{
                                echo 'Username ist bereits vorhanden';
                            }
                        };
                        if(isset($_GET['login'])){
                            if($_GET['login'] == 'false'){
                                echo "Da stimmt was nicht";
                            }
                        };
                        if(isset($_SESSION['user_id'])){
                            echo "Servus " . $_SESSION['username'] . ", du schwein!";
                        };
                    ?>
            </p>            
            
            <?php if(isset($_SESSION['user_id'])){ ?>
                <section id="logout">
                    <h2>Abmelden</h2>
                        <form action="logout.php" method="post">
                        <button type="submit" name="submit">Verschwind du Säckel!</button>
                    </form>
                </section>
            <?php } 
            else{?>
                <section id="regist">
                    <h2>Registrieren...</h2>
                    <form name="regist" id="registFormular" action="tryRegist.php" method="post">
                        <input type="text" id="user" name="user" placeholder="Username" autocomplete="off"><br>
                        <input type="password" id="pass" name="pass" placeholder="Passwort" ><br>
                        <input type="password" id="passConfirm" name="Confirm" placeholder="Passwort bestätigen"><br>
                        <button type="button" name="registButton" onclick="startValidation()">Registrieren</button>
                    </form>
                </section>

                <section id="login">
                    <h2>...oder Anmelden</h2>
                    <form action="login.php" method="post">
                        <input type="text" name="username" placeholder="Username" required autocomplete="off"><br>
                        <input type="password" name="password" placeholder="Passwort" required><br>
                        <button type="submit" name="submit">Anmelden</button>
                    </form>
                </section>
            <?php } ?>    
        </main>
    </body>
</html>