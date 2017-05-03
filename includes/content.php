
<?php 
include(dirname(__DIR__) . '/includes/db.php');
	if($user->isloggedin()){
		include(dirname(__DIR__) . '/includes/headerloggedin.php');
	}
    else{
        include 'includes/mainheader.php';
    }
?>