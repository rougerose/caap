$(document).ready(function() {
   // ==============================
   // = descriptif site, animation =
   // ==============================
   $('#ds .append').animateAppend();

   // =============================================
   // = jquery ui accordion / rubrique Ressources =
   // =============================================
   $("#ressources").accordion({
      header: 'dt',
      active:false,
      autoHeight: false,
      icons: false
   });

   // ==================================
   // = Animation du panneau-recherche =
   // ==================================
   $(".recherche-panneau .action").click(function(){
      $("#formulaire_recherche").slideToggle('slow','swing');
      $(this).toggleClass("on");
   });

});
