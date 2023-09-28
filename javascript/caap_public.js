$(document).ready(function () {
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
