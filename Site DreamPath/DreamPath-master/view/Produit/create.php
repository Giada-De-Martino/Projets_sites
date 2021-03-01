<form method="get" action="index.php?action=created&controller=produit">
  <fieldset>
    <legend>Créer un produit :</legend>
    <p>
      <label for="nomProduit_id">Nom du produit</label> :
      <input type="text" placeholder="Ex : MasqueNoël" name="nomProduit" id="nomProduit_id" required/>
    </p>
     <p>
      <label for="prixProduit_id">Prix du produit</label> :
      <input type="number" placeholder="Ex : 120 " name="prixProduit" id="prixProduit_id" required/>
    </p>
     <p>
      <label for="categorieProduit_id">categorie du produit</label> :
      <input type="text" placeholder="Ex : Noël" name="categorieProduit" id="categorieProduit_id" required/>
    </p>
    <p>
      <input type='hidden' name='action' value='created'>
      <input type='hidden' name='controller' value='produit'>
      <input type="submit" value="Envoyer" />
    </p>
  </fieldset> 
