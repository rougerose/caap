<?php
   if (!defined("_ECRIRE_INC_VERSION")) return;
   // commentaire
   // commentaire 2

   function bootstrap_insert_head($flux){
      $js = find_in_path('js/boostrap.min.js');
      if ($js) {
         $flux .= "\n".'<script src="'.$js.'" type="text/javascript"></script>'."\n";
      }
      return $flux;
   }
?>