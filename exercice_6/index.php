<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 9- Les dates</title>  
    </head>
    <body>
        <h1>exercice_6 partie 9 php Les dates</h1>
        <p>Afficher le nombre de jour dans le mois de février de l'année 2016.
        </p>
        <p><?php
        
            $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); //on détermine la variable number = (calendrier, mois, année)
            echo 'Le mois de Février 2016 compte ' . $number . ' jours'; //on affiche la variable number 
            //// dans une phrase et en simple cote on concatène avec les .
            
            ?></p>


    </p>   

</body>
</html>