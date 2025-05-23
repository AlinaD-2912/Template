<?php
function afficherLesAppareilsNormalement(array $products): void
{
    foreach ($products as $product): ?>
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
    <?php endforeach;
}

function afficherLesAppareilsPaniers(array $products): void
{ ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td>
                        <img src="<?= $product['image'] ?>"
                            alt="<?= $product['alt'] ?>"
                            style="max-width: 100px;">
                    </td>
                    <td><?= $product['title'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= number_format($product['price'], 2) ?> €</td>
                    <td>
                        <input type="number" name="quantity[]" class="form-control" min="0" value="0">
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php }
