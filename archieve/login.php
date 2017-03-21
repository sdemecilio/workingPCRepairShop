<?php
session_start();

$servername="localhost";
$username= "pcrepair";
$password ="Capstone2017!";
$dbname="pcrepair_shop";
$message="";
try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//echo 'Connected to database';
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['login'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            $message='<label>All fields are required</label>';
        }else{
            $stmt=$conn->prepare("SELECT email, userPassword From login WHERE email= :email AND userPassword= :userPassword");

            $stmt->execute(
                array(
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
            )
            );
            $count = $stmt->rowCount();
            if($count > 0){
                $_SESSION['username']= $_POST['username'];
                header("Location:login_success.php");
            }
            else{
                $message ="<label>Wrong Information</label>";
            }

        }
    }
}
catch(PDOException $e)
{
    $message= $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>

    <title>Login</title>

</head>
<body>

<?php

if(isset($message)){
    echo '<label class="text-danger">'.$message.'</label>';
}

?>

<div>
    <h3>Login</h3>

    <form method="post">
        <label>Username</label>
        <input type="text" name="username" />
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <br>

        <input type="submit" name="login" class="btn btn-info" value="login"/>
    </form>
</div>
</body>
</html>
