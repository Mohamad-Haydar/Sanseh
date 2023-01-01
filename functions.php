<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    // die();
}

function rout()
{
    return $_SERVER['DOCUMENT_ROOT'];
}
