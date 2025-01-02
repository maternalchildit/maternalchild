<?php

namespace Utility;

class Functions
{
  static private function give_root()
  {
    return $_SERVER['DOCUMENT_ROOT'];
  }

  static function extend($path)
  {
    return require Functions::give_root() . '/layouts/' . $path . '.php';
  }

  static function frequire($path)
  {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, Functions::give_root() . $path);
    require $file;
  }

  static function echo_json($obj)
  {
    echo json_encode($obj);
    exit();
  }

  static function checkDir($dir)
  {
    return is_dir($_SERVER['DOCUMENT_ROOT'] . $dir);
  }

  static function mkdir($dir)
  {
    return mkdir($_SERVER['DOCUMENT_ROOT'] . $dir);
  }
}
