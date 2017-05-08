<?php
    include(dirname(__DIR__) . '/includes/db.php');
    $post->likePost();
    header('Location: ../index.php');
?>
    