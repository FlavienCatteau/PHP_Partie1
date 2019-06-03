<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice4</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 4</h1>
                <p class="lead text-center">Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.</p>
                <p class="lead text-center">Les afficher.</p>
        </header>
        <main>
            <?php
            $string .= 'abc';
            $int += 25;
            $float += 1.25;
            $bool = true;
            ?>
            <p class="text-center">Type string : <?= $string ?></p>
            <p class="text-center">Type int : <?= $int ?></p>
            <p class="text-center">Type float : <?= $float ?></p>
            <p class="text-center">Type boolean : <?= $bool ?></p>
        </main>
    </body>
</html>
