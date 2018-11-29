<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 9- Les dates</title>  
    </head>
    <body>
        <h1>exercice_8 partie 9 php Les dates</h1>
        <p>Afficher la date du jour - 22 jours
        </p>
        <p>

            <?= date("d-m-Y", strtotime(" -22 day")); ?>  

        </p>



    </body>
</html>