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

$title = null;
$metaOg = [];
global $metaOg;

if ($id) {
    $article = @$db->select("news_articles", null, "id = $id")[0];
    if (!$article) {
        header("Location: " . "/news.php");
        return;
    }

    $article['title'] = $metaOg['title'] = strtoupper($article['title']);
    $metaOg['description'] = htmlspecialchars_decode($article['description']);
    $metaOg['url'] = 'https://maternalchildhosp.net' . $_SERVER['REQUEST_URI'];
    $metaOg['image'] = 'https://maternalchildhosp.net' . ($article['feature_picture'] ?? '/assets/img/favicon.ico');

    $article['created_at'] = date('Y-m-d h:i A', strtotime($article['created_at']));
    $articleText = file_get_contents(__DIR__  . $article['filepath']);

    $articleText = htmlspecialchars_decode($articleText);

    $articleText = str_replace("\n", "<br/><br/>", $articleText);
    $showing_article = true;
} else {
    $page = intval(@$_GET['page']) or 1;
    $news = $db->select('news_articles', limit: 30, skip: max(($page - 1), 0) * 30, order_by: 'created_at desc');
}


$navbar = null;
const TITLE = 'Home';
$styles = ['news'];
Functions::extend('header', compact('title', 'metaOg'));
?>

<main>
    <?php
    if (!$showing_article) {
        include('ops/news-default.php');
    } else {
        echo <<<_
            <div class='container pb-3 news-article'>
                <a href="/news.php" class='pb-3'>< Back to news</a>
                <h1>$article[title]</h1>
                <p><i>Date: {$article['created_at']}</i></p>
                <div class='news-content py-3'>$articleText</div>
                <a href="/news.php" class='py-3'>< Back to news</a>
            </div>
        _;
    }
    ?>
</main>

<?php
Functions::extend('footer');
