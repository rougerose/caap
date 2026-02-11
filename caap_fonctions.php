<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Filtre : Adapter les ancres ajoutées par le plugin Sommaire.
 */
function adapter_ancres($texte) {
	$t = $texte;
	preg_match_all(',(<h([123456])[^>]*>)(.*)(</h\\2>),Uims', $texte, $matches, PREG_SET_ORDER);

	if (!count($matches)) {
		return $texte;
	}

	$currentpos = 0;

	foreach ($matches as $m) {
		if (($pos = strpos($texte, $m[0], $currentpos)) !== false) {
			// Supprimer l'ancre ajoutée par défaut
			$titre = supprimer_tags($m[3]);
			// Récupérer l'identifiant
			$ancre = extraire_attribut($m[1], 'id');
			// Icone ancre
			$icone_ancre = '<svg viewBox="0 0 64 64" width="1em" height="1em" role="img">';
			$icone_ancre .= '<title>' . _T('caap:label_title_ancre_intertitre') . '</title>';
			$icone_ancre .= '<use href="' . ancre_url(find_in_path('img/icon-defs.svg'), 'link') . '"></use>';
			$icone_ancre .= '</svg>';
			// Modifier l'ancre de l'intertitre
			$h = ajouter_class(
				$m[1],
				'intertitre'
			) . $titre . " <a href='#$ancre' class='intertitre_ancre' title=''>$icone_ancre</a>" . $m[4];
			// Insérer l'intertitre modifié
			$texte = substr_replace($texte, $h, $pos, strlen($m[0]));
			$currentpos = $pos + strlen($h);
		}
	}

	return $texte;
}
