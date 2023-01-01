<div class="menu">
    <div class="menu--wrapper">

        <?php foreach ($bestSeller as $product) : ?>

            <div class="menu--item">
                <figure class="blacker"><img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" /></figure>
            </div>

        <?php endforeach; ?>

    </div>
</div>