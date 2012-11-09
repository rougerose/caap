$(document).ready(function() {
   // ==============================
   // = descriptif site, animation =
   // ==============================
       $('#ds .append').animateAppend();

   // =============================================
   // = jquery ui accordion / rubrique Ressources =
   // =============================================
   /*$("#ressources").accordion({
      header:'dt',
      autoHeight: false,
      icons:false,
      navigation:true
      // on se met doucement là où il faut http://stackoverflow.com/a/3621845
      //change: function(event,ui) {
      //   $.scrollTo(ui.newHeader,500);
      //}
   });*/
   $("#ressources").accordion({
      header: 'dt',
      active:false,
      autoHeight: false,
      icons: false
   });
});
