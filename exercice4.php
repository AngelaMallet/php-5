<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <?php
        $base = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        $replacements = array(7 => 'août');
        $months = array_replace($base, $replacements);
        //$base[7] = 'août';
        print_r($months);
        ?>
    </body>
</html>

