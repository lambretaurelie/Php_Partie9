<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00.-->

<?php
$date = time(); //Affiche le nombre de secondes écoulées depuis le 1er janvier 1970
$date1 = mktime(15, 00, 00, 2, 8, 2016);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <p> timestamp du jour : <?= $date; ?></p>
        <p> timestamp du mardi 2 août 2016 à 15h00 : <?= $date1; ?></p>  
    </body>
</html>






