<?php
	echo '<img src="'."./Objet".$_GET['nb'].".png".'" alt="Image du masque de noël 1" />'.'<br>';
	
	if ($v->getIdProduit = 11) {
		echo '<h1 id=nom>'.htmlspecialchars($v->getNomProduit()) . '</a>'.'<br>'.
		'<h2 id=prix>'. "Prix : ". htmlspecialchars($v-> getPrixProduit()). " €".'</h2>'.'<br>'.
		'<h3 id=description1>'."Notre masque de noël saura satisfaire vos envies de soirées de Noël au coin du feu.".'<br>'.
		"Si vous souhaitez faire de belles nuits sur le thème de Noël, n'hésitez pas !".'</h3>'.'<br>';
	}

	elseif ($v->getIdProduit = 13) {
		echo '<h1 id=nom>'.htmlspecialchars($v->getNomProduit()) . '</a>'.'<br>'.
		'<h2 id=prix>'. "Prix : ". htmlspecialchars($v-> getPrixProduit()). " €".'</h2>'.'<br>'.
		'<h3 id=description1>'."Notre masque d'été saura satisfaire vos envies de chaleurs tout le long de l'année.".'<br>'.
		"Si vous souhaitez vous prélasser sous le soleil, n'hésitez pas !".'</h3>'.'<br>';
	}

	elseif ($v->getIdProduit = 14) {
		$image3 = "./Objet3.png";
		echo '<h1 id=nom>'.htmlspecialchars($v->getNomProduit()) . '</a>'.'<br>'.
		'<h2 id=prix>'. "Prix : ". htmlspecialchars($v-> getPrixProduit()). " €".'</h2>'.'<br>'.
		'<h3 id=description1>'."Notre masque de la saint-valentin saura satisfaire vos envies de romantisme.".'<br>'.
		"Si vous souhaitez faire de belles nuitspleines d'amour, n'hésitez pas !".'</h3>'.'<br>';
	}

	elseif ($v->getIdProduit = 15) {
		$image4 = "./Objet5.png";
		echo '<h1 id=nom>'.htmlspecialchars($v->getNomProduit()) . '</a>'.'<br>'.
		'<h2 id=prix>'. "Prix : ". htmlspecialchars($v-> getPrixProduit()). " €".'</h2>'.'<br>'.
		'<h3 id=description1>'."Notre masque d'halloween saura vous faire frissonner.".'<br>'.
		"Si vous souhaitez vous faire de belles frayeurs, n'hésitez pas !".'</h3>'.'<br>';
	}

	elseif ($v->getIdProduit = 16) {
		$image5 = "./Objet4.png";
		echo '<h1 id=nom>'.htmlspecialchars($v->getNomProduit()) . '</a>'.'<br>'.
		'<h2 id=prix>'. "Prix : ". htmlspecialchars($v-> getPrixProduit()). " €".'</h2>'.'<br>'.
		'<h3 id=description1>'."Notre masque d'automne saura satisfaire vos envies de feuilles rouges.".'<br>'.
		"Si vous souhaitez vous promenez sous les arbres automnaux, n'hésitez pas !".'</h3>'.'<br>';
	}

?>
