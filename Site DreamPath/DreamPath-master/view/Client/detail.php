<?php
	echo '<p> Le client s\'appelle ' . htmlspecialchars($v->getPrenom()) . ' ' . htmlspecialchars($v->getNom()) . 
		'. Son idClient est le numero ' . $v->getIdClient() . 
		'. Son adresse est le ' . htmlspecialchars($v-> getAdressePostale()) . 
		'. Son adresse mail est ' . htmlspecialchars($v-> getAdresseMail()) . '</p>';

		if($_SESSION['role']!= 0){
			echo 'Vous êtes un administrateur'; 
		}
		$idClient = ControllerClient::compte();
            
         
?>

<a href="./index.php?action=delete&controller=client&idClient=<?php echo $_GET['idClient']; ?>">Cliquez ici pour supprimer le compte</a>
<br>
<a href="./index.php?action=logout&controller=client">Cliquez ici vous déconnecter</a>
<br>
<a href="./index.php?action=update&controller=client&idClient=<?php echo $idClient ?>">Cliquez ici pour modifier votre profil</a>