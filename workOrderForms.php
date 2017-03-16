<?php
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


<!-- Used only internally-->
<!--          <fieldset>
              <legend>Office Use Only</legend>
              <p>
                  Date Received: <br>
                  Receiving Technician: <br>
                  Receipt Number: <br>
                  PC S/N: <br>
                  Manufacturer: <br>
                  Model: <br>
                  Operating System: <br>
                  OS Key: <br>
                  <b>Ledger Initialed at drop off? YES / NO</b> <br>
                  <b>Ledger Initialed at pickup? YES / NO</b> <br>
              </p>
              <p>
                  Date Work Started: <br>
                  Date Work Finished: <br>
              </p>
          </fieldset>

          <br>

          <fieldset>
              <legend>Work Order</legend>
                  <b>Grand total (without taxes): $</b>
          </fieldset>

          <!-- Acknowledgements and Agreements -->
<!-- <p class = "heading">RELEASE AND HOLD HARMLESS AGREEMENT</p>
<p>
    The Green River PC Repair Shop will not be held liable for ANY services performed on ANY equipment received by the Party or Parties below. Further, if we are       unable to repair any equipment received, the Green River PC Repair Shop or its members, will not be responsible for replacing hardware, software, or information lost or damaged during diagnostics of, and or repairing of the equipment received from any intended parties.
</p>

<p class = "heading">ACKNOWLEDGEMENT OF RISK</p>
<p>I, ___________________________________, acknowledge that I have read the above statements and definitions, and hereby indemnify and hold harmless, Green River PC Repair Shop, and its students or advisors from any liability arising from accident, theft, or damages to all equipment and property. I have received a copy of Green River PC Repair Shop's Policies and will adhere to them strictly. This agreement shall continue for each and every visit to Green River PC Repair Shop's property.</p>
<p>The terms of this release form shall be constructed as the entire agreement and may not be altered, amended, or modified except in writing and signed by both parties. The terms of this release shall be governed by the laws of the State of Washington.</p>
<p>
    <b>Customer Signature:____________________________________________ &nbsp;&nbsp;
        Date:_______________________________</b>
</p>-->

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
<!--js plugin for the form-->
<!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<!--<script type="text/javascript" src="policy.js"></script>-->

</body>
</html>