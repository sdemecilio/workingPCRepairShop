<?php
/// connection
require('../../databaseConnect.php');

//validating user input
$email= $_POST['email'];
$name= $_POST['name'];
$username= $_POST['username'];
$password=md5($_POST['password'] . "ALS52KAO09");
$confpassword=md5($_POST['conpassword']. "ALS52KAO09");
$accessType=$_POST['accessType'];

if(isset($email, $username, $name, $password, $confpassword, $accessType)){
    if(strstr($email, "@")){

        if($password == $confpassword){

            //SQL query
            $sql= $conn->prepare("SELECT * from logins WHERE  username = ? OR email= ?");
            $query = $sql->execute(array(
                $username,
                $email
            ));
            $count = $sql->rowCount();
            if($count == 0){
                $sql= $conn->prepare("INSERT INTO logins SET name= ?, username = ?, email= ?, password= ?, accessType= ?");

                $sql= $sql->execute(array(
                    $name,
                    $username,
                    $email,
                    $password,
                    $accessType
                ));

                //echoing out errors
                if($sql){
                    echo "User has been register";
                }

            }else{
                echo "A user already exist with the username";
                }
        }else{
            echo "Your passwords do not match";
            }

    }else{
        echo "Invalid email address";
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
		<link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
		<link rel = "stylesheet" href = "admin.css">
		<link rel = "stylesheet" href = "../css/background.css">
</head>
<body>
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">

					</header>

				<!-- Nav -->
					<?php
						include('adminMenu.php');
					?>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="content">
                                    <!--creating the registration form -->
                                    <form action="" method="POST">
                                        <table>
                                            <tr>
                                                <td>Name:</td>
                                                <td><input type="text" name="name"></td>
                                            </tr>
                                             <tr>
                                                <td>Email:</td>
                                                <td><input type="text" name="email"></td>
                                            </tr>
                                            <tr>
                                                <td>Username:</td>
                                                <td><input type="text" name="username"></td>
                                            </tr>
                                            <tr>
                                                <td>Password:</td>
                                                <td><input type="text" name="password"></td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password:</td>
                                                <td><input type="text" name="conpassword"></td>
                                            </tr>
                                            <tr>
                                                <td>Access Type:</td>
                                                <td><input type="text" name="accessType"></td>
                                            </tr>

                                        </table>
                                        <input type="submit" name="submit" value="Register">
                                    </form>
                                </div>
                            </section>
                    </div>
                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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
			<script src="//code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
			<script src = "admin.js"></script>
</body>
</html>