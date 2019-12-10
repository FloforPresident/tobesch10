<!DOCTYPE html>
<html>
    <head>
        <title>Registrieren</title>
        <link rel="stylesheet" href="regist.css">
        <script type="module" src="registMain.js"></script>
    </head>
    <body>
        <header>
            <nav><ul>
                <li><a href="..\index.php">Startseite</a></li>
                <li>Registrieren</li>
            </ul></nav>
        </header>
        <main>
            <h2>Registrierung</h2>
            <form name="regist" id="registFormular" action="tryRegist.php" method="post">
                <input type="text" id="user" name="user" placeholder="Username"><br>
                <input type="password" id="pass" name="pass" placeholder="Passwort"><br>
                <input type="password" id="passConfirm" name="Confirm" placeholder="Passwort bestätigen"><br>
                <button type="button" name="registButton" onclick="startValidation()">Registrieren</button>
            </form>

            <p id="message">
            <?php
                if(isset($_GET['login'])){
                    if($_GET['login'] == 'true'){
                        echo 'Sie wurden erfolgreich registriert';
                    }
                    else{
                        echo 'Username ist bereits vorhanden';
                    }
                }
            ?>
            </p>
        </main>
    </body>
</html>