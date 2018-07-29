<?php

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

if (!function_exists('base_url')) {
    function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf( $tmplt, $http, $hostname, $end );
        }
        else $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }

        return $base_url;
    }
}

if ($_SERVER['SERVER_NAME']==='local.dev') {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'fnc_super');
	define('DB_PWD', 'YhPnTw987!');
	define('DB_NAME', 'fnc_db');
}
else {
	define('DB_HOST', 'localhost.fncreative.design');
	define('DB_USER', 'fnc_admin');
	define('DB_PWD', '@2BKVSv8T7@GUch');
	define('DB_NAME', 'fnc_db');
}

date_default_timezone_set('America/Los_Angeles');

define('BASE_URL', base_url());
define('STORE_URL', dirname(BASE_URL).'/');
define('SESSION_EXPIRY', 1800);
define('SESSION_ID', 'fnc');
define('BUSINESS', "fn creative");

session_start();

include_once('utils.inc.php');

?>