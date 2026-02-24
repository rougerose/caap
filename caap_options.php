<?php

/**
 * Plugin caap
 * (c) 2012 christophe le drean
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS['z_blocs'] = ['content', 'head', 'head_js', 'header', 'footer', 'breadcrumb'];

/**
 * Plugin Sommaire :
 * - ne pas ajouter une section autour d'un intertitre.
 */

if (!defined('SOMMAIRE_GENERER_SECTIONS')) {
	define('SOMMAIRE_GENERER_SECTIONS', false);
}
