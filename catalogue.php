<?php
$page_title = 'Catalogue';
$page_meta = 'Vous pouvez vous informer avec la liste des derniers appareils en vente';
include 'header.php';
include 'item.php';
?>



<main>
    <div class="container py-5">
        <h1 class="text-center mb-5">Catalogue d'appareils</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($products as $product): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= htmlspecialchars($product['image']) ?>" class="card-img-top <?= htmlspecialchars($product['class']) ?>" alt="<?= htmlspecialchars($product['alt']) ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= htmlspecialchars($product['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                            <div class="mt-auto">
                                <a href="#" class="btn btn-primary me-2">Acheter maintenant</a>
                                <a href="index.php?page=contact" class="btn btn-outline-secondary">Contacter le service technique</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<main>
    <div class="container py-5">
        <h1 class="text-center mb-5">Catalogue d'appareils (Tableau)</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <img src="<?= $product['image']?>" 
                                 alt="<?= $product['alt'] ?>"  
                                 style="max-width: 100px;">
                        </td>
                        <td><?= $product['title'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Acheter</a>
                            <a href="index.php?page=contact" class="btn btn-sm btn-outline-secondary">Contacter</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>



<?php
include 'footer.php';
?>