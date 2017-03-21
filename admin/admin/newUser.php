<?php
/**
The MIT License (MIT)

Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */

require('../../../databaseConnect.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//echo 'Connected to database';
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//INSERT DATA

    if(isset($_POST['submit'])){

    //Create Statement
    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $userEmail =$_POST['userEmail'];
    $password =$_POST['password'];
    $accessType = $_POST['accessType'];

    //Selecting data
    $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, userEmail, password, accessType)
                          VALUES (:firstName, :lastName, :userEmail, :password, :accessType)");

        //Bind the parameters
        $isValid = true;

        if(!empty($_POST['firstName'])){
            $firstName = $_POST['firstName'];
        }
        $isValid = false;

        if(!empty($_POST['lastName'])){
            $lastName = $_POST['lastName'];
        }
        $isValid = false;

        if(!empty($_POST['userEmail'])){
            $userEmail = $_POST['userEmail'];
        }
        $isValid = false;

        if(!empty($_POST['password'])){
            $password = $_POST['password'];
        }
        $isValid = false;

        if(!empty($_POST['accessType'])){
            $accessType = $_POST['accessType'];
        }
        $isValid = false;

    $stmt->bindParam(':firstName',$firstName);
    $stmt->bindParam(':lastName',$lastName);
    $stmt->bindParam(':userEmail',$userEmail);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':accessType',$accessType);

    $stmt->execute();
}
?>
<br>
    <form action='' method="post">
        <label>First Name:* <input required="required" type="text" name="firstName"
            value='<?php if (isset($POST['firstName']))echo $_POST['firstName'];?>'</label><br>
        <label>Last Name:* <input required="required" type="text" name="lastName"
            value='<?php if (isset($POST['lastName'])) echo $_POST['lastName'];?>'</label><br>
        <label>Email Address:* <input required="required" type="userEmail" name="userEmail"
            value='<?php if (isset($POST['userEmail'])) echo $_POST['userEmail'];?>'</label><br>
        <label>Password:* <input required="required" type="text" name="password"
            value='<?php if (isset($POST['password']))echo $_POST['password'];?>'</label><br>
        <label>Access Type:* <input required="required" type="text" name="accessType"
            value='<?php if (isset($POST['accessType'])) echo $_POST['accessType'];?>'</label><br>
        <input type="submit" value="Submit">
        <h5>* required fields</h5>
    </form>
</body>
</html>
