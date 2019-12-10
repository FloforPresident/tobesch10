<!DOCTYPE html>
<html>
    <head>
        <title>Sprüche</title>
    </head>
    <body>
        <?php include "../nav/nav.php" ?>
        <main>
            <h2>Bingo</h2>
            <form name="bingo" id="bingoFormular" action="phrasesValidate.php" method="post">
                <input type="text" id="phrase" name="phrase" placeholder="Dummer Spruch"><br>
                <button type="submit" name="submit">Abschicken</button>
            </form>

            <p id="message">
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