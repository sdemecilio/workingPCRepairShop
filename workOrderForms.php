<?php
//including db connection
include 'workCon.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>PC Repair Shop Work Order</title>
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
                    <header class="major">
                        <h2>Work Order</h2>
                    </header>

                    <!--Creating the work order form-->
                    <form id = "community_form" method = "post" action = "">
                        <!-- Customer information for work order -->
                        <fieldset id="customerInfo">
                            <legend><strong>Customer Information</strong></legend><br>
                            <p>Are you a Green River student or faculty member?</p>
                                <label><input type = "radio" id = "student_faculty_yes" name = "student_faculty" value="yes" <?php if (isset($_POST['student_faculty']) && $_POST['student_faculty']=='yes') {echo 'checked="checked"';}?> onclick="showHideGRCID()">Yes</label> 
                                
                        <label><input type = "radio" id = "student_faculty_no" name = "student_faculty" value="no" <?php if (isset($_POST['student_faculty']) && $_POST['student_faculty']=='no') {echo 'checked="checked"';}?> onclick="showHideGRCID()">No</label>
                            <div style="color: red"><p><?php if(isset($errors['student_facultyErr'])) echo $errors['student_facultyErr']; ?></p></div>
                            

                            <p> 
                            <label id="firstN" for="first_name">First name:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "first_name" id = "first_name" value= "<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                                            &nbsp;&nbsp;
                            <div style="color: red"><p><?php if(isset($errors['first_nameErr'])) echo $errors['first_nameErr']; ?></p></div>
                            
                            <label id="lastN" for="last_name">Last name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "last_name" id = "last_name" value= "<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                                    &nbsp;&nbsp;
                            <div style="color: red"><p><?php if(isset($errors['last_nameErr'])) echo $errors['last_nameErr']; ?></p></div>
                            
                            <label id="grcID" for="greenriverID">Green River ID:</label> <input type = "text" name = "greenriverID" id = "greenriverID" value= "<?php if(isset($_POST['greenriverID'])) echo $_POST['greenriverID']; ?>">
                            <div style="color: red"><p><?php if(isset($errors['greenriverIDErr'])) echo $errors['greenriverIDErr']; ?></p></div>
                            </p>

                            <p>
                            <label id="emails" for="email">Email:</label> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "email" id = "email" value= "<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                            &nbsp;&nbsp;
                            <div style="color: red"><p><?php if(isset($errors['emailErr'])) echo $errors['emailErr']; ?></p></div>
                           
                            <label id="phoneN" for="phone_number">Phone number: </label><input type = "text" name = "phone_number" id = "phone_number" value= "<?php if(isset($_POST['phone_number'])) echo $_POST['phone_number']; ?>">
                            <div style="color: red"><p><?php if(isset($errors['phone_numberErr'])) echo $errors['phone_numberErr']; ?></p></div>
                            </p>
                        </fieldset>
                        <br>

                        <!-- Computer information for work order -->
                        <fieldset id="computerInfo">
                            <legend><strong>Computer Information</strong></legend><br>
                            <p>What language is your computer set to?
                            <input type = "text" name = "computer_language" id = "comp_language">
                            &nbsp;&nbsp;
                            <div style="color: red"><p><?php if(isset($errors['comp_lanaguageError'])) echo $errors['comp_lanaguageError']; ?></p></div>
                            </p>
                            <p>
                            <label id="user" for="username">Username:</label> <input type = "text" name = "computer_username" id = "computer_username" value= "<?php if(isset($_POST['computer_username'])) echo $_POST['computer_username']; ?>">
                                &nbsp;&nbsp;
                            <div style="color: red"><p><?php if(isset($errors['computer_usernameErr'])) echo $errors['computer_usernameErr']; ?></p></div>
                           
                            <label id="password" for="computer_password">Password:</label> <input type = "password" name = "computer_password" id = "computer_password" value= "<?php if(isset($_POST['computer_password'])) echo $_POST['computer_password']; ?>">
                            <div style="color: red"><p><?php if(isset($errors['computer_passwordErr'])) echo $errors['computer_passwordErr']; ?></p></div>
                            </p>
                            <p>
                                <b>CCleaner:</b> is a freeware system optimization, privacy and cleaning tool that we will install and run on your computer during our mainteance/tune-up activities. It removes unused files from your system allowing Windows to run faster and free up valuable hard disk space. <br>
                                You may already have preferred software with similar functionality installed and not need CCleaner. However, if you do not already have a similar program, we recommend you KEEP and periodically run this to keep your machine well-maintained. <br>
                                When we have completed maintenance, do you want CCleaner removed from your computer?
                                <label><input type = "radio" name = "ccleaner" id = "ccleaner_yes" value="yes" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='yes') {echo 'checked="checked"';}?>>Yes</label>
                                <label><input type = "radio" name = "ccleaner" id = "ccleaner_no" value="no" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='no') {echo 'checked="checked"';}?>>No</label>
                            <div style="color: red"><p><?php if(isset($errors['ccleanerErr'])) echo $errors['ccleanerErr']; ?></p></div>
                            <br>
                            <b>Customer Initials: </b> <input type = "text" name = "customer_initials" id = "customer_initials" value= "<?php if(isset($_POST['customer_initials'])) echo $_POST['customer_initials']; ?>">
                            <div style="color: red"><p><?php if(isset($errors['customer_initialsErr'])) echo $errors['customer_initialsErr']; ?></p></div>
                            </p>
                        </fieldset>
                        <br>

                        <!-- Issues with computer, user will check all that apply -->
                        <p>Type of Issues <br>
                        <label><input type = "checkbox" name = "issues[]" value = "AC Adapter">AC Adapter</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Keyboard">Keyboard</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Heat Sink">Heat Sink</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Fan">Fan</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Screen">Screen</label>
                        <label><input type = "checkbox" name = "issues[]" value = "CPU">CPU</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Optical Drive">Optical Drive</label>
                        <label><input type = "checkbox" name = "issues[]" value = "RAM">RAM</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Touch Pad">Touch Pad</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Data Recovery">Data Recover</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Malware">Malware</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Hard Drive">Hard Drive</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Operating System">Operating System</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Mother Board">Mother Board</label>
                        <label><input type = "checkbox" name = "issues[]" value = "Software">Software</label>
                        <label><input type ="checkbox" name = "issues[]" value = "Other-" id = "other">Other</label>
                        <input type = "text" name = "issues[]" id = "other_text" placeholder = "Please explain your problem">

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

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/WorkOrder.js"></script>
</body>
</html>