<form method="get" action="index.php?action=created&controller=client">
    <fieldset>
        <legend>Créer un client :</legend>
            <p>
                <label for="nom_id">Nom</label> :
                <input type="text" placeholder="Ex : Terieur" name="nom" id="nom_id" required/>
            </p>
            <p>
                <label for="prenom_id">Prénom</label> :
                <input type="text" placeholder="Ex : Alain" name="prenom" id="prenom_id" required/>
            </p>
            <p>
                <label for="adresseP_id">Adresse postale</label> :
                <input type="text" placeholder="Ex : 320 Rue des Potiers 75000 Paris" name="adressePostale" id="adresseP_id" required/>
            </p>
            <p>
                <label for="adresseM_id">Adresse mail</label> :
                <input type="email" placeholder="Ex : alain.terieur@mail.com" name="adresseMail" id="adresseM_id" required/>
            </p>
            <p>
                <label for="pseudo_id">Pseudo</label> :
                <input type="text" placeholder="Ex : dreampath20" name="pseudo" id="pseudo_id" required/>
            </p>
            <p>
                <label for="mdp_id">Mot de passe</label> :
                <input type="text" name="mdp" id="mdp_id" required/>
            </p>
            <p>
                <input type='hidden' name='action' value='created'>
                <input type='hidden' name='controller' value='client'>
                <input type="submit" value="Envoyer" />
            </p>
    </fieldset> 
</form>