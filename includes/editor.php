<?php 
    include(dirname(__DIR__) . '/includes/db.php');
    include(dirname(__DIR__) . '/includes/header.php');
    include(dirname(__DIR__) . '/includes/headerloggedin.php');
    $post = $post->getPost();

    echo '<div class="container"
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                    <form method="post" action="editpost.php?id=' . $post['ID'] . '" id="postform">
                        <input class="form-control titlerow" type="text" value="' . $post['Title'] . '" name="title" required>
                        <textarea class="form-control" rows="10" cols="30" name="postcontent" required>' . $post['Content'] . '</textarea>
                        <button class="btn btn-primary addpostbtn" type="submit" name="submit" value="Edit">Edit post</button>
                    </form>
                </div>
            </div>
    </div';

?>