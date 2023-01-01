<div class="category mt-5">
    <div class="container mb-3">
        <h2 class="main-head text-center mt-5 mb-2">Category</h2>
        <p class="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue eros</p>
        <div class="row">
            <?php foreach ($category as $key => $value) : ?>
                <div class="col col-6 col-lg-4 box">
                    <a href='/category/'>
                        <img src="<?= $value ?>" alt="<?= $key ?>" />
                        <button class="cat-btn"><?= $key ?></button>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="">
                <img src="images/RectanglePink.png" alt="pink rec" class="pink-box" />
                <img src="images/points.png" alt="points" class="pink-box" />
            </div>
        </div>
    </div>
</div>