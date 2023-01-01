<?php
require_once(rout() . "/views/partials/head.php");
require_once(rout() . "/views/partials/navbar.php");
require "views/partials/settingPage.php";
dd($_SESSION);
?>

<h1>Thank you for buying our products</h1>

<?php
$_SESSION['card'] = [];
dd($_SESSION);
?>


<?php require rout() . "/views/partials/footer.php"; ?>