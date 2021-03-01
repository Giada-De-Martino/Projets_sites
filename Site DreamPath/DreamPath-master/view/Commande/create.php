<form method="get" action="index.php?action=created&controller=commande">
  <fieldset>
    <legend>Créer une commande :</legend>
    <p>
      <label for="date_id">Date commande</label> :
      <input type="date" placeholder="Ex : 18/12/20" name="dateCommande" id="date_id" required/>
    </p>
    <p>
      <label for="idClient_id">IdClient</label> :
      <input type="number" placeholder="Ex : 50" name="idClient" id="idClient_id" required/>
    </p>
     <p>
      <label for="montant_id">Montant commande</label> :
      <input type="number" placeholder="Ex : 12" name="montantCommande" id="montant_id" required/>
    </p>
     <p>
      <label for="etat_id">Etat commande</label> :
      <select name="etatCommande" id="etat_id" required>
      <option value="Payée">Payée</option>
      <option value="En attente de paiement">En attente de paiement</option>
      <option value="Annulée">Annulée</option>
      </select>
    </p>
    <p>
      <input type='hidden' name='action' value='created'>
      <input type='hidden' name='controller' value='commande'>
      <input type="submit" value="Envoyer" />
    </p>
  </fieldset> 