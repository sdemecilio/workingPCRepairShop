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
include 'workCon.php';
//include 'menu.php';
  
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {

      //not empty
        $errors = array();
        $issues="";
        $valid=true;
            //start validation
            if(empty($_POST['first_name'])){
                
                $errors['first_name1'] = "Your First name cannot be empty";
                $valid=false;
            }
            
             if(empty($_POST['last_name'])){
                
                $errors['last_name1'] = "Your Last name cannot be empty";
                $valid=false;
            }
            
             if(empty($_POST['email'])){
                
                $errors['email1'] = "Your email cannot be empty";
                $valid=false;
            }
            
             if(empty($_POST['greenriverID'])){
                
                $errors['greenriverID1'] = "Your Green River ID cannot be empty";
                $valid=false;
            }
             if(empty($_POST['phone_number'])){
                
                $errors['phone_number1'] = "Your phone number cannot be empty";
                $valid=false;
            }
             if(empty($_POST['computer_username'])){
                
                $errors['computer_username1'] = "Your username cannot be empty";
                $valid=false;
            }
             if(empty($_POST['computer_password'])){
                
                $errors['computer_password1'] = "Your password cannot be empty";
                $valid=false;
            }
            
            if(empty($_POST['customer_initials'])){
               
                $errors['customer_initials1']="Please enter your initials";
                $valid=false;
            }
             if(empty($_POST['computer_language'])){
                
                $errors['computer_language1'] = "Enter yes or no";
                $valid=false;
            } else{
               $compLang=($_POST['computer_language']);
            }
            if(empty($_POST['ccleaner'])){
                
                $errors['ccleaner1'] = "Enter yes or no";
                $valid=false;
            } else{
               $compLang=($_POST['ccleaner']);
            }
            if(empty($_POST['student_faculty'])){
                
                $errors['student_faculty1'] = "Enter yes or no";
                $valid=false;
            } else{
               $compLang=($_POST['student_faculty']);
            }
            
            if(isset($_POST['issues'])){
               if(!empty($_POST['issues'])){
                  $issues=$_POST['issues'];
               }else{
                  echo "Select all that apply";
                
                  }
           
            }
           
         //   //print_r($_POST);
         ////   //check errors
          if($valid){
         //     //redirect to work order form
           header("Location: success.php");
          exit();
         }
   }


