<?php
header("strict-transport-security: max-age=0; includeSubdomains; preload");

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

use Database\Database;
use Dotenv\Dotenv;
use Logger\Logger;

full_require('/autoload.php');
full_require('/vendor/autoload.php');

function env($key, $default = null)
{
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

global $db;

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

function dump($var)
{
  return (var_dump($var));
}
function dd($var)
{
  die(echo_json($var));
}

function slug($str, $separator = "_") {
  return preg_replace("/\s/", $separator, strtolower($str));
}

set_exception_handler(function ($e) use ($logger) {
  $logger->error($e, 'error');

  if (env('APP_ENV', 'production') == 'production') {
    echo <<<_
      <html>
        <p>Oops! an error occurred.</p>
      </html>
    _;
  } else {
    throw $e;
  }
});
