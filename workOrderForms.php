<?php
//including db connection
include 'workCon.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <link rel = "stylesheet" href = "css/background.css">
    
</head>

<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">

    </header>

    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Work Order</h2>
                    </header>

                    <!--Creating the work order form-->
                    <form id = "community_form" method = "post" action = "">
                        <!-- Customer information for work order -->
                        <fieldset>
                            <legend>Customer Information</legend>
                            <div class = "requiredFields">* From must be completely filled out</div>
                            <p>Are you a Green River student or faculty member? &nbsp;&nbsp;
                                <input type = "radio" id = "student_faculty" name = "student_faculty" value="yes" <?php if (isset($_POST['student_faculty']) && $_POST['student_faculty']=='yes') {echo 'checked="checked"';}?> >Yes &nbsp;
                                <input type = "radio" id = "student_faculty" name = "student_faculty" value="no" <?php if (isset($_POST['student_faculty']) && $_POST['student_faculty']=='no') {echo 'checked="checked"';}?> >No
                            <div style="color: red"<p><?php if(isset($errors['student_facultyErr'])) echo $errors['student_facultyErr']; ?></p></div>
                            </p>

                            <p>First name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "first_name" id = "first_name" value= "<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                                            &nbsp;&nbsp;
                            <div style="color: red"<p><?php if(isset($errors['first_nameErr'])) echo $errors['first_nameErr']; ?></p></div>
                            Last name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "last_name" id = "last_name" value= "<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                                    &nbsp;&nbsp;
                            <div style="color: red"<p><?php if(isset($errors['last_nameErr'])) echo $errors['last_nameErr']; ?></p></div>
                            Green River ID: <input type = "text" name = "greenriverID" id = "greenriverID" value= "<?php if(isset($_POST['greenriverID'])) echo $_POST['greenriverID']; ?>">
                            <div style="color: red"<p><?php if(isset($errors['greenriverIDErr'])) echo $errors['greenriverIDErr']; ?></p></div>
                            </p>

                            <p>Email: &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "email" id = "email" value= "<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                            &nbsp;&nbsp;
                            <div style="color: red"<p><?php if(isset($errors['emailErr'])) echo $errors['emailErr']; ?></p></div>
                            Phone number: <input type = "text" name = "phone_number" id = "phone_number" value= "<?php if(isset($_POST['phone_number'])) echo $_POST['phone_number']; ?>">
                            <div style="color: red"<p><?php if(isset($errors['phone_numberErr'])) echo $errors['phone_numberErr']; ?></p></div>
                            </p>
                        </fieldset>
                        <br>

                        <!-- Computer information for work order -->
                        <fieldset>
                            <legend>Computer Information</legend>
                            <p>Is your computer language English?
                                <input type = "radio" name = "computer_language" id = "computer_language" value="yes" <?php if (isset($_POST['computer_language']) && $_POST['computer_language']=='yes') {echo 'checked="checked"';}?> >Yes
                                <input type = "radio" name = "computer_language" id = "computer_language" value="no" <?php if (isset($_POST['computer_language']) && $_POST['computer_language']=='no') {echo 'checked="checked"';}?> >No
                            <div style="color: red"<p><?php if(isset($errors['computer_languageErr'])) echo $errors['computer_languageErr']; ?></p></div>
                            </p>
                            <p>Username: <input type = "text" name = "computer_username" id = "computer_username" value= "<?php if(isset($_POST['computer_username'])) echo $_POST['computer_username']; ?>">
                                &nbsp;&nbsp;
                            <div style="color: red"<p><?php if(isset($errors['computer_usernameErr'])) echo $errors['computer_usernameErr']; ?></p></div>
                            Password: <input type = "text" name = "computer_password" id = "computer_password" value= "<?php if(isset($_POST['computer_password'])) echo $_POST['computer_password']; ?>">
                            <div style="color: red"<p><?php if(isset($errors['computer_passwordErr'])) echo $errors['computer_passwordErr']; ?></p></div>
                            </p>
                            <p>
                                <b>CCleaner:</b> is a freeware system optimization, privacy and cleaning tool. It removes unused files from you system allowing Windoes to run faster and freeing up valuable hard disk space. <br>
                                Do you want CCleaner removed from your Computer?
                                <input type = "radio" name = "ccleaner" id = "ccleaner" value="yes" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='yes') {echo 'checked="checked"';}?>>Yes
                                <input type = "radio" name = "ccleaner" id = "ccleaner" value="no" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='no') {echo 'checked="checked"';}?>>No
                            <div style="color: red"<p><?php if(isset($errors['ccleanerErr'])) echo $errors['ccleanerErr']; ?></p></div>
                            <br>
                            <b>Customer Initials: </b> <input type = "text" name = "customer_initials" id = "customer_initials" value= "<?php if(isset($_POST['customer_initials'])) echo $_POST['customer_initials']; ?>">
                            <div style="color: red"<p><?php if(isset($errors['customer_initialsErr'])) echo $errors['customer_initialsErr']; ?></p></div>
                            </p>
                        </fieldset>
                        <br>

                        <!-- Issues with computer, user will check all that apply -->
                        <?php
                        echo '<fieldset>';
                        echo '<legend>Types of Issues</legend>';


                        //issues displayed in an array
                        $checkbox_elements = array("AC Adapter", "Keyboard", "Heat Sink","Fan","Screen", "CPU","Optical Drive", "Ram", "Touch Pad", "Data Recovery","Malware", "Hard Drive", "Operating System", "System Board", "Software","Other");


                        foreach ($checkbox_elements as $item) {
                            echo "<input type='checkbox' name='issues[$item]' value='$item'> $item<br>";
                        }

                        ?>

                        <p>
                            <input type = "submit" name = "submit" value = "Submit form" id = "submit">
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </div>
<div>
    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; 2017 Team SAS</a>.</p>
    </footer>
</div>
</body>
</html>