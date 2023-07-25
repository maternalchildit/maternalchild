<?php
header("strict-transport-security: max-age=0; includeSubdomains; preload");

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

use Database\Database;
use Dotenv\Dotenv;
use Logger\Logger;

full_require('/autoload.php');
full_require('/vendor/autoload.php');

function env($key, $default = null) {
  // die($_ENV[$key] ??$default);
  return $_ENV[$key] ?? $default;
}

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

if (env('MAINTENANCE_MODE') === '1') {
  echo "Sorry, this site is under maintenance. Try again later.";
  exit();
}

$db = new Database();
$logger = new Logger;

$cdn = false;
if (env('CDN') === '1') {
  $cdn = true;
}

function full_require(string $path)
{
  return require $_SERVER['DOCUMENT_ROOT'] . $path;
}

function echo_json($obj)
{
  echo json_encode($obj);
  exit();
}
