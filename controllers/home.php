<?php

$heading = 'Home';

$config = require $_SERVER['DOCUMENT_ROOT'] . "/config.php";
$db = new Database($config['database']);
$data = $db->querry("select * from products;")->getAll();

// creation of the category
$category = [];
foreach ($data as $e) {
    if (!array_key_exists($e['category'], $category)) {
        $category[$e['category']] = $e['image'];
    }
};

// creation of the best seller
$bestSeller = [];
foreach ($data as $e) {
    if (floatval($e['review']) > 4.2) {
        $bestSeller[] = $e;
    }
}

$names = ["Anisa Zahra", "Melissa Wallace", "Mohamad", "Anisa Zahra", "Melissa Wallace"];

// check if the cookie is set then login directly
if (isset($_COOKIE['name'])) {
    $_SESSION['user'] = [
        'name' => $_COOKIE['name'],
        'email' => $_COOKIE['email'],
        'password' => $_COOKIE['password']
    ];
    $_SESSION['card'] = [];
}

require "views/home/view.php";
