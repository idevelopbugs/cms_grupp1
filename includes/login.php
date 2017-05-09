<?php
	include(dirname(__DIR__) . '/includes/db.php');
    $errormessage = $user->login();
    if($errormessage) {
        header('refresh:2; url=../index.php?message=' . $errormessage);
    } else {
        header('refresh:2; url=../index.php');
    }
    


    