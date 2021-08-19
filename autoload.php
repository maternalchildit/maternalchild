<?php

spl_autoload_register(function ($className) {
  $root = $_SERVER['DOCUMENT_ROOT'];
  $file = $root . '\\util\\' . $className . '.php';
  $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);

  if (file_exists($file)) {
    include $file;
  }
});