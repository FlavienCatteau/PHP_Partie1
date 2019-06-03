<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice7</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1 class="display-3 text-center">Exercice 7</h1>
                <p class="lead text-center">Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.</p>
                <p class="lead text-center">Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</p>
        </header>
        <main>
            <?php
            $lastname = 'Le Gaulois';
            $firstname = 'Provençal';
            $age = '30';
            ?>
            <p class="text-center">Bonjour <?= $firstname,' ',$lastname ?>, tu as <?= $age ?> ans</p>
        </main>
    </body>
</html>
