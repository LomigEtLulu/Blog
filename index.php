<?php require 'Controleur/Controleur.php';

    try {
        if (isset($_GET['action'])){
            if ($_GET['action'] == 'billet'){
                if (isset($_GET['id'])){
                    $idBillet = $_GET['id'];
                    unBillet($idBillet);
                }
                else{
                    erreur("Identifiant de billet non défini");
                }
                
            }

            else{
                erreur("Action non validé");
            }

        }
        else{
            accueil();
        }

    }

    catch (Exception $e) {
       erreur($e->getMessage());
    }                
                    
