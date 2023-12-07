$(function () {
	/**
	 * Formulaire filtrer_ressources
	 */
	$(".formulaire_filtrer_ressources").on(
		"click",
		"input[type='checkbox']",
		function () {
			let $form = $(this).parents("form"),
				// récupérer tous les checkbox...
				$inputs = $form.find("input[type='checkbox']"),
				// et parmi cette sélection, ceux qui sont sélectionnés
				filtres = inputsChecked($inputs),
				// stocker les filtres dans un objet param
				params = { mots: [] };

			// Ajouter/supprimer la classe is-checked au parent du checkbox
			$(this).parent().toggleClass("is-checked");

			// Récupérer les id des filtres (mots) sélectionnés
			// et les ajouter à l'url de la page en cours via ajaxReload
			filtres.forEach(function (id) {
				params.mots.push(id);
			});

			// Recharger la liste des ressources
			ajaxReload("ressources_body", {
				history: true,
				args: params,
			});
		}
	);

	/**
	 * Bouton de suppression des filtres et recharchement du bloc ajax
	 */

	$(".filters_reset").on("click", "button", function () {
		event.preventDefault();
		let url = $(this).attr("data-self");
		// Recharger la liste des ressources
		ajaxReload("ressources_body", {
			history: true,
			href: url,
		});
	});

	/**
	 * Stocker dans un tableau les identifiants des filtres sélectionnés.
	 * @param {*} $inputs
	 * @returns
	 */
	const inputsChecked = ($inputs) => {
		let checkedValues = [];
		if ($inputs.length > 0) {
			$inputs.each(function () {
				if ($(this).is(":checked")) {
					checkedValues.push($(this).val());
				}
			});
		}
		return checkedValues;
	};
});
