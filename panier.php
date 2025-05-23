<?php 
$page_title = 'Panier';
$page_meta = 'Vous pouvez consulter les produits dans votre panier';
include("header.php");
include("item.php");
include("functions.php");
?>


<main>
<form action="panier.php" method="post">
    <?php afficherLesAppareilsPaniers($products); ?>

    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
</form>

</main>

