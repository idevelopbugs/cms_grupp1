<?php
	include(dirname(__DIR__) . '/includes/db.php');
    $post->createPost();
    header('location: ../index.php');