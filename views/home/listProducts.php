<div id="products">
    <h3 class="text-center mt-5 fs-1">Our Product</h3>
    <div class="container grid-4 list-products">
        <?php foreach ($data as $product) : ?>
            <a href="/details?id=<?= $product['id'] ?>">
                <div class="best-sel-box">
                    <img src="<?= $product['image'] ?>" alt="best seller img" />
                    <div class="breif-detail">
                        <p> <?= $product['review'] ?> <i class="fa-solid fa-star"></i></p> <!-- review -->
                        <p><?= $product['title'] ?></p><!-- image -->
                        <p><?= $product['price'] ?></p><!-- price -->
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>