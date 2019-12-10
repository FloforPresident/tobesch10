<!DOCTYPE html>
<html>
    <head>
        <title>Sprüche</title>
        <link rel="stylesheet" href="../regist/regist.css">
    </head>
    <body>
        <header>
            <nav><ul>
            <li><a href="..\index.php">Startseite</a></li>
                <li>Bingo</li>
                <li><a href="..\regist/regist.php">Registrieren</a></li>
            </ul></nav>
        </header>
        <main>
            <h2>Bingo</h2>
            <form name="bingo" id="bingoFormular" action="phrasesValidate.php" method="post">
                <input type="text" id="phrase" name="phrase" placeholder="Dummer Spruch"><br>
                <button type="submit" name="submit">Abschicken</button>
            </form>

            <?php
                if(isset($_GET['phrase'])){
                    if($_GET['phrase'] == 'true'){
                        echo 'Satz hinzugefügt';
                    }
                    else{
                        echo 'Satz bereits vorhanden';
                    }
                }
            ?>
            </p>
        </main>
    </body>
</html>