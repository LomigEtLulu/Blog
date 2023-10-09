<?php require 'Modele.php';
    try {
        $id = $_GET['$id'];
    $billets = getBillet($id);
    $contenu='vueBillet.php';
    require 'gabarit.php';
    }
    catch (Exception $e) {
        $msgErreur = $e->getMessage();
        $contenu ='vueErreur.php';
        require 'gabarit.php.php';
    }                
       