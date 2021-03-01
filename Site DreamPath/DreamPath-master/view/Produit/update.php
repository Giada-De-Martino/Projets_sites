
<form method="get" action="index.php?action=updated&controller=produit">
    <fieldset>
        <legend>Modifier un produit :</legend>
       
            <p>
                <label for="nomProduit_id">Nom du produit</label> :
                <input type="text" value="<?php echo $infos_produit->getNomProduit();?>" name="nomProduit" id="nomProduit_id" required/>
            </p>
            <p>
                <label for="prixProduit_id">Prix du produit</label> :
                <input type="text" value="<?php echo $infos_produit->getPrixProduit();?>" name="prixProduit" id="prixProduit_id" required/>
            </p>
            <p>
                <label for="categorieProduit_id">categorie du produit</label> :
                <input type="text" value="<?php echo $infos_produit->getCategorieProduit();?>" name="categorieProduit" id="categorieProduit_id" required/>
            </p>
            <p>
                <label for="idProduit_id">IdProduit</label> :
                <input type="text" value="<?php echo $infos_produit->getIdProduit();?>" name="idProduit" id="idProduit_id" readonly/>
            </p>
            <p>     
                <input type='hidden' name='action' value='updated'>
                <input type='hidden' name='controller' value='produit'>
                <input type="submit" value="Envoyer"/>
            </p>
            
    </fieldset>
</form>
