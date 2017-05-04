<?php
include '/includes/db.php'; 
$data = $post->getAllPosts(); 
echo $post->listAllJson($data);

//echo $json[1];
?>