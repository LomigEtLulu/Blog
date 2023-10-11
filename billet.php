<?php require 'Modele.php';
    try {
    $id = $_GET['id'];
    $billet = getBillet($id);
    $commentaires = getCommentaires($id);
    $contenu ='vueBillet.php';
    require 'gabarit.php';
    }
    catch (Exception $e) {
        $msgErreur = $e->getMessage();
        $contenu ='vueErreur.php';
        require 'gabarit.php.';
    }                
       