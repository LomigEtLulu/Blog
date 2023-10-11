 <?php

         function getBdD(){
                $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root', '');
                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                        return $bdd;
        }

        function getBillets(){
                $bdd =getBdD();
                $billets = $bdd->query('select idBillet as id, dateBillet as date,'
                        . ' titreBillet as titre, contenuBillet as contenu from BILLET'
                        . ' order by idBillet desc');
                $posts = $billets->fetchAll();
                        return $posts;
        }

        function getBillet($id){
                $bdd = getBdD();
                $billet = $bdd->prepare('select idBillet as id, dateBillet as date,'
                        . ' titreBillet as titre, contenuBillet as contenu from BILLET'
                        . ' where idBillet= ?');
                $billet->bindParam(':id',$id,PDO::PARAM_INT);
                $billet -> execute([$id]);
                $row = $billet->fetch();
                        return $row;
        }

        function getCommentaires($id){
                $bdd =getBdD();
                $commentaire= $bdd->prepare('select idBillet as id, idCommentaire as idCom,'
                        . ' dateCommentaire as dateCom, auteurCommentaire as auteurCom,' 
                        . ' contenuCommentaire as contenuCom from COMMENTAIRE where idBillet =?');
                $commentaire->bindParam(':id',$id,PDO::PARAM_INT);
                $commentaire ->execute([$id]);
                        return $commentaire->fetchAll();

           
        }
