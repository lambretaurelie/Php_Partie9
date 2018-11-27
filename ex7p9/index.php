<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Afficher la date du jour + 20 jours.-->

<?php
$dateDuJour = date('d-m-Y');
$dateDay = date('Y-m-d');
$date = strtotime(date("Y-m-d", strtotime($dateDay)) . " +20 day");
$date20J = date("d-m-Y", $date);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <p> Date du jour : <?= $dateDuJour; ?></p>
        <p> Date dans 20 jours: <?= $date20J; ?></p>
    </body>
</html>




