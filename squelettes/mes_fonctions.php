<?php
function titrecourtUnmot ($texte) { // pour la navigation de premier niveau, affiche le premier mot du titre de la rubrique, permet de gérer un titre court.
  $texte = ereg_replace("[[:space:]]{2,}"," ",$texte); //supprime les doubles espaces -- ou plus -- dans le titre
  $menu1 = explode(" ",$texte);
  $texte = $menu1[0];
  return $texte;
}
function titrecourtDeuxmots ($texte) { // pour la navigation de premier niveau, affiche les 2 premiers mots du titre de la rubrique, permet de gérer un titre court.
  $texte = ereg_replace("[[:space:]]{2,}"," ",$texte); //supprime les doubles espaces -- ou plus -- dans le titre
  $menu2 = explode(" ",$texte);
  $texte = $menu2[0]." ".$menu2[1];
  return $texte;
}

function google_like($string){
	$string = textebrut($string);
	$query = rtrim(str_replace("+", " ", $_GET['recherche']));  
	//suppression de moins de 3 caractères
	$query = preg_replace('@(.+?)\b[\w]{1,2}\b(.+?)@i', '\1 \2', $query);
	$qt = explode(" ", $query);
	$num = count ($qt);
	$cc = ceil(100 / $num);
	for ($i = 0; $i < $num; $i++) {
		$ma_recherche = $qt[$i];
//		$ma_recherche = preg_replace(array("@[AÀÁÂÃÄÅaàáâãäå]@","@[OÒÓÔÕÖØoòóôõöø]@","@[EÈÉÊËeéèêë]@","@[Çç]@","@[IÌÍÎÏiìíîï]@","@[UÙÚÛÜuùúûü]@","@[ÿÑñ]@"), array("[aàáâãäå]","[oòóôõöø]","[eéèêë]","[Çç]","[iìíîï]","[uùúûü]","[ÿñ]"), $ma_recherche);
		$tab[$i] = preg_split("/($ma_recherche)/i",$string,2, PREG_SPLIT_DELIM_CAPTURE);
		if(count($tab[$i])>1){
			$avant = substr($tab[$i][0],-$cc,$cc);
			$avant = preg_replace('@\S+\s(.+)@s', '\1', $avant);
			$apres = substr($tab[$i][2],0,$cc);
			$apres = preg_replace('@(.+)\s\S+@s', '\1', $apres);
			$string_re .= "[...] $avant<span class=\"spip_surligne\">".$tab[$i][1]."</span>$apres ";
		} //endif
	} //endfor
	$string_re .= "[...]";
	return $string_re;
}

?>
