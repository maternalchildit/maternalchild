<?php

use Validator\Validator;

require '../setup.php';

if (!$database_connection) {
  echo_json(['error' => 'Error. Please try again later.']);
}

$validator = new Validator;

if (isset($_POST)) {
  $email = $validator->validateEmail($_POST['email']);

  if ($email) {
    if ($db->insertOne('newsletter', ['email' => $email, 'datetime' => date('Y-m-d H:i:s')])) {
      echo_json(['ok' => true]);
    } else {
      $logger->log($db->getError(), 'database');
      echo_json(['error' => 'An error occured. Please try again later']);
    }
  }
}