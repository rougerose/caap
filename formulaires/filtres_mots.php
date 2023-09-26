<?php

if (!defined('_ECRIRE_INC_VERSION')) {
  return;
}

function formulaires_filtres_mots_charger($id_rubrique = null, $articles = null, $retour = null) {
	$valeurs = [
		'articles' => $articles,
		'id_rubrique' => $id_rubrique,
		'mots' => _request('mots'),
	];
	return $valeurs;
}

function formulaires_filtres_mots_verifier($id_rubrique = null, $articles = null, $retour = null) {
	$erreurs = [];
	return $erreurs;
}

function formulaires_filtres_mots_traiter($id_rubrique = null, $articles = null, $retour = null) {
	$reponse = [];
	$mots = _request('mots');

	if ($retour) {
		refuser_traiter_formulaire_ajax();
	}

	if ($mots) {
		$mots = array_unique($mots);
		$redirection = parametre_url($retour, 'mots', $mots);
		$reponse['redirect'] = ancre_url($redirection, 'filtres');
	} else {
		$redirection = parametre_url($retour, 'mots', '');
		$reponse['redirect'] = ancre_url($redirection, 'filtres');
	}
	// if ($retour) {
	// 	refuser_traiter_formulaire_ajax();
	// 	// supprimer les mots déjà présents dans l'url de retour
	// 	$retour = parametre_url($retour, 'mots', '');
	// }

	// if ($mots) {
	// 	$mots = array_unique($mots);
	// 	$retour = parametre_url($retour, 'mots', $mots);
	// 	$reponse['redirect'] = ancre_url($retour, 'filtres');
	// }

	// $reponse['redirect'] = $redirect;

	// $mots = _request('mots');
	// $voir_resultats = _request('voir_resultats');

	// if ($voir_resultats) {
	// 	$redirect = parametre_url($redirect, 'mots', '');
	// 	if ($mots) {
	// 		$mots = array_unique($mots);
	// 		$redirect = parametre_url($redirect, 'mots', $mots);
	// 	}
	// 	$redirect = ancre_url($redirect, 'annuaire');
	// 	$retour['redirect'] = $redirect;
	// 	$retour['message_ok'] = '<script type="text/javascript">if (window.jQuery) ajaxReload("articles");</script>';
	// }

	// $retour['editable'] = true;
	// $reponse['message_ok'] = '<script type="text/javascript">if (window.jQuery) { ajaxReload("formfiltres"); }</script>';

	return $reponse;
}
