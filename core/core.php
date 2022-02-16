<?php

use App\Libraries\Router;

/**
 * (var_)dump variable(s)
 * No params, just get vars from func_get_args function
 */
function dd()
{
    $args = func_get_args();

    if (count($args))
    {
        echo "<pre>";

        foreach ($args as $arg)
        {
            var_dump($arg);
        }

        echo "</pre>";

        die();
    }
}


/**
 * Create an encrypted token and set the token var in the SESSION
 */
function createToken()
{
    $token = bin2hex(openssl_random_pseudo_bytes(16));

    $options = 0;

    $_SESSION['token'] = openssl_encrypt($token, $_ENV['CIPHERING'], $_ENV['SECRET'], $options, $_ENV['ENCRYPTION_IV']);
    $_SESSION['token_time'] = time();

    return $_SESSION['token'];
}


/**
 * De-crypt a token and compare given token with the one in the SESSION
 * @param $token (string)
 * @return true when tokens compare with each other or false when not
 */
function decryptToken($token)
{
    $options = 0;
    $decryption = openssl_decrypt($token, $_ENV['CIPHERING'], $_ENV['SECRET'], $options, $_ENV['ENCRYPTION_IV']);

    return $token === $decryption;
}


/**
 * Create a HTML hidden input element with a token
 * When posting data the value of this hidden field 
 * will be compared with the one in the session
 * This comparission is done in the Request class (App\Libraies\Request)
 */
function generateFormTokenHTML()
{
    return "<input type=\"hidden\" value=\"" . createToken() . "\" name=\"f_token\">";
}


/**
 * Plurarize a string
 */
function pluralize($quantity, $singular, $plural=null)
{
    if ($quantity==1 || !strlen($singular)) return $singular;
    if ($plural!==null) return $plural;

    $last_letter = strtolower($singular[strlen($singular)-1]);
    switch($last_letter) {
        case 'y':
            return substr($singular,0,-1).'ies';
        case 's':
            return $singular.'es';
        default:
            return $singular.'s';
    }
}

/**
 * All Exceptions go to this function as this has been set in index.php
 */
function exception_handler($exception)
{
    $message = $exception->getMessage();

    require 'views/errors/exceptions.view.php';
}

function fullNameFromSession()
{
    return isset($_SESSION) && 
        isset($_SESSION['user']) && 
        isset($_SESSION['user']['uid']) &&
        (int)$_SESSION['user']['uid'] > 0 ? $_SESSION['user']['first_name'] . (!empty($_SESSION['user']['insertion']) ? ' ' . $_SESSION['user']['insertion'] : '') . ' ' . $_SESSION['user']['last_name'] : '';
}

function getModels()
{
    $models = [];

    $files = scandir($_SERVER['DOCUMENT_ROOT'] . "/app/Models", SCANDIR_SORT_ASCENDING);

    if (isset($_SESSION['models']) && count($files) === count($_SESSION['models'])) {
        return $_SESSION['models'];
    }

    foreach ($files as $file)
    {
        if ($file == '.' || $file == '..') {
            continue;
        }

        $contents = str_replace(' ', '', file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/app/Models/" . $file));
        $contents = str_replace('"', "'", $contents);

        $pos = stripos($contents, "\$model='");
        
        if ($pos !== false) {
            $pos1 = stripos($contents, "'", $pos);
            if ($pos1 !== false) {
                $pos2 = stripos($contents, "'", $pos1 + 1);
                
                $models['App\\Models\\' . str_ireplace('.php', '', $file)] = substr($contents, $pos1 + 1, $pos2 - $pos1 - 1);
            }
        }
    }

    $_SESSION['models'] = $models;
}

function route($name)
{
    if (trim($name) == '') {
        return false;
    }

    $routes = Router::load('routes.php');

    if (array_key_exists('GET', $routes->routes)) {
        foreach ($routes->routes['GET'] as $key => $route) {
            if (trim(strtolower($route['name'])) == trim(strtolower($name))) {
                return $key;
            }
        }
    }
}