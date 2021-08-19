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
}
