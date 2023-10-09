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
                $posts=[];
                        while (($row = $billets->fetch())) {
                                $post= [
                                        'idBillet'=> $row['id'],
                                        'dateBillet'=> $row['date'],
                                        'titreBillet'=> $row['titre'],
                                        'contenuBillet'=> $row['contenu'],
                                ];
                                $posts[] = $post;    
                        }


                        return $posts;
        }

        function getBillet($id){
                $bdd = getBdD();
                $billet = $bdd->prepare('select idBillet as id, dateBillet as date,'
                        . ' titreBillet as titre, contenuBillet as contenu from BILLET'
                        . ' where id= ?');
                $billet -> execute([$id]);
                $row = $billet->fetch();
                $post = [
                        'date'=> $row['dateBillet'],
                        'id'=> $row['idBillet'],
                        'titre'=> $row['titreBillet'],
                        'contenu'=> $row['contenuBillet'],
                ];
                        return $post;
        }

        function getCommentaires($id){
                $bdd =getBdD();
                $billet= $bdd->prepare('select idBillet as id, idCommentaire as idCom,'
                        . ' dateCommentaire as dateCom, auteurCommentaire as autCom,' 
                        . ' contenuCommentaire as contCom from COMMENTAIRE where id =? order by dateCommentaire desc');
                $billet ->execute($id);
                $commentaires=[];
                        while(($row = $billet->fetch())){
                                $commentaire =[
                                        'idBillet'=>$row['id'],
                                        'idCommentaire'=>$row['idCom'],
                                        'dateCommentaire'=>$row['dateCom'],
                                        'auteurCommentaire'=>$row['autCom'],
                                        'contenuCommentaire'=>$row['contCom'],

                                ];
                                $commentaires[]= $commentaire;
                        }

                        return $commentaires;

           
        }
