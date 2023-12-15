<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser */
function caap_autoriser() {
}

/**
 * Configurer
 */
function autoriser_caap_configurer($faire, $type, $id, $qui, $opt) {
	return autoriser('webmestre', $type, $id, $qui, $opt); // seulement les webmestres
}
