<header>
    <?php 
        include 'includes/loginform.php'; 
        if(!empty($_GET['message'])) {
            echo '<div><p>' . $_GET['message'] . '</p></div>';
        }
    ?>
    <a href="includes/signupform.php">Register</a>
</header>