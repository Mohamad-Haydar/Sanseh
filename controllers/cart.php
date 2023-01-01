<?php

$heading = 'Cart';

$config = require $_SERVER['DOCUMENT_ROOT'] . "/config.php";
$db = new Database($config['database']);

require rout() . "views/cart/view.php";
