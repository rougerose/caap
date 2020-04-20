$(document).ready(function () {
  // ==============================
  // = descriptif site, animation =
  // ==============================
  $("#ds .append").animateAppend();

  // =============================================
  // = jquery ui accordion / rubrique Ressources =
  // =============================================
  $("#ressources").accordion({
    header: ".ressources-header",
    heightStyle: "content",
    // autoHeight: false
  });

  // ==================================
  // = Animation du panneau-recherche =
  // ==================================
  $(".recherche-panneau .action").click(function () {
    $("#formulaire_recherche").slideToggle("slow", "swing");
    $(this).toggleClass("on");
  });
  // le formulaire est affiché par défaut sur la page de recherche
  if ($("html.page_recherche").length) {
    $(".recherche-panneau .action").trigger("click");
  }
});
