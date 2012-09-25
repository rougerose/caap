$(document).ready(function() {
   // ====================================
   // = bouton d'activation de la grille =
   // ====================================
      $("#spip-admin").append("<a class='spip-admin-boutons grid_tg' href='#'>Grille</a>");
      $(".grid_tg").click(function(){
         $("body").toggleClass("gridbg");
         return false;
      });

   // ==============================
   // = descriptif site, animation =
   // ==============================
       $('#ds .append').animateAppend();

});
