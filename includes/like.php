<?php
    include(dirname(__DIR__) . '/includes/db.php');
    if(empty($post->getUserLikes($_GET['id']))) {
        $post->likePost();
    } else {
        $post->unlikePost();
    }
    header('Location: ../index.php');
?>
    