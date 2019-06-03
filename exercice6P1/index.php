<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice6</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 6</h1>
                <p class="lead text-center">Créer une variable name et l'initialiser avec la valeur de votre choix.</p>
                <p class="lead text-center">Afficher : "Bonjour" + name + ", comment vas tu ?".</p>
        </header>
        <main>
            <?php
            $name = 'Provençal le Gaulois';
            ?>
            <p class="text-center">Bonjour <?= $name ?>, comment allez vous ?</p>
        </main>
    </body>
</html>
