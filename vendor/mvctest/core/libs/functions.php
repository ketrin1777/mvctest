<?php

function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function redirect($http = false)
{
    if ($http) {
        $redirect = $http;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}


function renderFile($filename, $data = null)
{

    if (is_file($filename)) {
        ob_start();
        if ($data != null) {
            foreach ($data as $key => $value) {
                ${$key} = $value;
            }
        }
        include $filename;
        return ob_get_clean();
    }
    return false;
}
