<<<<<<< HEAD
<?php require 'Controleur.php';
=======
<?php require 'Controleur/Controleur.php';
>>>>>>> MVC++

    try {
        if (isset($_GET['action'])){
            if ($_GET['action'] == 'billet'){
<<<<<<< HEAD
<<<<<<< HEAD
                $idBillet = $_GET['id'];
                unBillet($idBillet);
            }
            
=======
                $idBillet = $_GET['idBillet'];
                unBillet($idBillet);
=======
                if (isset($_GET['id'])){
                    $idBillet = $_GET['id'];
                    unBillet($idBillet);
                }
                else{
                    erreur("Identifiant de billet non défini");
                }
                
>>>>>>> MVC++
            }

>>>>>>> MVC++
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
                    
