<?php

namespace Validator;

class Validator
{
  private static $namePattern = "/^[a-zA-Z' -]{3,}$/";
  private static $emailPattern = "/^.+@+.+\..+$/";
  private static $phonePattern = "/
  ((\d{1}) | \+(\d{1,}))
  (\s)?
  (\(?(\d{3})\)?)
  (\s)?
  ((\d{3,4}))
  (\s)?
  -?
  ((\d{3,4}))?
/x";

  function __construct() {}

  public static function prepareString(string $string): string
  {
    $string = trim(strip_tags(stripslashes(htmlspecialchars($string))));
    return $string;
  }

  function validateName(string $name, bool $empty = false)
  {
    $name = self::prepareString($name);

    if ($empty) {
      if (empty($name)) {
        return $name;
      }
    }

    if (preg_match(self::$namePattern, $name)) {
      return $name;
    }
    return false;
  }

  function validateEmail(string $email, bool $empty = false)
  {
    $email = self::prepareString($email);

    if ($empty) {
      if (empty($email)) {
        return $email;
      }
    }

    if (preg_match(self::$emailPattern, $email)) {
      return $email;
    }
    return false;
  }

  function validateLongText(string $text, bool $empty = false)
  {
    if ($empty) {
      if (empty($text)) {
        return $text;
      }
    }
    $text = self::prepareString($text);
    return $text;
  }

  function validateShortText(string $text, bool $empty = false)
  {
    $text = self::prepareString($text);

    if ($empty) {
      if (empty($text)) {
        return $text;
      }
    }

    if (preg_match("/^[a-zA-Z0-9,\.)(]/", $text)) {
      return $text;
    }
    return false;
  }

  function validateFile(&$file, float $megabytes = null)
  {
    $filename = $file['name'];
    $allowed_extensions = ['jpg', 'png', 'jpeg'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $file['ext'] = ".$ext";

    if (in_array($ext, $allowed_extensions, true)) {
      if ($megabytes > 0) {
        $max_size = $megabytes * 1000000;
        if ($file['size'] > $max_size) {
          return false;
        }
      }
      return true;
    }
    return false;
  }

  function validatePhoneNumber(string $number)
  {
    $number = self::prepareString($number);
    $number = preg_replace("/\s/", "", $number);
    if (preg_match(static::$phonePattern, $number)) {
      return $number;
    }
    return false;
  }

  function validateInteger(?string $num)
  {
    if (!$num) return;
    $num = self::prepareString($num);
    if (preg_match("/^\d+$/", $num)) {
      return $num;
    }
  }

  static function nullString(string $string)
  {
    if (empty($string)) {
      return null;
    }
    return $string;
  }
}
