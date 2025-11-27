<?php
$query = "SELECT * FROM product WHERE naam LIKE '%Tomaten%' OR naam LIKE '%Komkommer%' OR naam LIKE '%Sla%' OR naam LIKE '%Wortel%'";
$result = $connection->query($query);
$products = $result->fetch_all(MYSQLI_ASSOC);
?>

<main>
    <section class="content-section">
        <h2>Groente</h2>
        <div class="product-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <h3><?php echo htmlspecialchars($product['naam']); ?></h3>
                    <p>Prijs: €<?php echo number_format($product['prijs'], 2, ',', '.'); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>
