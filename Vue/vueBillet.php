
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
        $id = $commentaire['id'];
?>
        <article>
            <header>
                <h1 class="titre"> <?=$commentaire['auteur'] ?></h1>
                <time><?=$commentaire['dateCom'] ?></tim e>
            </header>
            <p><?=$commentaire['contenu'] ?></p>
        </article>
        <hr />

    <?php endforeach;
   