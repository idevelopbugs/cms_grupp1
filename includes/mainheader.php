<header>
    <?php 
        include 'includes/loginform.php'; 
        if(!empty($_GET['message'])) {
            echo '<div><p>' . $_GET['message'] . '</p></div>';
        }
    ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Cowtalk</h1>
        </div>
    </div>
</header>