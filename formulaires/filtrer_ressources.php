<?php

if (!defined('_ECRIRE_INC_VERSION')) {
  return;
}

function formulaires_filtrer_ressources_charger($redirect = '', $id_rubrique = '', $articles = []) {
	return $valeurs = [
		'redirect' => $redirect,
		'id_rubrique' => $id_rubrique,
		'articles' => $articles,
		'mots' => _request('mots'),
	];
}

function formulaires_filtrer_ressources_verifier($redirect = '', $id_rubrique = '', $articles = []) {
	return $erreurs = [];
}

function formulaires_filtrer_ressouces_traiter($redirect = '', $id_rubrique = '', $articles = []) {
	$retour = [];
	// refuser_trairer_formulaire_ajax();
	$mots = _request('mots');

	return $retour;
}
