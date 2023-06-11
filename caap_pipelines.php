<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

// javascript
function caap_insert_head($flux) {
   $js = find_in_path('javascript/caap_public.js');
   if ($js) {
	  $flux .= "\n" . '<script src="' . $js . '" type="text/javascript"></script>' . "\n";
   }
   return $flux;
}

function caap_formulaire_verifier($flux) {
	if ($flux['args']['form'] == 'inscription') {
		if (strpos(_request('mail_inscription'), '@qq.com')) {
			$flux['data']['mail_inscription'] = 'spam detected';
		}
	}
	return $flux;
}


// jquery-ui
function caap_jqueryui_plugins($scripts) {
   $scripts[] = 'jquery.ui.accordion';
   return $scripts;
}
