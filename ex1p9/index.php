<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).-->

<?php
$date = date('d/m/Y');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <p> Nous sommes le <?= $date; ?></p>
    </body>
</html>





