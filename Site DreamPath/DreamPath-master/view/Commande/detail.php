<?php
    echo '<p> La commande est : ' . htmlspecialchars($v->getIdCommande()) .'. Le montant total est de : ' . $v-> getMontantCommande() .'. Date : ' . htmlspecialchars($v-> getDateCommande()) . '. Etat : ' . htmlspecialchars($v-> getEtatCommande()). '</p>';
?>

   