<?php
    foreach ($billets as $billet):
        $id=$billet['id'];
?>
        <article>
            <header>
                <h1 class="titreBillet"><?= $billet['titre']?></h1>
                <time><?= $billet['date'] ?></time>
            </header>
            <p><?=$billet['contenu'] ?></p>
            <em><a href="http://localhost/ScriptPHP/Blog/billet.php?id=<?=$id?>">Commentaires</a></em>
        </article>
        <hr />
    <?php endforeach;