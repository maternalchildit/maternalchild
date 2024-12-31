<div class="container">
    <h1><u>News</u></h1>
    <div class="py-3"></div>

    <ul class="list divided">
        <?php
        for ($i = 0; $i < count($news); $i++) {
            $description = substr($news[$i]['description'], 0, 255);
            $date = date('Y-m-d', strtotime($news[$i]['created_at']));
            echo <<<_
                <li class='article-link py-4'>
                    <h3 class='p-0 m-0'><a href='/news.php?id={$news[$i]['id']}'>{$news[$i]['title']}</a></h3>
                    <p>{$description} <a href="/news.php?id={$news[$i]['id']}">...read more</a></p>
                    <p>Date: {$date} </p>
                </li>
                _;
        }
        ?>
    </ul>
</div>