<?php
include(dirname(__DIR__) . '/includes/db.php');

$posts = $post->getAllPosts();
?>
<main>
    <?php
         if(!empty($_GET['message'])) {
              echo $_GET['message'];
              echo "<br>";
         }
    ?>
    <div id="container">
        <?php	
            foreach ($posts as $row){
                echo '
                        <div class="post" id="'. $row['ID'] . '">
                            <h3>' . $row['Title'] . '</h3>
                            <p>' . $row['Content'] . '</p>
                            <h5>' . $row['User'] . ', ' . $row['Date'] . '</h5>';
                            if(!$user->isloggedin()) {
                                echo '<a href="like.php" class="disabled">&#128077;</a>';
                            } else {
                                if(!$post->getPostLikes($row['ID'])) {
                                    echo '<a href="like.php" class="enable">&#128077;</a>';
                                } else {
                                    echo '<a href="like.php" class="disabled">&#128077;</a>';
                                }
                                if ($_SESSION['username'] == $row['User']) {  
                                    echo '<div class="postoptions">
                                        <a href="includes/editor.php?id=' . $row['ID'] . '">Edit</a>
                                        <a href="includes/delete.php?id=' . $row['ID'] . '">Remove</a>
                                    </div>';
                                }
                                else if($_SESSION['admin']){
                                    echo '<a href="includes/delete.php?id=' . $row['ID'] . '">Remove</a>';
                                    header('Location: index.php');
                                }	
                                
                            }
                        echo '</div>';
            }
        ?>

    </div>
</main>

