<?php

use Utility\Functions;
session_start();

require('../setup.php');
require('./admin-setup.php');

ensure_login();
set_csrf_token();
Functions::extend('admin/header', compact('cdn'));
?>

<main class="py-3">
    <div class="container">
        <h1>Add New Post</h1>
        <a href="./posts.php">View Posts</a>
        <a href="./logout.php">Logout</a>
    </div>

    <div class="container">
        <form action="./post-news.php" method="post" enctype="multipart/form-data">
            <?php add_csrf_input(); ?>
            <div class="row pb-3">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Add Title</label>
                        <input type="text" name="title" required="required" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="form-group pb-3">
                <label for="">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="row pb-3">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Feature Image</label>
                        <input type="file" name="feature_picture" required="required" class="form-control" />
                    </div>
                </div>
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