<?php

if (!function_exists('ap')) {
    function ap($var)
    {
        echo '<pre>' . print_r($var, true) . '</pre>';
    }
}