<?php

namespace Logger;

class Logger
{
  public $logDir;

  function __construct()
  {
    $this->logDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/logs';
  }

  private function checkLogDir()
  {
    if (!is_dir($this->logDir)) {
      if (mkdir($this->logDir)) {
        return true;
      }
      return false;
    }
    return true;
  }

  function log(string $message, string $level = 'error')
  {
    if ($this->checkLogDir()) {
      $date = date('Y-m-d');
      $level = strtoupper($level);

      $filename = $this->logDir . '/' . $date . '.log';

      $logMessage = "[" . date('Y-m-d H:i:s') . "] {$level}: (" . $_SERVER['SCRIPT_FILENAME'] . ') - ' . $message . "\n";

      $file = fopen($filename, 'a+');
      if (fwrite($file, $logMessage)) {
        return true;
      } else {
        return false;
      }
    }
  }

  function error(\Throwable $e, $level = 'info')
  {
    $this->log($e->getMessage() . " : " . $e->getFile() . ":" . $e->getLine(), $level);
  }
}
