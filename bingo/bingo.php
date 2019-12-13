<!DOCTYPE html>
<html>
    <head>
        <title>Bingo</title>
        <script src="search.js"></script>
        <style>
            header nav ul li:nth-child(2){
                background-color: #92a4c5
            }
        </style>
    </head>
    <body>
        <?php include "../nav/nav.php" ?>
        <?php include "../connect/connect.php" ?>
        <main>
            <section>
                <p id="message">
                <?php
                    if(isset($_GET['phrase'])){
                        if($_GET['phrase'] == 'true'){
                            echo 'Spruch hinzugefügt';
                        }
                        else{
                            echo 'Spruch bereits vorhanden';
                        }
                    }
                ?>
                </p>

                <h3>Neuen Spruch hinzufügen</h3>
                <?php if(isset($_SESSION['user_id'])){?>
                    <form name="bingo" id="bingoFormular" action="phrasesValidate.php" method="post">
                        <input type="text" id="phrase" name="phrase" placeholder="Dummer Spruch" autocomplete="off" required><br>
                        <button type="submit" name="submit">Abschicken</button>
                    </form>
                <?php } else{
                    echo ("<button><a href='../regist/regist.php'>Anmelden</a></button>");
                }?>
            </section>


            <section id="phraselist">
                <h3>Bereits hinzugefügte Sprüche</h3>

                <div id="phrases">
                <?php
                    $phrase = "SELECT * FROM phrases ORDER BY stamp DESC"; 
                    echo("<ul>");
                    foreach($pdo->query($phrase) as $col)
                    { ?>
                        <p>"<? echo $col["phrase"]; ?>" <span>- von <? echo $col["user"] . " " . $col["stamp"] ?></span></p>
                     <?php   
                        // if($col["checked"] == 1){
                        //     echo("<input type='checkbox' name='".$col["phrase"]."' checked />");
                        // }else{
                        //     echo("<input type='checkbox' name='".$col['phrase']."'/>");
                        // };
                    }
                    echo("</ul>");
                ?>
                </div>
            </section>

        </main>
    </body>
</html>