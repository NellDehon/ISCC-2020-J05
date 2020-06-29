<!DOCTYPE html>
<html>
    <?php
$nomproduit = "T-shirt simple" ;
$couleur = "Blanc" ;
$prix = "10,50" ;
$disponible ="true" ;
$quantite = "10" ;
?>
<h3>
    <?php
    echo "Phrase 1 Le nom du produit est $nomproduit <br>" ;
    echo "Phrase 2 Il reste $quantite en stock <br> " ;
    echo "Phrase 3 Le produit $nomproduit est de couleur $couleur <br>" ;
    ?>
</h3>
<h4>
    <?php
    echo "Phrase 1 Acheter 3 produit couterait $prix *3 = 31.5 <br>" ;
    echo "Phrase 2 Acheter la totalité des produits disponibles couterait $prix*10 =105 <br>" ; 
    echo "Phrase 3 Si les 3 produits sont vendus, il reste $quantite -3 = 7 produits en stock <br>" ; 
    ?>
    </h4>

<p>
    <?php 
    echo " Le produit $nomproduit est disponible en ligne" ;
    ?>
</p>
<p>
<?php
    echo "Il reste $quantité en magasin" ;
    ?>
    </p>




