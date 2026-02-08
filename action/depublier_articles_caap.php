<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function action_depublier_articles_caap_dist() {
	include_spip('inc/autoriser');
	$securiser_action = charger_fonction('securiser_action', 'inc');
	$arg = $securiser_action();
	$id_secteur = intval($arg);

	if ($id_secteur > 0) {
		$articles = sql_allfetsel(
			'id_article',
			'spip_articles',
			"id_secteur=$id_secteur" . ' AND statut=' . sql_quote('publie')
		);

		if (is_array($articles) && count($articles) > 0) {
			include_spip('action/editer_objet');
			foreach ($articles as $article) {
				$id_article = $article['id_article'];
				// dépublier en utilisant l'API objet_modifier
				$mod = objet_modifier('article', intval($id_article), ['statut' => 'prop']);
			}
		}
	}
}
