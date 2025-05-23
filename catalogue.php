<?php
$page_title = 'Catalogue';
$page_meta = 'Vous pouvez vous informer avec la liste des derniers appareils en vente';
include 'header.php';
include 'item.php';
include 'functions.php';
?>



<main>
    <div class="container py-5">
        <h1 class="text-center mb-5">Catalogue d'appareils</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php afficherLesAppareilsNormalement($products); ?>
            
        </div>
    </div>
</main>

<main>
    <div class="container py-5">
        <h1 class="text-center mb-5">Catalogue d'appareils (Tableau)</h1>
            <?php afficherLesAppareilsDansUnTableau($products); ?>
    </div>
</main>



<?php
include 'footer.php';
?>