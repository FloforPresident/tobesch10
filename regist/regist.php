<!DOCTYPE html>
<html>
    <head>
        <title>Registrieren</title>
        <script type="module" src="registMain.js"></script>
    </head>
    <body>
        <?php include "../nav/nav.php" ?>

        <main>            
            <?php if(isset($_SESSION['user_id'])){ ?>
                <p id="message">Servus <?php echo $_SESSION['username'] ?>, schön dass du dich zeigst</p><br>

                <section id="logout">
                    <h2>Abmelden</h2>
                        <form action="logout.php" method="post">
                        <button type="submit" name="submit">Und los!</button>
                    </form>
                </section>
            <?php } 
            else{?>
                <section id="regist">
                    <h2>Registrieren...</h2>
                    <form name="regist" id="registFormular" action="tryRegist.php" method="post">
                        <input type="text" id="user" name="user" placeholder="Username"><br>
                        <input type="password" id="pass" name="pass" placeholder="Passwort"><br>
                        <input type="password" id="passConfirm" name="Confirm" placeholder="Passwort bestätigen"><br>
                        <button type="button" name="registButton" onclick="startValidation()">Registrieren</button>
                    </form>

                    <p id="message">
                    <?php
                        if(isset($_GET['regist'])){
                            if($_GET['regist'] == 'true'){
                                echo 'Sie wurden erfolgreich registriert';
                            }
                            else{
                                echo 'Username ist bereits vorhanden';
                            }
                        }
                    ?>
                    </p>
                </section>

                <section id="login">
                    <h2>...oder Anmelden</h2>
                    <form action="login.php" method="post">
                        <input type="text" name="username" placeholder="Username" required><br>
                        <input type="password" name="password" placeholder="Passwort" required><br>
                        <button type="submit" name="submit">Und los!</button>
                    </form>
                </section>
            <?php } ?>
        </main>
    </body>
</html>