<?php
    include(dirname(__DIR__) . '/includes/db.php');
    $post->editPost();
    header('refresh:2; url=../index.php');