<?php
    $fichier = 'source.xml';
    $contenu = simplexml_load_file($fichier);
    $numpage='';

    if(isset($_GET['page'])) {
        $numpage = $_GET['page'];
    }

        
?>