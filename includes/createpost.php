<?php
	include 'db.php';

    $posts = new Posts($pdo);
    $posts->createPost();