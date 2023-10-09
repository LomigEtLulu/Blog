<!DOCTYPE html>
<html lang= "fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Mon blog</title>
</head>
<body>
	<div id="global">
		<header>
			<a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
			<p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
		</header>
		<div id="contenu">
			<?php include $contenu ?>
		</div> <!--#contenu-->
		<footer id="piedBlog">
			Blog réalisé avec PHP, HTML5 et CSS.
		</footer>
	</div> <!--#global-->
</body>
</html>