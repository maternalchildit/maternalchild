<?php

namespace Logger;

class Logger {
  public $logDir;

  function __construct() {
    $this->logDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/logs';
  }

  private function checkLogDir() {
    if (!is_dir($this->logDir)) {
      if (mkdir($this->logDir)) {
        return true;
      }
      return false;
    }
    return true;
  }

  function log(string $message, string $level = 'info') {
    if ($this->checkLogDir()) {
      if (!$level) {
        $level = 'info';
      }
      switch ($level) {
      case 'info':
        $filename = $this->logDir . '/info.log';
        break;
      case 'error':
        $filename = $this->logDir . '/error.log';
        break;
      case 'user':
        $filename = $this->logDir . '/user.log';
        break;
      case 'database':
        $filename = $this->logDir . '/database.log';
        break;
      }

      $logMessage = "[" . date('Y-m-d H:i:s') . "] (" . $_SERVER['SCRIPT_FILENAME'] . '): ' . $message ."\n";
      // echo_json($logMessage);

      $file = fopen($filename, 'a+');
      if (fwrite($file, $logMessage)) {
        return true;
      } else {
        return false;
      }
    }

  }
}