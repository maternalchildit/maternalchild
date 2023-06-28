<?php
require '../setup.php';

use Validator\Validator;

$validator = new Validator;

echo_json(['ok' => true,]);

if (!$database_connection) {
  $logger->log($db->getError(), 'database');
  echo_json(['ok' => false, 'error' => 'An error occured. Please try again later']);
}

if (isset($_POST)) {
  $recaptcha_response = $_POST['g-recaptcha-response'];

  if (!empty($recaptcha_response)) {

    $secret = $_ENV['RECAPTCHA_SECRET_KEY'];
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);

    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
      $name = $validator->validateName($_POST['name']);
      $email = $validator->validateEmail($_POST['email']);
      $phone = $validator->validatePhoneNumber($_POST['phone']);
      $date = $_POST['date'];
      // $department = $validator->validateName($_POST['department'], true);
      // $doctor = $validator->validateName($_POST['doctor'], true);
      $message = $validator->validateLongText($_POST['message'], true);

      if (!$name || !$email || !$phone || !$date) {
        echo_json(['ok' => false, 'error' => 'A validation error occured. PLease check your input and try again']);
      }

      // $doctor = Validator::nullString($doctor);
      // $department = Validator::nullString($department);
      $message = Validator::nullString($message);

      $rowval = ['name' => $name, 'email' => $email, 'phone' => $phone, 'date' => $date, 'message' => $message];

      if ($db->insertOne("appointments", $rowval)) {
        echo_json(['ok' => true]);
      }
    } else {
      echo_json(['ok' => false, 'error' => 'ReCAPTCHA Verification failed. Please try again later.']);
    }
  }
}
