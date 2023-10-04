<!doctype html>
<html lang="fr">
    <head>
        <style> 
            h2{
                text-align: center;
            }

        </style>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Mon Blog</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog Amélioré</h1></a>

                <h2>Je vous souhaite la bienvenue sur ce modeste blog.</h2>
            </header>
        <div id="contenu">
            <?php
                foreach ($billets as $billet):
            ?>
            <article>
            <header>
                    <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
                    <time><?= $billet['date'] ?></time>
                </header>
                    <p><?= $billet['contenu'] ?></p>
                    <em><a href="#">Commentaires</a></em>
            </article>
            <hr />
            <?php endforeach; ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
            </div> <!-- #global -->
    </body>
</html>