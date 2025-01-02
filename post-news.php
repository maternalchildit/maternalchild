<?php

use Utility\Functions;
use Validator\Validator;

require './setup.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $validator = new Validator;
    $username = $validator->validateShortText($_POST['username']);
    $password = $validator->validateLongText($_POST['password']);
    $title = $validator->validateShortText($_POST['title']);
    $content = $validator->validateLongText($_POST['content']);
    $description = $validator->validateLongText(@$_POST['description'] ?? '');

    if ($username !== 'peterojo' and $password !== 'cipro2.34%Y') {
        header("Location: /news.php");
        exit;
    }

    if (!$content || !$username || !$password || !$title) {
        dd("Error occurred");
    }

    // TODO: save content to disk
    $filename = preg_replace("/\s/", "_", strtolower($title)) . "_" . sha1(time()) . '.html';

    if (!Functions::checkDir('/news')) Functions::mkdir(('/news'));
    $fh = fopen('news/' . $filename, 'w');
    fwrite($fh, $content);
    fclose($fh);

    // TODO: save to db
    $db->connect();
    $db->insertOne("news_articles", [
        'filepath' => '/news/' . $filename,
        'title' => $title,
        'description' => $description,
    ]);

    header("Location: /news.php");
    exit;
}


Functions::extend('header');
?>

<main class="py-3">
    <div class="container">
        <form action="" method="post">
            <div class="row pb-3">
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" required="required" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" required="required" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" required="required" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="form-group pb-3">
                <label for="">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group pb-3">
                <textarea id="summernote" name="content" required></textarea>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
        });
    });
</script>
<?php
Functions::extend('footer');
