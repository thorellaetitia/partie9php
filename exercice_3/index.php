<?PHP
setlocale(LC_TIME, 'fr_FR.UTF8');
?>


<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 9- Les dates</title>  
    </head>
    <body>
        <h1>exercice_3 partie 9 php Les dates</h1>
        <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
            Bonus : Le faire en français.</p>
        <p><?php
              
            $date = date('l d F Y');
            echo $date;
            ?>
        <p> <?= strftime('%A %d %B %Y'); ?></p>
        </p>   

    </body>
</html>