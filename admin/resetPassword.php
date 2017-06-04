
<?php

require('../../../databaseConnect.php');
if (isset($_POST["submit"])) {
    if (isset($_GET["email"]) && isset($_GET["tokens"])) {


        $email = $_GET["email"];
        $tokens = $_GET["tokens"];

        $sql = $conn->prepare("SELECT id FROM logins WHERE email='$email' AND tokens='$tokens'");
        $data = $sql->execute();
        if ($data > 0) {
            //$str = "0123456789abcdefghijklmnopqrstuvwxyz";
            //$str = str_shuffle($str);
            //$str = substr($str, 0, 10);
            //$newPassword = md5($str . "ALS52KAO09");
            $newPassword = md5($_POST["password"]. "ALS52KAO09");
            //$password = $str;

            $sql = $conn->prepare("UPDATE logins SET password='$newPassword' WHERE email='$email'");
            $query = $sql->execute();
            //echo "Your new password is: $str";
            $message = "You successfuly reset your password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            echo "Please check your link";

        }
    } else {

        header("Location:login.php");
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Green River Repair Shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
    <link rel = "stylesheet" href = "../css/background.css">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1>Green River PC Repair Shop</h1>
    </header>


    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
<form action="" method="POST">
    <table>

        <tr>
            <td> New Password:</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="text" name="confirmPassword"></td>
        </tr>


    </table>
    <input type="submit" name="submit" value="Reset">
</form>
        </section>
    </div>
</div>

<!-- Footer -->
<footer id="footer">
    </section>
    <p class="copyright">&copy; 2017 Team SAS</a>.</p>
</footer>

</div>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../assets/js/main.js"></script>

</body>
</html>
