<?php
require_once(rout() . "/views/partials/head.php");
require_once(rout() . "/views/partials/navbar.php");
require "views/partials/settingPage.php";
?>
<main>

    <?php require "header.php"; ?>
    <?php require "category.php"; ?>
    <div class="container fasion-style">
        <div class="image">
            <img src="images/Image4.png" alt="" />
            <img src="images/orangerec.png" alt="" class="fasion-style-dec-1 dec" />
            <img src="images/points.png" alt="" class="fasion-style-dec-2 dec" />
        </div>
        <div class="content">
            <h3>Fashion Style for You</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper congue eros, eget tincidunt ipsum eleifend ut orem ipsum dolor sit amet consectetur adipiscing elit Sed ullamcorper congue eros eleifend ut tincidunt ipsum .</p>
        </div>
    </div>
    <?php require "betterSeller.php"; ?>
    <?php require "listProducts.php" ?>
    <?php require "dealOfTheDay.php" ?>
    <?php require "testimonial.php" ?>
    <?php require "newsLetter.php" ?>
    <?php require "followInsta.php" ?>
</main>


<?php require rout() . "/views/partials/footer.php"; ?>