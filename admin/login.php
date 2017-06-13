<?php

/**
The MIT License (MIT)

Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */
 //validation for the admin login page
require('../../../databaseConnect.php');

session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password'] . "ALS52KAO09");

    //running SQL query
    $sql = $conn->prepare("SELECT * from logins WHERE  username = ? AND password = ?");
    $query = $sql->execute(array(
        $username,
        $password
    ));

    //getting each row
    $count = $sql->rowCount();

        if ($count == 1) {
        $_SESSION['username'] = $username;
        header("Location:adminSelect.php");
        exit;
    } else {
        $message = "You enetered the incorrect login";
        echo "<script type='text/javascript'>alert('$message');</script>";
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

    <!-- nav bar -->
    <?php
        include ('adminIndex.php');
    ?>
    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Admin and Tech</h2>
                    </header>
                    
                    <!--creating the login form-->
                    <form action= " " method="POST">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password"></td>
                            </tr>
                        </table>
                        <p><a href="http://pc-repair.greenrivertech.net/working/admin/forgotPassword.php">Forgot password?</p>
                        <input type="submit" name="submit">
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
