<?php include "../connect/connect.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Startseite</title>

        <script>
            function showLanguage(language){
                alert("baguette")
            }
        </script>
        <style>
            header nav ul li:first-child{
                background-color: #92a4c5
            }
        </style>
    </head>
    <body>
        <?php include "../nav/nav.php" ?>

        <main>
            <div id="changeLanguage">
                <img class="flag" onclick="showLanguage(this)" src="../images/germany-flag-icon-128.png">
                <img class="flag" onclick="showLanguage(this)" src="../images/france-flag-icon-128.png">
            </div>

            <section class="feed">
                <h2>Bullshit of the Week</h2>
                
                <?
                $date = date("Y-m-d");
                $currDate = date("W", strtotime($date));
                $day = date("D", strtotime($date)); 
                ?>
                
                <div id="phrases">
                    <?php
                    $phrase = "SELECT * FROM phrases WHERE kw = $currDate"; 
                    echo("<ul>");
                    foreach($pdo->query($phrase) as $col)
                    { ?>
                        <p>"<? echo $col["phrase"]; ?>" <span>- von <? echo $col["user"] . " am " . $day ?></span></p>
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
        
            <section class="feed">
                <h2>Cool Kids Dance like Zyzz</h2>
                <p>Bei den coolen Kids steht der so genannte Zyzz - Dance hoch im Kurz, hör auf zu twerken und Dance like Zyzz #Sickkunt</p>
        
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/iht8pmM8Eeo" 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        </main>
</body>
</html>