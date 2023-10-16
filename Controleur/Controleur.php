<?php
	require 'Modele.php';

	function accueil() {
		$billets = getBillets();
		$contenu = 'vueAccueil.php';
		require 'gabarit.php';

	} 

	function unBillet($id) {
		$billet = getBillet($id);
		$commentaires= getCommentaires($id);
		$contenu = 'vueBillet.php';
		require 'gabarit.php';
	}

	function erreur($msgErreur) {
		$contenu = 'vueErreur.php';
		require 'gabarit.php';
	}
	