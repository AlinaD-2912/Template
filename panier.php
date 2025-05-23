<?php 
include("header.php");
include("item.php");
?>
<main>
<form action="panier.php" method="post">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $index => $product): ?>
                <tr>
                    <td>
                        <?= htmlspecialchars($product['title']) ?>
                        <input type="hidden" name="id[]" value="<?= $product['id'] ?>">
                    </td>
                    <td><?= htmlspecialchars($product['description']) ?></td>
                    <td><?= number_format($product['price'], 2) ?> €</td>
                    <td>
                        <input type="number" name="quantity[]" class="form-control" min="0" value="0">
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
</form>

</main>

