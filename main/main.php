<!DOCTYPE html>
<html>
    <head>
        <title>Startseite</title>

        <script>
            function showLanguage(language){
                alert("baguette")
            }
        </script>
    </head>
    <body>
        <?php include "../nav/nav.php" ?>

        <main>
            <section id="changeLanguage">
                <h2>Auf welcher Sprache soll dir diese Seite angezeigt werden?</h2>
                <img class="flag" onclick="showLanguage(this)" src="../images/germany-flag-icon-128.png">
                <img class="flag" onclick="showLanguage(this)" src="../images/france-flag-icon-128.png">
            </section>

            <section class="feed">
                <h2>Cool Kids Dance like Zyzz</h2>
                <p>Bei den coolen Kids steht der so genannte Zyzz - Dance hoch im Kurz, hör auf zu twerken und Dance like Zyzz #Sickkunt</p>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/iht8pmM8Eeo" 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
            <section class="feed">
                <h2>Bullshit of the Week</h2>
                <p>Vote für den größten Bullshit dieser Woche</p>
            </section>
        </main>
    </body>
</html>