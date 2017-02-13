<?php
/**
 * Created by PhpStorm.
 * User: Axum
 * Date: 2/6/2017
 * Time: 9:53 AM
 */
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" id="collapse-btn" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" data-toggle="modal">
                <?php if ($_SESSION['name'] == null) {
    echo "PC Repair Shop";
} else {
    echo "<span class='hidden-xs'>Welcome ".$_SESSION['first_name']."</span>&nbsp<span id='credentials-btn' class='glyphicon glyphicon-cog'></span>";
} ?>
    </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li <?php if ($thisPage == 'About') {
                echo "class='active'";
            }
            ?>
                id='aboutLink'><a href="home.php">Home</a></li>
            <li <?php if ($thisPage == 'About Us') {
                echo "class='active'";
            }
            ?>
                id='contactLink'><a href="contact.php">Contact Us</a></li>
            <li <?php if ($thisPage == 'Class') {
    echo "class='active'";
    }
    ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
