<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice5</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 5</h1>
                <p class="lead text-center">Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.</p>
                <p class="lead text-center">Donner une valeur à cette variable et l'afficher.</p>
        </header>
        <main>
            <?php
            $int = null;
            ?>
            <p class="text-center">Type int : <?= $int ?></p>
            <?php
            $int = 25;
            ?>
            <p class="text-center">Type int : <?= $int ?></p>
        </main>
    </body>
</html>
