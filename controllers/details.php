<?php

$heading = 'Home';

$config = require rout() . "/config.php";
$db = new Database($config['database']);

$product = $db->querry('select * from products where id = :id', ['id' => $_GET['id']])->findOrFail();



require "views/details/view.php";
