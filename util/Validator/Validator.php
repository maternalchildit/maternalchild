<?php

namespace Validator;

class Validator {
  private $namePattern;
  private $emailPattern;
  private $phonePattern;

  function __construct() {
    $this->namePattern = "/^[a-zA-Z' -]{3,}$/";
    $this->emailPattern = "/^.+@+.+\..+$/";
    $this->phonePattern = "/
      ((\d{1}) | \+(\d{1,}))
      (\s)?
      (\(?(\d{3})\)?)
      (\s)?
      ((\d{3,4}))
      (\s)?
      -?
      ((\d{3,4}))?
    /x";
  }

  private function prepareString(string $string): string {
    $string = trim(strip_tags(stripslashes(htmlspecialchars($string))));
    return $string;
  }

  function validateName(string $name, bool $empty = false) {
    $name = $this->prepareString($name);

    if ($empty) {
      if (empty($name)) {
        return $name;
      }
    }

    if (preg_match($this->namePattern, $name)) {
      return $name;
    }
    return false;
  }

  function validateEmail(string $email, bool $empty = false) {
    $email = $this->prepareString($email);

    if ($empty) {
      if (empty($email)) {
        return $email;
      }
    }

    if (preg_match($this->emailPattern, $email)) {
      return $email;
    }
    return false;
  }

  function validateLongText(string $text, bool $empty = false) {
    if ($empty) {
      if (empty($text)) {
        return $text;
      }
    }
    $text = Validator::prepareString($text);
    return $text;
  }

  function validateShortText(string $text, bool $empty = false) {
    $text = $this->prepareString($text);

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

  function validateFile($file, float $megabytes = null) {
    $filename = $file['name'];
    $allowed_extensions = ['jpg', 'png', 'jpeg'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

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

  function validatePhoneNumber(string $number, bool $empty = false) {
    $number = $this->prepareString($number);
    $number = preg_replace("/\s/", "", $number);
    if (preg_match($this->phonePattern, $number)) {
      return $number;
    }
    return false;
  }

  static function nullString(string $string) {
    if (empty($string)) {
      return null;
    }
    return $string;
  }

}