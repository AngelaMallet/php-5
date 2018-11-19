<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    
        <?php
        $north = array('02'=>'Aisne', '59'=>'Nord', '60'=>'Oise', '62'=>'Pas-de-Calais', '80'=>'Somme');
        $north[51] = 'Marne';
        print_r($north);
        ?>
    
</html>

