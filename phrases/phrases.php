<!DOCTYPE html>
<html>
    <head>
        <title>Sprüche</title>
    </head>
    <body>
        <?php include "../nav/nav.php" ?>
        <?php include "../connect/connect.php" ?>
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

            <hr>

            <div id="phraselist">
                <?php
                    $phrase = "SELECT * FROM phrases"; 
                    echo("<table>");
                    foreach($pdo->query($phrase) as $col)
                    {
                        echo("<tr><td>" . $col["phrase"] . "</td>");
                        if($col["checked"] == 1){
                            echo("<td><input type='checkbox' name='".$col["phrase"]."' checked /></td></tr>");
                        }else{
                            echo("<td><input type='checkbox' name='".$col['phrase']."'/></td></tr>");
                        };
                    }
                    echo("</table>");
                ?>
            </div>

        </main>
    </body>
</html>