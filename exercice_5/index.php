<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 9- Les dates</title>  
    </head>
    <body>
        <h1>exercice_5 partie 9 php Les dates</h1>
        <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
        </p>
        <p><?php
        
            $datetime1 = new DateTime('2016-05-16'); //C'EST mieux de séparer les procédures PHP et de les mettre en haut
            $datetime2 = new DateTime ('2018-11-27');
            $interval = $datetime1->diff($datetime2);
            echo $interval->format('%R%a days');
            
            ?></p>
        

    </p>   

</body>
</html>