<?php

use Validator\Validator;

require '../setup.php';

if (!$database_connection) {
  $logger->log('Database connection error', 'database');
  echo_json(['error' => 'An error occurred. Please try again later.', 'ok' => false]);
}

$validator = new Validator;

if (isset($_POST)) {
  $name = $validator->validateName($_POST['name']);
  $email = $validator->validateEmail($_POST['email']);
  $subject = $validator->validateShortText($_POST['subject']);
  $message = $validator->validateLongText($_POST['message']);

  if (!$name or !$subject or !$email or !$message) {
    echo_json(['error' => 'A validation error occurred. Please check your input and try again.', 'ok' => false]);
  }

  if ($db->insertOne('contact', ['name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message, 'date' => date('Y-m-d H:i:s')])) {
    echo_json(['ok' => true]);
  } else {
    $logger->log($db->getError(), 'database');
    echo_json(['error' => 'An error occurred. Please try again later.', 'ok' => false]);
  }
}