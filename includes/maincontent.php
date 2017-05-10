<?php
include(dirname(__DIR__) . '/includes/db.php');

$posts = $post->getAllPosts();
?>
<main>
    <div class ="container" id="container">
        <div class="row">
        <?php	
            foreach ($posts as $row){
                $likes = $post->getPostLikes($row['ID']);
                echo '
                        <div class="postcontainer col-lg-8 col-sm-12 col-lg-offset-2">
                        <div class="post card" id="'. $row['ID'] . '">
                            <div class="card-block">
                            <h3>' . $row['Title'] . '</h3>
                            <p>' . $row['Content'] . '</p>
                            </div>
                            <div class="card-footer">
                            <div class="container-fluid col-sm-6">
                            <h5>' . $row['User'] . ', ' . $row['Date'] . '</h5>
                            </div>
                            <div class="container-fluid card-foot col-sm-6">
                            <h5>' . $likes . '</h5>';
                            
                            if(!$user->isloggedin()) {
                                echo '<a href="includes/like.php" class="disabled">&#128077;</a>';
                            } else {
                                echo '<a href="includes/like.php?id=' . $row['ID'] . '" class="enabled">&#128077;</a>';
                                if ($_SESSION['username'] == $row['User']) {  
                                    echo '<div class="postoptions">
                                        <a href="includes/editor.php?id=' . $row['ID'] . '">Edit</a>
                                        <a href="includes/delete.php?id=' . $row['ID'] . '">Remove</a>
                                    </div>';
                                }
                                else if($_SESSION['admin']){
                                    echo '<a href="includes/delete.php?id=' . $row['ID'] . '">Remove</a>';
                                }	   
                            }
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
            }
        ?>
</main>