
<form method="get" action="index.php?action=updated&controller=client">
    <fieldset>
        <legend>Modifier un client :</legend>
       
            <p>
                <label for="nom_id">Nom</label> :
                <input type="text" value="<?php echo $infos_client->getNom();?>" name="nom" id="nom_id" required/>
            </p>
            <p>
                <label for="prenom_id">Prénom</label> :
                <input type="text" value="<?php echo $infos_client->getPrenom();?>" name="prenom" id="prenom_id" required/>
            </p>
            <p>
                <label for="idClient_id">IdClient</label> :
                <input type="text" value="<?php echo $infos_client->getIdClient();?>" name="idClient" id="idClient_id" readonly/>
            </p>
            <p>
                <label for="adresseP_id">Adresse postale</label> :
                <input type="text" value="<?php echo $infos_client->getAdressePostale();?>" name="adressePostale" id="adresseP_id" required/>
            </p>
            <p>
                <label for="adresseM_id">Adresse mail</label> :
                <input type="text" value="<?php echo $infos_client->getAdresseMail();?>" name="adresseMail" id="adresseM_id" required/>
            </p>
            <p>
                <label for="pseudo_id">Pseudo</label> :
                <input type="text" value="<?php echo $infos_client->getPseudo();?>" name="pseudo" id="pseudo_id" required/>
            </p>
            <p>
                <label for="mdp_id">Mot de passe</label> :
                <input type="text" value="<?php echo $infos_client->getMdp();?>" name="mdp" id="mdp_id" required/>
            </p>
            <p>     
                <input type='hidden' name='action' value='updated'>
                <input type='hidden' name='controller' value='client'>
                <input type="submit" value="Envoyer"/>
            </p>
            
    </fieldset>
</form>
