<!DOCTYPE html>
<html>
<?php
$nom_produit = "T-shirt simple" ;
$couleur = "Blanc" ;
$prix = 10.50 ;
$disponible =true ;
$quantite = 10 ;
$resultat = $prix* 3; 
$resultat2 = $quantite - 3 ;
$resultat3 = $prix*$quantite ;

?>
<h3>
    <?php
    echo "Phrase 1 Le nom du produit est $nom_produit <br>" ;
    echo "Phrase 2 Il reste $quantite en stock <br> " ;
    echo "Phrase 3 Le produit $nom_produit est de couleur $couleur <br>" ;
    ?>
</h3>
<h4>
    <?php
    echo "Phrase 1 Acheter 3 produit couterait $resultat <br>" ;
    echo "Phrase 2 Acheter la totalité des produits disponibles couterait $resultat3 <br>" ; 
    echo "Phrase 3 Si les 3 produits sont vendus, il reste $resultat2 produits en stock <br>" ; 
    ?>
    </h4>

<p>
    <?php 

    if($disponible == true)
    {
        echo "Le produit est $nom_produit est disponible en ligne." ;
     
    }
    else if($disponible == false)
    {
        echo "Le produit n'est malheuresement plus disponible." ;

    }
   
   
    ?>
</p>
<p>
<?php
if($resultat2 > 5)
{
    echo "Il reste $resultat2 produits en magasin.";
}
else if($resultat2 <5)
{
    echo"Il ne reste plus que $resultat2 produits en magasin.";
}
else if($resultats2 == 1)
{ 
    echo"Il ne reste plus qu'un produit en magasin."; 
}
elseif($resultat2 == 0)
{
    echo "Il ne reste plus de produit en magasin." ;
}
    ?>
    </p>

</html>


