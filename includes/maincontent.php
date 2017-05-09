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
                $likes = $post->getPostLikes($row['ID']);
                echo '
                        <div class="post" id="'. $row['ID'] . '">
                            <h3>' . $row['Title'] . '</h3>
                            <p>' . $row['Content'] . '</p>
                            <h5>' . $row['User'] . ', ' . $row['Date'] . '</h5>
                            <p>' . $likes . '</p>';
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
            }
        ?>

    </div>
</main>