/**
    The MIT License (MIT)

    Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Green River Repair Shop</title>

        <!-- CSS libraries -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel = "stylesheet" href = "policy.css">

    </head>

    <body>
        <p class = "title">Work Order</p>
        <hr>
        
        <form id = "community_form" method = "post" action = "">
            <!-- Customer information for work order -->
            <fieldset>
                <legend>Customer Information</legend>
                <div class = "requiredFields">* From must be completely filled out</div>
                <p>Are you a Green River student or faculty memeber? &nbsp;&nbsp;
                <input type = "radio" id = "student_faculty" name = "student_faculty" value="yes" <?php if (isset($_POST['student_faculty']) && $_POST['student_faculty']=='yes') {echo 'checked="checked"';}?> >Yes &nbsp;
                <input type = "radio" id = "student_faculty1" name = "student_faculty" value="no" <?php if (isset($_POST['student_faculty']) && $_POST['student_faculty']=='no') {echo 'checked="checked"';}?> >No 
                <div style="color: red"<p><?php if(isset($errors['student_faculty1'])) echo $errors['student_faculty1']; ?></p></div>
                </p>
                
                <p>First name: <input type = "text" name = "first_name" id = "first_name" value= "<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                    &nbsp;&nbsp;
                    <div style="color: red"<p><?php if(isset($errors['first_name1'])) echo $errors['first_name1']; ?></p></div>
                    Last name: <input type = "text" name = "last_name" id = "last_name" value= "<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                     &nbsp;&nbsp;
                    <div style="color: red"<p><?php if(isset($errors['last_name1'])) echo $errors['last_name1']; ?></p></div>
                    Green River ID: <input type = "text" name = "greenriverID" id = "greenriverID" value= "<?php if(isset($_POST['greenriverID'])) echo $_POST['greenriverID']; ?>">
                    <div style="color: red"<p><?php if(isset($errors['greenriverID1'])) echo $errors['greenriverID1']; ?></p></div>
                </p>
                
                  <p>Email: <input type = "text" name = "email" id = "email" value= "<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                  &nbsp;&nbsp;
                  <div style="color: red"<p><?php if(isset($errors['email1'])) echo $errors['email1']; ?></p></div>
                    Phone number: <input type = "text" name = "phone_number" id = "phone_number" value= "<?php if(isset($_POST['phone_number'])) echo $_POST['phone_number']; ?>">
                  <div style="color: red"<p><?php if(isset($errors['phone_number1'])) echo $errors['phone_number1']; ?></p></div>
                </p>
            </fieldset>
            <br>
            
            <!-- Computer information for work order -->
            <fieldset>
                <legend>Computer Information</legend>
                <p>Is your computer language English?
                    <input type = "radio" name = "computer_language" id = "computer_language" value="yes" <?php if (isset($_POST['computer_language']) && $_POST['computer_language']=='yes') {echo 'checked="checked"';}?> >Yes
                    <input type = "radio" name = "computer_language" id = "computer_language" value="no" <?php if (isset($_POST['computer_language']) && $_POST['computer_language']=='no') {echo 'checked="checked"';}?> >No
                    <div style="color: red"<p><?php if(isset($errors['computer_language1'])) echo $errors['computer_language1']; ?></p></div>
                </p>
                <p>Username: <input type = "text" name = "computer_username" id = "computer_username" value= "<?php if(isset($_POST['computer_username'])) echo $_POST['computer_username']; ?>">
                    &nbsp;&nbsp;
                    <div style="color: red"<p><?php if(isset($errors['computer_username1'])) echo $errors['computer_username1']; ?></p></div>
                    Password: <input type = "text" name = "computer_password" id = "computer_password" value= "<?php if(isset($_POST['computer_password'])) echo $_POST['computer_password']; ?>">
                    <div style="color: red"<p><?php if(isset($errors['computer_password1'])) echo $errors['computer_password1']; ?></p></div>
                </p>
                <p>
                    <b>CCleaner:</b> is a freeware system optimization, privacy and cleaning tool. It removes unused files from you system allowing Windoes to run faster and freeing up valuable hard disk space. <br>
                    Do you want CCleaner removed from your Computer?
                    <input type = "radio" name = "ccleaner" id = "ccleaner" value="yes" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='yes') {echo 'checked="checked"';}?>>Yes
                    <input type = "radio" name = "ccleaner" id = "ccleaner" value="no" <?php if (isset($_POST['ccleaner']) && $_POST['ccleaner']=='no') {echo 'checked="checked"';}?>>No
                    <div style="color: red"<p><?php if(isset($errors['ccleaner1'])) echo $errors['ccleaner1']; ?></p></div>
                    <br>
                    <b>Customer Initials: </b> <input type = "text" name = "customer_initials" id = "customer_initials" value= "<?php if(isset($_POST['customer_initials'])) echo $_POST['customer_initials']; ?>">
                    <div style="color: red"<p><?php if(isset($errors['customer_initials1'])) echo $errors['customer_initials1']; ?></p></div>
                </p>
            </fieldset>
            <br>
            
            <!-- Issues with computer, user will check all that apply -->
            <?php
            echo '<fieldset>';
              echo '<legend>Types of Issues</legend>';
             $checkbox_elements = array(
                       'Ac Adapter' => array(
                         'content' => '&nbsp Ac Adapter'
                       ),
                       'Keyboard' => array(
                         'content' => '&nbsp Keyboard'
                       ),
                       'Heat Sink' => array(
                         'content' => '&nbsp Heat Sink'
                       ),
                       'Screen' => array(
                         'content' => '&nbsp Screen'
                       ),
                       'CPU' => array(
                         'content' => '&nbsp CPU'
                       ),
                       'Fan' => array(
                         'content' => '&nbsp Fan'
                       ),
                       
                       'Optical Drive' => array(
                         'content' => '&nbsp Optical Drive'
                       ),
                       'Ram' => array(
                         'content' => '&nbsp Ram'
                       ),
                       'Touch Pad' => array(
                         'content' => '&nbsp Touch Pad'
                       ),
                       'Data Recovery' => array(
                         'content' => '&nbsp Data Recovery'
                       ),
                       'Hard Drive' => array(
                         'content' => '&nbsp Hard Drive'
                       ),
                       'Operating System' => array(
                         'content' => '&nbsp Operating System'
                       ),
                       'System Board' => array(
                         'content' => '&nbsp System Board'
                       ),
                       'Malware' => array(
                         'content' => '&nbsp Malware'
                       ),
                       'Software' => array(
                         'content' => '&nbsp Software:<input type="text"<br>'
                       ),
                       'Other' => array(
                         'content' => '&nbsp Other: <input type="text"<br>'
                       )
                       
                       
                     );
            
            foreach ($checkbox_elements as $key => $value) {
            echo '<input type="checkbox" name="issues['.$key.']" id="issues'.$key.'" value="'.$key.'" '.((!empty($issues[$key])) ? 'checked' : '').'><label>'.$value['content'].'</label><br>';
            
            echo '</fieldset>';
            }
            ?>
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
       


    <!-- including the jquery library from the jquery website -->
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--    <script src = "../dependencies/js/workOrder.js"></script>-->
     <script src = "javascript/CWorkOrder.js"></script>
    </body>
</html>
