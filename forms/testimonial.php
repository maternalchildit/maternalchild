<?php
require '../setup.php';

use Validator\Validator;

$validator = new Validator;

if (!$database_connection) {
  header("Location: /error.php?error=database_connection");
}

$testimonialDir = '/assets/img/testimonials';

if (!is_dir(ROOT . $testimonialDir)) {
  mkdir(ROOT . $testimonialDir);
}
if (isset($_POST)) {
  if (!isset($_FILES)) {
    echo json_encode(['status' => false, 'error' => 'No Profile image Provided']);
    return;
  }
  $file = $_FILES['witnesspic'];
  $filename = $file['name'];

  $destinationFilename = $filename;

  $name = $validator->validateName($_POST['witness']);
  $email = $validator->validateEmail($_POST['email']);
  $testimonial = $validator->validateLongText($_POST['testimonial']);
  $description = $validator->validateShortText($_POST['description']);

  $fileValid = $validator->validateFile($file, 20);
  if ($fileValid) {
    $n = 0;
    while (file_exists(ROOT . $testimonialDir . '/' . $destinationFilename)) {
      $broken = explode('.', $destinationFilename, 2);
      $ext = end($broken);
      $tmpfile_name = $broken[0];

      if (preg_match("/\(\d+\)$/", $tmpfile_name)) {
        $tmpfile_name = preg_replace("/\(\d+\)$/", "($n)", $tmpfile_name);
        $tmpfile_name .= ".$ext";
        $destinationFilename = $tmpfile_name;
        continue;
      }

      $tmpfile_name .= " ($n).$ext";
      $destinationFilename = $tmpfile_name;
      $n += 1;
    }

    // echo_json($file);

    if (move_uploaded_file($file['tmp_name'], ROOT . $testimonialDir . '/' . $destinationFilename)) {
      if ($db->insertOne("testimonials", ['name' => $name, 'description' => $description, 'email' => $email, 'testimonial' => $testimonial, 'profilepic' => $testimonialDir . '/' . $destinationFilename, 'date' => date('Y-m-d H:i:s')])) {
        echo_json(['status' => 'ok']);
      } else {
        echo_json(['status' => 'error', 'message' => 'An Error Occured. Please try again later.']);
      }
    } else {
      echo_json(['status' => 'error', 'message' => 'Your Testimonial could not be saved. Please check your information and try again.']);
    }

  }
}