<?php

session_start();

use Utility\Functions;
use Validator\Validator;

require '../setup.php';
require './admin-setup.php';

ensure_login();
ensure_csrf_token();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $validator = new Validator;
    $title = $validator->validateShortText($_POST['title']);
    $featurePic = $_FILES['feature_picture'];
    $content = $validator->validateLongText($_POST['content']);
    $description = $validator->validateLongText(@$_POST['description'] ?? '');

    if ($validator->validateFile($featurePic, 12) == false) {
        dd("Invalid picture");
    }

    $featureFilename = hash('sha256', slug($title . " " . $featurePic['full_path'])) . $featurePic['ext'];

    $saveDir = '/assets/img/features/';

    if (Functions::checkDir($saveDir) == false) {
        Functions::mkdir($saveDir);
    }

    $featurePicDest = __DIR__  . '/../assets/img/features/' . $featureFilename;
    $featurePicUrl = '';
    
    // dd(compact('featurePic', 'featureFilename', 'featurePicDest', 'saveDir'));
    // ! Failed to upload file
    if (move_uploaded_file($featurePic['tmp_name'], $featurePicDest) == false) {
        $_SESSION['errors'][] = "Failed to upload feature photo successfully";
    } else {
        $featurePicUrl = '/assets/img/features/' . $featureFilename;
    }

    if (!$content || !$title) {
        dd("Error occurred");
    }

    // TODO: save content to disk
    $filename = slug($title) . "_" . sha1(time()) . '.html';

    $newsDest = __DIR__ . '/../news/';

    if (!Functions::checkDir('/news')) Functions::mkdir(('/news'));
    $fh = fopen($newsDest . $filename, 'w');
    fwrite($fh, $content);
    fclose($fh);

    // TODO: save to db
    $db->connect();
    $db->insertOne("news_articles", [
        'filepath' => trim('/news/' . $filename),
        'title' => $title,
        'description' => trim($description),
        'feature_picture' => $featurePicUrl,
    ]);

    header("Location: /news.php");
    exit;
} else {
    header("Location: /admin");
}
