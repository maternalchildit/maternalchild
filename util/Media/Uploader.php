<?php

namespace Media;

use Utility\Functions;

class Uploader
{
  /**
   * Static: upload file to assets
   */
  static function uploadFile($file, $dir)
  {
    if (!is_dir($dir)) {
      return Functions::echo_json(['ok' => false, 'error' => 'Attempted upload directory does not exist. Contact Admin']);
    }

    $filename = $file['name'];

    return $filename;

    // if (!move_uploaded_file($file['name']))
  }
}
