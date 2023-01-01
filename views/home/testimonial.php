<div class=" my-5 testemonial scroller-conatiner">
    <h1 class="mb-2 text-center">What People Say About Us</h1>
    <p class="mb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue eros</p>
    <div class="scroller">

        <?php foreach ($names as $index => $name) : ?>
            <div class="testimonial-box">
                <div class="breif-detail">
                    <h5 class="testimonial-title">Comfortable and met all my expectations! I ordered a medium and it fit perfectly</h5>
                    <p class="testimonial-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacus, auctor pretium ac ultrices. Dui lacus dignissim tincidunt urna, at enim tempo. Pellentesque amet Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="person">
                    <img src="images/Image<?= $index + 1 ?>.png" alt="best seller img" />
                    <p class="person-name"><?= $name ?></p>
                    <p class="person-detail">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>