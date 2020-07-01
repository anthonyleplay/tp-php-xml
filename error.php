<?php
require_once 'assets/controller/controller.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Ocordo - Error 404</title>
</head>

<body>

    <nav class="flex">
        <ul class="flex">
            <?php foreach ($contenu as $key) { ?>
                <li><a href="page-<?= $key['id']?>"><?= $key->menu ?></a></li>
            <?php } ?>
        </ul>
    </nav>
    <main class="main-perso">
        <section class="container ">
            <div class="row text-center">
                <div class="col-12 my-5 py-5">
                    <h1>Error 404</h1>
                    <p>cette page n'existe pas</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-perso">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-4 text-center">
                    <span>@copiright Félix Noël && Anthony Le Play</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>