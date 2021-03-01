<?php
	require_once File::build_path(array("controller","ControllerProduit.php"));

	echo '<h1>'."Voici les produits que nous proposons sur notre site !".'</h1>'.'<br>';

	foreach ($tab_selectAll as $v) {
		echo '<p> Produit : ' . htmlspecialchars($v->getNomProduit()) . '.</p>';
	}
?>
<a href="./index.php?action=read&controller=produit&idProduit=11&nb=1">Cliquez ici pour voir les informations sur le masque 1</a>
<br>
<a href="./index.php?action=read&controller=produit&idProduit=13&nb=2">Cliquez ici pour voir les informations sur le masque 2</a>
<br>
<a href="./index.php?action=read&controller=produit&idProduit=14&nb=3">Cliquez ici pour voir les informations sur le masque 3</a>
<br>
<a href="./index.php?action=read&controller=produit&idProduit=15&nb=5">Cliquez ici pour voir les informations sur le masque 4</a>
<br>
<a href="./index.php?action=read&controller=produit&idProduit=16&nb=4">Cliquez ici pour voir les informations sur le masque 5</a>
 
