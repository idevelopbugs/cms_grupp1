<?php 
include(dirname(__DIR__) . '/includes/db.php');
	if($user->isloggedin()){
		include(dirname(__DIR__) . '/includes/headerloggedin.php');
	}
    else{
        include(dirname(__DIR__) . '/includes/mainheader.php');
    }    
?>

<main id="main-content"></main>