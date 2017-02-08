<?php

/**
    The MIT License (MIT)

    Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */

?>

<?php
    require('../../databaseConnect.php');
    
    // create a variable
    $greenriver_status = $_POST['greenriver'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $greenriver_id = $_POST['ID'];
    $email = $_POST['email'];
    $phone_number = $_POST['phoneNumber'];
    $comp_lang = $_POST['compLang'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_cleaner = $_POST['ccleaner'];
    $c_initials = $_POST['cInitials'];
    
    // execute query
    mysqli_query($cnxn, "INSERT INTO workOrder (student_faculty, first_name, last_name, greenriverID, email, phone_number, computer_language, computer_username, computer_password, ccleaner, customer_initials) VALUES ('$greenriver_status', '$first_name', '$last_name', '$greenriver_id', '$email', '$phone_number', ' $comp_lang', '$username', '$password', '$c_cleaner', '$c_initials')");
    
    if (mysqli_affected_rows($cnxn) > 0)
    {
        echo "<p>Your submission was accepted. Please take your computer to the tech shop for repair</p>";
    }
    else
    {
        echo "Error! Submission failed.";
        echo mysqli_error($cnxn);
    }
?>

<!DOCTYPE>
    <html>
        <head>
            <title>Green River Repair Shop</title>
            
            <!-- CSS libraries -->
            <link rel = "stylesheet" href = "css/RepairShop.css">
        </head>
        
        <body>
            <p>
                <b>Name: </b> <?php $first_name ?> <?php $last_name ?><br>
                <b>Green River ID: </b> <?php $greenriver_id ?><br>
                <b>Email: </b> <?php $email ?><br>
                <b>Phone number: </b> <?php $phone_number ?> <br>
                <b>Computer Language English? </b> <?php $comp_lang ?> <br>
                <b>Computer username: </b> <?php $username ?><br>
                <b>Computer password: </b> <?php $password ?><br>
                <b>C-cleaner removed?</b> <?php $c_cleaner ?><br>
                <b>Initials for C-cleaner: </b> <?php $c_initials ?><br>
            </p>
            <p>
                <b>Computer Issues:</b>
            </p>
        </body>
    </html>