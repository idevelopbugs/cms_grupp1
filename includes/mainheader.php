<header>
    <?php 
        include 'includes/loginform.php'; 
        if(!empty($_GET['message'])) {
            echo '<div><p>' . $_GET['message'] . '</p></div>';
        }
    ?>
</header>