<?php
// session_start();

$config = require rout() . "/config.php";
$db = new Database($config['database']);


$heading = 'Login';
$registerData = [];
$error = [
    "state" => false,
    "name-state" => false,
    "email-state" => false,
    "password-state" => false,
    "confirm-state" => false
];


require "views/login/view.php";
