
        <article>
            <header>
                <h1 class="titreBillet"><?= $billet['titre']?></h1>
                <time><?= $billet['date']?></time>
            </header>
            <p><?=$billet['contenu']?></p>
        </article>
        <hr />
            <h3>Commentaires</h3>

<?php
    foreach ($commentaires as $commentaire):
?>
        <article>
            <header>
                <h1 class="titre"> <?=$commentaire['auteurCom'] ?></h1>
                <time><?=$commentaire['dateCom'] ?></time>
            </header>
            <p><?=$commentaire=['contenuCom'] ?></p>
        </article>
        <hr />

    <?php endforeach;
   