<?php
session_destroy();
unset($_COOKIE['name']);
unset($_COOKIE['email']);
unset($_COOKIE['password']);
setcookie('name', '', time() - 3600, '/');
setcookie('email', '', time() - 3600, '/');
setcookie('password', '', time() - 3600, '/');

header("Location: /");
