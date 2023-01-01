<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['addToCard'])) {
    $_SESSION['card'][$product['id']] = [
        'id' => $product['id'],
        'quantity' => $_POST['quantity'],
        'size' => $_POST['size'],
        'title' => $product['title'],
        'price' => $product['price'],
        'image' => $product['image']
    ];
}
// elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['buyNow'])) {
//     echo "<h1>Thank you for buying our products</h1>";
//     $_SESSION['card'] = [];
// }
?>
<div class="product-detail container">
    <div class="left-part">
        <img src="<?= $product['image'] ?>" alt="">
    </div>
    <div class="right-part">
        <h3><?= $product['title'] ?></h3>
        <p> <i class="fa-solid fa-star"></i> <?= $product['review'] ?> Reviews</p>
        <p class="description"><?= $product['description'] ?></p>
        <form action="<?php if (isset($_SESSION['user'])) {
                            echo "#";
                        } else {
                            echo "/login?register";
                        } ?>" method="POST">
            <div class="additional-details">
                <label for="size">Size: </label>
                <select name="size" id="size">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>
                <label for="quantity">Quantity: </label>
                <i class="fa-solid fa-minus"></i>
                <input type="text" id="quantity" name="quantity" value="1" onkeypress="return isNumberKey(event)">
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="actions">
                <button class="add-to-card" name="addToCard" value="addToCard">add to card</button>
                <button class="buy-now" name="buyNow" value="buyNow">by now</button>
            </div>
        </form>

    </div>
</div>