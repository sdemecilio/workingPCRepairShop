
<?php

require('../../../databaseConnect.php');

    if (isset($_POST["forgotPass"])) {
        try {

            $email = $_POST["email"];
            $sql = $conn->prepare("SELECT id FROM logins WHERE 'email=$email'");
            //echo $email;
            $query = $sql->execute();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        if ($query > 0) {
            $str = "0123456789abcdefghijklmnopqrstuvwxyz";
            $str = str_shuffle($str);
            $str = substr($str, 0, 10);
            $url = "http://pc-repair.greenrivertech.net/working/admin/resetPassword.php?tokens=$str&email=$email";

            mail($email, "Reset Password", "To reset your password, please visit this: $url", "From:pc-repair.greenrivertech.net");

            $sql = $conn->prepare("UPDATE logins SET tokens='$str' WHERE email='$email'");
            $query = $sql->execute();
            $message = "Please check your email. An email is sent to you with a link to set your email.";
            echo "<script type='text/javascript'>alert('$message');</script>";

            }
            else {
                echo "Please check your inputs";
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

                    <!--creating the login form-->
                    <form action= " " method="POST">

    <form action="forgotPassword.php" method="post">
        <table>
            <tr>
                <td><input type="text" name="email" placeholder="Email"></td><br>
                <td><input type="submit" name="forgotPass" value="Request Password"/></td>
            </tr>
        </table>
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