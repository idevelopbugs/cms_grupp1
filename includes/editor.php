<?php 
    include(dirname(__DIR__) . '/includes/db.php');
    $post = $post->getPost();
    var_dump($post['Title']);


    echo '<form method="post" action="editpost.php?id=' . $post['ID'] . '" id="postform">';//*/
	echo '<input type="text" value="' . $post['Title'] . '" name="title" required><br>';
	echo '<textarea rows="10" cols="30" name="postcontent" required>' . $post['Content'] . '</textarea><br>';
	echo '<input type="submit" value="Edit" name="submit"></form>';   
?>