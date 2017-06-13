<?php
  include 'updateCon.php';

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
<!--including db connection-->
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
                    <h2>Update Work Order</h2>
                </header>

<!--Creating the policy form-->
<form id = "community_form" method = "post" action = "">
            <!-- Customer information for work order -->
            <fieldset>
                <legend>Customer Information</legend><br>
                <p>Are you a Green River student or faculty member? &nbsp;&nbsp;
                <input type = "radio" id = "student_faculty" name = "student_faculty" value="yes" <?php ?> ><label for = "student_faculty">Yes</label> &nbsp;
                <input type = "radio" id = "student_facultyNo" name = "student_faculty" value="no" <?php if (isset($_POST['student_faculty']) && $_POST['student_faculty']=='no') {echo 'checked="checked"';}?> ><label for = "student_facultyNo">No</label>
                <div style="color: red"<p><?php if(isset($errors['student_facultyErr'])) echo $errors['student_facultyErr']; ?></p></div>
                </p>
                
                <p>First name: <input type = "text" name = "first_name" id = "first_name" value= "<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                    &nbsp;&nbsp;
                    <div style="color: red"<p><?php if(isset($errors['first_nameErr'])) echo $errors['first_nameErr']; ?></p></div>
                    Last name: <input type = "text" name = "last_name" id = "last_name" value= "<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                     &nbsp;&nbsp;
                    <div style="color: red"<p><?php if(isset($errors['last_nameErr'])) echo $errors['last_nameErr']; ?></p></div>
                    Green River ID: <input type = "text" name = "greenriverID" id = "greenriverID" value= "<?php if(isset($_POST['greenriverID'])) echo $_POST['greenriverID']; ?>">
                    <div style="color: red"<p><?php if(isset($errors['greenriverIDErr'])) echo $errors['greenriverIDErr']; ?></p></div>
                </p>
                
                  <p>Email: <input type = "text" name = "email" id = "email" value= "<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                  &nbsp;&nbsp;
                  <div style="color: red"<p><?php if(isset($errors['emailErr'])) echo $errors['emailErr']; ?></p></div>
                    Phone number: <input type = "text" name = "phone_number" id = "phone_number" value= "<?php if(isset($_POST['phone_number'])) echo $_POST['phone_number']; ?>">
                  <div style="color: red"<p><?php if(isset($errors['phone_numberErr'])) echo $errors['phone_numberErr']; ?></p></div>
                </p>
            </fieldset>
            <br>
            
            <!-- Computer information for work order -->
            <fieldset>
                <legend>Computer Information</legend><br>
                <p>Is your computer language English?
                    <input type = "radio" name = "computer_language" id = "computer_language" value="yes" <?php if (isset($_POST['computer_language']) && $_POST['computer_language']=='yes') {echo 'checked="checked"';}?> ><label for = "computer_language">Yes</label>
                    <input type = "radio" name = "computer_language" id = "computer_languageNo" value="no" <?php if (isset($_POST['computer_language']) && $_POST['computer_language']=='no') {echo 'checked="checked"';}?> ><label for = "computer_languageNo">no</label>
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
                    <input type = "radio" name = "ccleaner" id = "ccleaner" value="yes" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='yes') {echo 'checked="checked"';}?>><label for = "ccleaner">Yes</label>
                    <input type = "radio" name = "ccleaner" id = "ccleanerNo" value="no" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='no') {echo 'checked="checked"';}?>><label for = "ccleaner">No</label>
                    <div style="color: red"<p><?php if(isset($errors['ccleanerErr'])) echo $errors['ccleanerErr']; ?></p></div>
                    <br>
                    <b>Customer Initials: </b> <input type = "text" name = "customer_initials" id = "customer_initials" value= "<?php if(isset($_POST['customer_initials'])) echo $_POST['customer_initials']; ?>">
                    <div style="color: red"<p><?php if(isset($errors['customer_initialsErr'])) echo $errors['customer_initialsErr']; ?></p></div>
                </p>
            </fieldset>
            <br>
            <!--<fieldset>
                <legend>Types of Issues</legend>
                
                <input type = "checkbox" name = "issues[]"  value = "acAdapter">AC Adapter<br>
                <input type = "checkbox" name = "issues[]"  value = "keyboard">>Keyboard<br>
                <input type = "checkbox" name = "issues[]"  value = "heatSink">Heat Sink<br>
                <input type = "checkbox" name = "issues[]"  value = "screen" >Screen<br>
                <input type = "checkbox" name = "issues[]"  value = "cpu">CPU<br>
                <input type = "checkbox" name = "issues[]"  value = "fan"<?php if (isset($_POST['issues']) && $_POST['issues']=='fan') {echo "selected";}?>>Fan<br>
                <input type = "checkbox" name = "issues[]"  value = "opDrive"<?php if (isset($_POST['issues']) && $_POST['issues']=='opDrive') {echo  "selected";}?>>Optical Drive (CD/DVD Rom)<br>
                <input type = "checkbox" name = "issues[]"  value = "ram"<?php if (isset($_POST['issues']) && $_POST['issues']=='ram') {echo "selected";}?>>Ram<br>
                <input type = "checkbox" name = "issues[]"  value = "touchPad"<?php if (isset($_POST['issues']) && $_POST['issues']=='touchPad') {echo  "selected";}?>>Touch Pad<br>
                <input type = "checkbox" name = "issues[]"  value = "dataRecovery"<?php if (isset($_POST['issues']) && $_POST['issues']=='dataRecovery') {echo  "selected";}?>>Data Recovery<br>
                <input type = "checkbox" name = "issues[]"  value = "hardDrive"<?php if (isset($_POST['issues']) && $_POST['issues']=='hardDrive') {echo  "selected";}?>>Hard Drive<br>
                <input type = "checkbox" name = "issues[]"  value = "opSystem"<?php if (isset($_POST['issues']) && $_POST['issues']=='opSystem') {echo  "selected";}?>>Operating System<br>
                <input type = "checkbox" name = "issues[]"  value = "systemBoard"<?php if (isset($_POST['issues']) && $_POST['issues']=='systemBoard') {echo "selected";}?>>System Board<br>
                <input type = "checkbox" name = "issues[]"  value = "malware"<?php if (isset($_POST['issues']) && $_POST['issues']=='malware') {echo  "selected";}?>>Malware<br>
                <input type = "checkbox" name = "issues[]"  value = "software">Software: <input type = "text" name = "issues" id = "software"<?php if (isset($_POST['issues']) && $_POST['issues']=='software') {echo  "selected";}?>> <br>
                <input type = "checkbox" name = "issues[]"  value = "other">Other: <input type = "text" name = "issues" id = "other" <?php if (isset($_POST['issues']) && $_POST['issues']=='other') {echo "selected";}?>> 
                <p><?php if(isset($errors['issues1'])) echo $errors['issues1']; ?></p>

            </fieldset>
             <br>-->

            <p>
                <input type = "submit" name = "submit" value = "Submit form" id = "submit">
            </p>
        </form>
</div>

</div>
</section>

</div>

<!-- Footer -->
<footer id="footer">
    </section>
    <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
</footer>

</div>


</body>
</html>
