<?php
    require_once 'assets/controller/controller.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="flex">
        <ul class="flex">
            <?php foreach ($contenu as $key) {?>

                <li><a href="index.php?page=<?= $key['id']; ?>"><?= $key->menu ?></a></li>
                
            <?php } ?>
        </ul>
    </nav>

              
            <?= $contenu->page[intval($numpage)]->title ;?>
            <?= $contenu->page[intval($numpage)]->content ;?>
        

<footer class="footer-perso">
   <div class="contener">
       <div class="row">
           <div class="col-12 py-4 text-center">
               <span>@copiright Félix Noël && Anthony Le Play</span>
           </div>
       </div>
   </div>
</footer>
</body>

</html>