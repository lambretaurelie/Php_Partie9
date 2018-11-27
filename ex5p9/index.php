<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016..-->

<?php
$date = time(); //Affiche le nombre de secondes écoulées depuis le 1er janvier 1970
$date1 = mktime(00, 00, 00, 16, 5, 2016);//Affiche le nombre de secondes écoulées depuis le 16 mai 2016 15h00
$dateDuJour = date('d/m/Y');
$dateJour2 = date('16/5/2016');
$interval1 = $date - $date1;
//méthode 2
$datetime1 = new DateTime('2018-11-27');
$datetime2 = new DateTime('2016-05-16');
$interval = $datetime2->diff($datetime1);
?> 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <p> Date du jour : <?= $dateDuJour; ?></p>
        <p> timestamp du jour : <?= $date; ?></p> 
        <p> Date du : <?= $dateJour2; ?></p> 
        <p> timestamp du mardi 16 mai 2016 : <?= $date1; ?></p> 
        <p>le timestemps qui sépare les deux dates :  <?= date($interval1); ?></p>
        <!-- méthode 2-->
        <p>Nombre de jour qui sépare les deux dates :  <?= $interval->format('%R%a jours'); ?></p>
    </body>
</html>






