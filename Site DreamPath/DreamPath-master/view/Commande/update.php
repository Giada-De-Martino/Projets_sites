<form method="get" action="index.php?action=updated&controller=commande">
    <fieldset>
        <legend>Modifier une commande :</legend>
            <p>
            <label for="date_id">Date commande</label> :
            <input type="date" value="<?php echo $infos_commande->getDateCommande();?>" name="dateCommande" id="date_id" required/>
            </p>
            <p>
            <label for="idClient_id">IdClient</label> :
            <input type="number" value="<?php echo $infos_commande->getIdClient();?>" name="idClient" id="idClient_id" readonly/>
            </p>
            <p>
            <label for="montant_id">Montant commande</label> :
            <input type="number" value="<?php echo $infos_commande->getMontantCommande();?>" name="montantCommande" id="montant_id" required/>
            </p>
            <p>
            <label for="etat_id">Etat commande</label> :
            <select value="<?php echo $infos_commande->getEtatCommande();?>" name="etatCommande" id="etat_id" required>
            <option value="Payée">Payée</option>
            <option value="En attente de paiement">En attente de paiement</option>
            <option value="Annulée">Annulée</option>
            </select>
            </p>
            <p>
            <label for="idCommande_id">IdCommande</label> :
            <input type="number" value="<?php echo $infos_commande->getIdCommande();?>" name="idCommande" id="idCommande_id" readonly/>
            </p>
            <p>
                <input type='hidden' name='action' value='updated'>
                <input type='hidden' name='controller' value='commande'>
                <input type="submit" value="Envoyer"/>
            </p>
    </fieldset> 
</form>