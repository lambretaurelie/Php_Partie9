<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Afficher le nombre de jour dans le mois de février de l'année 2016.-->

<?php
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <p> En février 2016, il y avait : <?= $number; ?> jours</p>
    </body>
</html>







