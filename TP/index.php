<?php
$jeOui = 1;
$yearMin = 1987;
$yearMax = 2019;
//Initialisation des mois
$month = (int) (isset($_GET['month']) ? $_GET['month'] : date('m'));
//initialisation des années
$year = (int) (isset($_GET['year']) ? $_GET['year'] : date('Y'));
//ccalcul du nombre de jours dans le mois et année selectionnée
$nbJours = cal_days_in_month(CAL_GREGORIAN, $month, $year);
// //initialisation de la date souhaitée
//$date = new DateTime('1-2-2018');
// //mise en place du format 1=Lundi, 7=Dimanche
//$date->format('N');
//Tableaux des mois
$arrayMonths = [
    1 => 'Janvier',
    2 => 'Fevrier',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Decembre'
];
//Initialisation du jour de départ dans le calendrier par rapport au mois et à l'année
$startDay = strftime('%u', strtotime(date($month . '/1/' . $year)));
$totalCase = $startDay + $nbJours -1;
if (($totalCase %7) != 0){
$totalCase = $totalCase+(7-($totalCase %7));    
}
var_dump($startDay);
?>
<!--debut de l'html-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!--petit CSS pour faire joli-->
        <link rel="stylesheet" href="style.css" type="text/css" />
        <!--petit titre pour rappel-->
        <title>exoTP</title>
    </head>
    <body>
        <!--Formulaire-->
        <form method="get">
            <!--select année-->
            <select name="year">
                <!--liste déroulante-->
                <?php
                for ($a = $yearMin; $a <= $yearMax; $a++) {
                    echo '<option value="' . $a . '">' . $a . '</option>';
                }
                ?>
            </select>
            <!--select mois-->
            <select name="month">
                <!--pour chaque index on affiche son nom-->
                <?php foreach ($arrayMonths as $monthIndex => $monthName) { ?>
                    <option value="<?= $monthIndex; ?>"><?= $monthName; ?> </option>
                    <?php
                }
                ?>
            </select>
            <!--boutton envoie-->
            <input type="submit" value="Générer" />
        </form>
        <!--affichage du mois et année selectionnée-->
        <p><?= $arrayMonths[$month] . ' / ' . $year; ?></p><br/>
        <table>
            <!--haut du tableau-->
            <thead>                
                <tr> 
                    <th>Lun</th> 
                    <th>Mar</th> 
                    <th>Mer</th> 
                    <th>Jeu</th> 
                    <th>Ven</th> 
                    <th>Sam</th> 
                    <th>Dim</th> 
                </tr> 
            </thead>
            <!--Corps du tableau-->
            <tbody>                   
                <tr>
                    <!--boucle pour que le tableau commence au lundi mais se décale au 1 du mois demander-->
                    <?php for ($case = 1; $case <= $totalCase; $case++) { 
                    if ($case >= $startDay) { ?>
                    <td><?= $jeOui <= $nbJours ? $jeOui : ''; ?></td>
                    <?php 
                    $jeOui++;
                    } else { ?>
                        
                        <td></td>
                    <?php }
                       
                        
                        if (($case %7) == 0) {?>
                            </tr><tr>
                        <?php }
                    }
                    ?>
        </tr> 
    </tbody> 
</table>
</body>
</html>