<?php
  include 'policyCon.php';
  if($_SERVER["REQUEST_METHOD"] == "POST")
   {
    
      //not empty
        $errors = array();
        $valid =true;
        
            //start validation
            if(empty($_POST['privacy'])){
                
                $errors['initial1'] = "Your initials cannot be empty";
                $valid= false;
            }
            
             if(empty($_POST['security'])){
                
                $errors['initial2'] = "Your initials cannot be empty";
                $valid=false;
            }
            
             if(empty($_POST['repair'])){
                
                $errors['initial3'] = "Your initials cannot be empty";
                  $valid=false;
            }
            
             if(empty($_POST['payment'])){
                
                $errors['initial4'] = "Your initials cannot be empty";
                  $valid=false;
            }
             if(empty($_POST['refund'])){
                
                $errors['initial5'] = "Your initials cannot be empty";
                  $valid=false;
            }
             if(empty($_POST['backup'])){
                
                $errors['initial7'] = "Your initials cannot be empty";
                  $valid=false;
            }
             if(empty($_POST['abandoned'])){
                
                $errors['initial6'] = "Your initials cannot be empty";
                  $valid=false;
            }
    
            if(empty($_POST['payment_amount'])){
                
                $errors['payment_amount']="Please enter the amount you wish to pay";
                  $valid=false;
            }
             if(empty($_POST['software'])){
                
                $errors['initial8'] = "Your initials cannot be empty";
                  $valid=false;
            }
  
            if($valid){
    header("Location: workOrderForms.php");
    exit;
    }
   }       

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="policy.css">
</head>

<body>
<!--including db connection-->



<!--Creating the policy form-->
<form name="policy" method="post" action="" >

    <p class="title">Policy</p>

    <h4>Privacy Policy</h4>
    <p>The staff of Green River PC Repair Shop will exercise due care to secure your personal information/computer data. We do not sell, trade, or transfer to outside parties any of your personal information or computer data.</p>
    <input type="text" name="privacy" value= "<?php if(isset($_POST['privacy'])) echo $_POST['privacy']; ?>" placeholder="Initial">
    <div style="color: red"<p><?php if(isset($errors['initial1'])) echo $errors['initial1']; ?></p></div>

    <h4>Security  Policy</h4>
    <p>The staff of Green River PC Repair Shop will do everything within our power to secure your personal property.We do not sell, trade, or transfer to outside parties any of the equipment you bring in for repair.</p>
    <input type="text" name="security" value= "<?php if(isset($_POST['security'])) echo $_POST['security']; ?>"  placeholder="Initial">
    <div style="color: red"<p><?php if(isset($errors['initial2'])) echo $errors['initial2']; ?></p></div>

    <h4>Repair Policy</h4>
    <p>
        <strong> A) </strong> The staff of Green River PC Repair Shop will do everything within our abilities to repair your equipment, however not all computer equipment can be repaired at this location. We are a student run facility and have limited access to diagnostic/repair equipment. If we cannot repair a computer, we will give a full explanation of the situation and provide information detailing our findings. <br>
        <strong> B) </strong> We do not have the ability to order computer parts/software if required for a repair. We are happy to provide you with the information needed to purchase computer parts/ software for your computer. We are willing to install the computer parts/software you provide at no further cost to you.<br>
        <strong> C) </strong>  The staff of Green River PC Repair Shop is not liable for any voided warranties that may arise as a result of any work done on any equipment brought into the shop for repair.<br>
        <strong> D) </strong>  The services provided by the Green River PC Repair Shop are intended for individual and owners of the equipment to be repaired.<br>
        All repairs are done on a first come, first served basis. The staff of the Green River PC Repair Shop cannot guarantee or accommodate a specific date/time for completion of repairs.  </p>

    <input type="text" name="repair"  value= "<?php if(isset($_POST['repair'])) echo $_POST['repair']; ?>"   placeholder="Initial">
    <div style="color: red" <p><?php if(isset($errors['initial3'])) echo $errors['initial3']; ?></p></div>


    <h4>Payment Policy</h4>
    <p>Payment is <strong> a suggested donation </strong> and is not required before any work will be done on equipment. The suggested donation pays for our time spent searching, troubleshooting, and diagnosing computer problems. A further fee is not charged for any repairs we are able to complete.</p>
    <input type="text" name="payment"  value= "<?php if(isset($_POST['payment'])) echo $_POST['payment']; ?>"   placeholder="Initial">
    <div style="color: red"<p><?php if(isset($errors['initial4'])) echo $errors['initial4']; ?></p></div>
    <input type="text" name="payment_amount" value= "<?php if(isset($_POST['payment_amount'])) echo $_POST['payment_amount']; ?>"  placeholder="Amount to pay">
    <div style="color: red"<p><?php if(isset($errors['payment_amount'])) echo $errors['payment_amount']; ?></p></div>


    <h4>Refund Policy</h4>
    <p>The suggested donation is a non-refundable fee to investigate computer problems.</p>
    <input type="text" name="refund" value= "<?php if(isset($_POST['refund'])) echo $_POST['refund']; ?>"  placeholder="Initial">
    <div style="color: red"<p><?php if(isset($errors['initial5'])) echo $errors['initial5']; ?></p></div>

    <h4>Abandoned Property</h4>
    <p>Upon completion of work, Green River PC Repair Shop will contact the owner of the equipment. If equipment is not picked up within 90 days after this phone call, all equipment will be considered abandoned, and must be recycled. Green River PC Repair Shop will make due effort to ensure you are contacted when your equipment has been repaired.</p>
    <input type="text" name="abandoned" value= "<?php if(isset($_POST['abandoned'])) echo $_POST['abandoned']; ?>" placeholder="Initial">
    <div style="color: red"<p><?php if(isset($errors['initial6'])) echo $errors['initial6']; ?></p></div>

    <h4>Backup Policy</h4>
    <p>In order to do backups of your files the Green River PC Repair Shop will need you to supply the storage media needed.<br>
        Example: An external Hard Drive</p>
    <input type="text" name="backup" value= "<?php if(isset($_POST['backup'])) echo $_POST['backup']; ?>"  placeholder="Initial">
    <div style="color: red"<p><?php if(isset($errors['initial7'])) echo $errors['initial7']; ?></p></div>

    <h4>Software Policy(newly added)</h4>
    <p>The Green River PC Repair Shop will only work on legitimate installations of Windows operating system. Any computer found to have an illegitimate copy of Windows operating system will be return immediately without and further repair.</p>
    <input type="text" name="software" value= "<?php if(isset($_POST['software'])) echo $_POST['software']; ?>"  placeholder="Initial">
    <div style="color: red"<p><?php if(isset($errors['initial8'])) echo $errors['initial8']; ?></p></div>
    <br><br>

    <input type="submit" name="submit" class="submit" value="Submit">
</form>

<!--js plugin for the form-->
<!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<!--<script type="text/javascript" src="policy.js"></script>-->

</body>
</html>
