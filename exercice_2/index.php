<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 9- Les dates</title>  
    </head>
    <body>
        <h1>exercice_2 partie 9 php Les dates</h1>
        <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
        <p><?php
            $date = date('d-m-y');
            echo $date;
            ?>
        </p>   

    </body>
</html>