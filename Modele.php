 <?php
        function getBillets(){
                $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root', '');
                $billets = $bdd->query('select idBillet as id, dateBillet as date,'
                        . ' titreBillet as titre, contenuBillet as contenu from BILLET'
                        . ' order by idBillet desc');
                return $billets;
        }