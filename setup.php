<?php

date_default_timezone_set('Africa/Lagos');
header("strict-transport-security: max-age=0; includeSubdomains; preload");

function full_require(string $path) {
  return require $_SERVER['DOCUMENT_ROOT'] . $path;
}

function echo_json($obj) {
  echo json_encode($obj);
  exit();
}

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

full_require('/autoload.php');
full_require('/vendor/autoload.php');

use Database\Database;
use Dotenv\Dotenv;
use Logger\Logger;


$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

if ($_ENV['MAINTENANCE_MODE'] === '1') {
  echo "Sorry, this site is under maintenance. Try again later.";
  exit();
}

$db = new Database();
$logger = new Logger;

$cdn = false;
if ($_ENV['CDN'] === '1') {
  $cdn = true;
}

$database_connection = $db->connect();