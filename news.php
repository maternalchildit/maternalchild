<?php

require('./setup.php');

use Utility\Functions;
use Validator\Validator;

global $db;

$db->connect();

$validator = new Validator();

$showing_article = false;

$id = @$_GET['id'];
$id = $validator->validateInteger($id);

if ($id) {
    $article = @$db->select("news_articles", null, "id = $id")[0];
    if (!$article) {
        header("Location: " . "/news.php");
        return;
    }
    $article['title'] = strtoupper($article['title']);
    $article['created_at'] = date('Y-m-d h:i A', strtotime($article['created_at']));
    $articleText = file_get_contents(__DIR__  . $article['filepath']);

    $articleText = str_replace("\n", "<br/><br/>", $articleText);
    $showing_article = true;
} else {
    $page = intval(@$_GET['page']) or 1;
    $news = $db->select('news_articles', limit: 30, skip: max(($page - 1), 0) * 30);
}


$navbar = null;
const TITLE = 'Home';
$styles = ['news'];
Functions::extend('header');
?>

<main>
    <?php
    if (!$showing_article) {
        include('ops/news-default.php');
    } else {
        echo <<<_
            <div class='container pb-3'>
                <a href="/news.php" class='pb-3'>< Back to news</a>
                <h1>$article[title]</h1>
                <p><i>Date: {$article['created_at']}</i></p>
                $articleText

                <a href="/news.php" class='py-3'>< Back to news</a>
            </div>
        _;
    }
    ?>
</main>

<?php
Functions::extend('footer');
