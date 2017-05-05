<?php
include(dirname(__DIR__) . '/includes/db.php');

$posts = $post->getAllPosts();
?>
<div id="container">
	<?php	
		foreach ($posts as $row){
			echo '
					<div class="post" id="'. $row['ID'] . '">
						<h3>' . $row['Title'] . '</h3>
						<p>' . $row['Content'] . '</p>
						<h5>' . $row['User'] . ', ' . $row['Date'] . '</h5>
                        <a href="">&#128077;</a>';

						if($user->isloggedin()){
							if ($_SESSION['username'] == $row['User']) {
									
								echo '<div class="postoptions">
									<a href="includes/editor.php?id=' . $row['ID'] . '">Edit</a>
									<a href="includes/delete.php?id=' . $row['ID'] . '">Remove</a>
								</div>';
								//header('Location: index.php');
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

