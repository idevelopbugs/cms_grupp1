<?php
include(dirname(__DIR__) . '/includes/db.php');

$posts = $post->getAllPosts();
?>
<div id="container">
	<?php	
		foreach ($posts as $row){
			echo '
					<div class="post">
						<h3>' . $row['Title'] . '</h3>
						<p>' . $row['Content'] . '</p>
						<h5>' . $row['User'] . ', ' . $row['Date'] . '</h5>
						<input type="submit" class="likebtn" value="Like">';

						if($user->isloggedin()){
							if ($_SESSION['username'] == $row['User']) {
									
								echo '<div class="postoptions">
									<input type="submit" value="Edit">
									<input type="submit" value="Remove">
								</div>';
							}
							else if($_SESSION['admin']){
								echo '<input type="submit" value="Remove">';
							}	
						}
					echo '</div>';
		}
	?>

</div>

