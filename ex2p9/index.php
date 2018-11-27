<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)-->

<?php
$date = date('d-m-y');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <p> Nous sommes le <?= $date; ?></p>
    </body>
</html>








