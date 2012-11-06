<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

// javascript
function caap_insert_head($flux){
   $js = find_in_path('js/caap_public.js');
   if ($js) {
      $flux .= "\n".'<script src="'.$js.'" type="text/javascript"></script>'."\n";
   }
   return $flux;
}

// css
function caap_insert_head_css($flux) {
   $flux .= "<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>\n";
   return $flux;
}

function caap_affichage_final($flux){
   if (
   $GLOBALS['html']
   AND isset($GLOBALS['visiteur_session']['statut'])
   AND $GLOBALS['visiteur_session']['statut']=='0minirezo'
   AND $GLOBALS['visiteur_session']['webmestre']=='oui'
   AND $p=stripos($flux,"</body>")
   AND $f = find_in_path("js/hashgrid.js")
   ){
      $flux = substr_replace($flux,'<script type="text/javascript" src="'.$f.'"></script>',$p,0);
   }
   return $flux;
}


?>