<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 10 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <?php
        $north = array('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme');
        foreach ($north as $key => $value) {
            ?>
            <p><?= 'le département ' . $value . ' à le numéro ' . $key ?></p>
            <?php
        }
        ?>
    </body>
</html>

