<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice3</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 3</h1>
                <p class="lead text-center">Créer une variable km. L'initialiser à 1. Afficher son contenu.</p>
                <p class="lead text-center">Changer sa valeur par 3. Afficher son contenu.</p>
                <p class="lead text-center">Changer sa valeur par 125. Afficher son contenu.</p>
            </div>
        </header>
        <main>
            <?php
            $km = 1;
            $more = 3;
            $moreMore = 125;
            ?>
            <p class="text-center">Au début j'ai parcouru <?= $km ?> km et pas à pas ce fut <?= $km*$more ?> km. J'y ai pris goût et aujourd'hui je parcour <?= $km*$moreMore ?> km par semaine.</p>
        </main>
    </body>
</html>
