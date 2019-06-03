<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice8</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 8</h1>
                <p class="lead text-center">Créer 3 variables.</p>
                <p class="lead text-center">Dans la première mettre le résultat de l'opération 3 + 4.</p>
                <p class="lead text-center">Dans la deuxième mettre le résultat de l'opération 5 * 20.</p>
                <p class="lead text-center">Dans la troisième mettre le résultat de l'opération 45 / 5.</p>
                <p class="lead text-center">Afficher le contenu des variables.</p>
        </header>
        <main>
            <?php
            $addition = 3+4;
            $multiplication = 5*20;
            $division = 45/5;
            ?>
            <p class="text-center">Addition : <?= $addition ?></p>
            <p class="text-center">Multiplication : <?= $multiplication ?></p>
            <p class="text-center">Division : <?= $division ?></p>
            <p class="text-center">Total : <?= $addition+$multiplication+$division ?></p>
        </main>
    </body>
</html>
