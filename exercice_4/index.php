<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 9- Les dates</title>  
    </head>
    <body>
        <h1>exercice_4 partie 9 php Les dates</h1>
        <p>Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.
        </p>
        <p><?php
            $date = new DateTime();
            echo $date->getTimestamp();
            ?></P>
        <p><?php
            $date = new DateTime('2-08-2016');
            echo $date->getTimestamp();
            ?></p>

    </p>   

</body>
</html>