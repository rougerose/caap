<?php
   if (!defined("_ECRIRE_INC_VERSION")) return;

   // javascript
   function caap_insert_head($flux){
      $js = find_in_path('javascript/caap_public.js');
      if ($js) {
         $flux .= "\n".'<script src="'.$js.'" type="text/javascript"></script>'."\n";
      }
      return $flux;
   }

   // css
   function caap_insert_head_css($flux) {
       $flux .= "<link href='http://fonts.googleapis.com/css?family=Cabin:400,700,700italic|Tinos:400,700,400italic,700italic' rel='stylesheet' type='text/css'>"."\n";
       return $flux;
   }
?>