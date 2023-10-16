<<<<<<< HEAD
<?php require 'Controleur.php';
=======
<?php require 'Controleur/Controleur.php';
>>>>>>> MVC++

    try {
        if (isset($_GET['action'])){
            if ($_GET['action'] == 'billet'){
<<<<<<< HEAD
                $idBillet = $_GET['id'];
                unBillet($idBillet);
            }
            
=======
                $idBillet = $_GET['idBillet'];
                unBillet($idBillet);
            }

>>>>>>> MVC++
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
                    
