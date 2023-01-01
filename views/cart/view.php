<?php
require_once(rout() . "/views/partials/head.php");
require_once(rout() . "/views/partials/navbar.php");
require "views/partials/settingPage.php";

$total_sum = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
    if (array_key_exists($_POST['remove'], $_SESSION['card'])) {
        unset($_SESSION['card'][$_POST['remove']]);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $finalCart = [];
    foreach ($_SESSION['card'] as $index => $value) {
        if (array_key_exists($value['id'], $_POST)) {
            $finalCart[$index] = [
                'id' => $value['id'],
                'quantity' => $_POST["quantity{$value['id']}"],
                'size' => $value['size'],
                'title' => $value['title'],
                'price' => $value['price'],
                'image' => $value['image']
            ];
            $total_sum += floatval($finalCart[$index]['price']) * floatval($finalCart[$index]['quantity']);
            // unset($_SESSION['card'][$index]);
        }
    };
    dd($finalCart);
    dd($total_sum);
}

?>

<main class="back">
    <div class="container cart">
        <div class="left">
            <div class="head-part white-back">
                <h3>cart</h3>
                <input type="checkbox" name="select-all" id="sellect-all" class="sellect-all">
                <label for="sellect-all">Sellect All</label>
            </div>
            <div class="products-part white-back">
                <h3>Products</h3>
                <form action="#" method="POST" id="buy-form">
                    <?php foreach ($_SESSION['card'] as $index => $product) : ?>
                        <div class="cart-product">
                            <input type="checkbox" name="<?= $product['id'] ?>" id="<?= $product['id'] ?>" class="check-box-yellow">
                            <label for="<?= $product['id'] ?>" class="n<?= $product['id'] ?>">
                                <div class="prod-detail">
                                    <img src="<?= $product['image'] ?>" alt="">
                                    <div class="right">
                                        <div class="info">
                                            <h3><?= $product['title'] ?></h3>
                                            <p>Color: red, Size: <?= $product['size'] ?></p>
                                            <p class="price"># <span><?= $product['price'] ?></span>$</p>
                                        </div>
                                        <div class="side-prod">
                                            <form action="#" method="POST">
                                                <button type="submit" name="remove" class="remove" value="<?= $product['id'] ?>">
                                                    <img src="/images/remove.png" alt="remove" class="remove removeimage">
                                                </button>
                                            </form>
                                            <div class="quantity">
                                                <i class="fa-solid fa-minus"></i>
                                                <input type="text" id="quantity" name="quantity<?= $product['id'] ?>" value="<?= $product['quantity'] ?>" onkeypress="return isNumberKey(event)">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
        <div class="order-summary white-back">
            <h3>Order Summary</h3>
            <ul>
                <li>subtotal: <span><?= "total"; ?></span></li>
                <li>Delivery: <span> #5,000</span></li>
                <li>Sum: <span class="sum">0</span></li>
            </ul>
            <button class="complete-order">Complete Order</button>
        </div>
    </div>
</main>

<?php require rout() . "/views/partials/footer.php"; ?>