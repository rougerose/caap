<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

function html5boilerplate_insert_head($flux){
   $js = find_in_path('js/vendor/modernizr-2.6.1.min.js');
   if ($js) {
      $flux .= "\n".'<script src="'.$js.'" type="text/javascript"></script>'."\n";
   }
   return $flux;
}

function html5boilerplate_insert_head_css($flux) {
   $css = array('css/main.css','css/normalize.css');
   foreach ($css as $f) {
      $fichier = find_in_path($f);
      if ($fichier){
         $flux .= '<link rel="stylesheet" href="'.$fichier.'" />'."\n";
      }
   }
   return $flux;
}

?>