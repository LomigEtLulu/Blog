<?php require 'Controleur/Controleur.php';

    try {
        if (isset($_GET['action'])){
            if ($_GET['action'] == 'billet'){
                $idBillet = $_GET['idBillet'];
                unBillet($idBillet);
            }

            else{
                erreur("Action non valide");
            }

        }
        else{
            accueil();
        }

    }

    catch (Exception $e) {
       erreur($e->getMessage());
    }                
                    
