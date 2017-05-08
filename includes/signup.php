<?php
	include(dirname(__DIR__) . '/includes/db.php');
    $errormessage = $user->signup();
    header('refresh:2; url=signupform.php?error=' . $errormessage);