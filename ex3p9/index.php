<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français..-->

<?php
$date = date('l d F Y'); // format date en anglais
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <p> Nous sommes le <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
echo (strftime("%A %d %B %Y")); ?></p> 
</html>









