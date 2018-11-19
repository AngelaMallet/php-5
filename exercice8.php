<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <?php
    $first = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    foreach ($first as $value) {
    ?>
        <p><?= $value; ?></p>
    <?php
    }
    ?>

</html>

