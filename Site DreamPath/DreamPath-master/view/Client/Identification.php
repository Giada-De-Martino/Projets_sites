
			<fieldset>
			    <legend> S'identifier </legend>
					<form action="./index.php?action=log" method="get">
						Votre pseudo : <input type="text" name="pseudo">
						<br />
						Votre mot de passe : <input type="password" name="mdp">
						<br />
			            <input type='hidden' name='action' value='log'>
			            <input type='hidden' name='controller' value='client'>
						<input type="submit" value="Connexion">
					</form>
			</fieldset>
			