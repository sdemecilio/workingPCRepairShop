<?php
  //include policyCon.php
  include 'policyCon.php';

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
                            <h2>Policies</h2>
                        </header>
        
                            <!--Creating the policy form-->
                            <form name="policy" method="post" action="" >
                                
                                <h4>Privacy Policy</h4>
                                <p>The staff of Green River PC Repair Shop will exercise due care to secure your personal information/computer data. We do not sell, trade, or transfer to outside parties any of your personal information or computer data.</p>
                                <input type="text" name="privacy" value= "<?php if(isset($_POST['privacy'])) echo $_POST['privacy']; ?>" placeholder="Initial">
                                <div style="color: red"<p><?php if(isset($errors['privacyErr'])) echo $errors['privacyErr']; ?></p></div>
                                <hr>
                            
                                <h4>Security  Policy</h4>
                                <p>The staff of Green River PC Repair Shop will do everything within our power to secure your personal property.We do not sell, trade, or transfer to outside parties any of the equipment you bring in for repair.</p>
                                <input type="text" name="security" value= "<?php if(isset($_POST['security'])) echo $_POST['security']; ?>"  placeholder="Initial">
                                <div style="color: red"<p><?php if(isset($errors['securityErr'])) echo $errors['securityErr']; ?></p></div>
                                <hr>

                                <h4>Repair Policy</h4>
                                <p>
                                    <strong> A) </strong> The staff of Green River PC Repair Shop will do everything within our abilities to repair your equipment, however not all computer equipment can be repaired at this location. We are a student run facility and have limited access to diagnostic/repair equipment. If we cannot repair a computer, we will give a full explanation of the situation and provide information detailing our findings. <br>
                                    <strong> B) </strong> We do not have the ability to order computer parts/software if required for a repair. We are happy to provide you with the information needed to purchase computer parts/ software for your computer. We are willing to install the computer parts/software you provide at no further cost to you.<br>
                                    <strong> C) </strong>  The staff of Green River PC Repair Shop is not liable for any voided warranties that may arise as a result of any work done on any equipment brought into the shop for repair.<br>
                                    <strong> D) </strong>  The services provided by the Green River PC Repair Shop are intended for individual and owners of the equipment to be repaired.<br>
                                    All repairs are done on a first come, first served basis. The staff of the Green River PC Repair Shop cannot guarantee or accommodate a specific date/time for completion of repairs.  </p>
                            
                                <input type="text" name="repair"  value= "<?php if(isset($_POST['repair'])) echo $_POST['repair']; ?>"   placeholder="Initial">
                                <div style="color: red" <p><?php if(isset($errors['repairErr'])) echo $errors['repairErr']; ?></p></div>
                                <hr>
                            
                                <h4>Payment Policy</h4>
                                <p>Payment is <strong> a suggested donation </strong> and is not required before any work will be done on equipment. The suggested donation pays for our time spent searching, troubleshooting, and diagnosing computer problems. A further fee is not charged for any repairs we are able to complete.</p>
                                <input type="text" name="payment"  value= "<?php if(isset($_POST['payment'])) echo $_POST['payment']; ?>"   placeholder="Initial">
                                <div style="color: red"<p><?php if(isset($errors['paymentErr'])) echo $errors['paymentErr']; ?></p></div>
                                <input type="text" name="payment_amount" value= "<?php if(isset($_POST['payment_amount'])) echo $_POST['payment_amount']; ?>"  placeholder="Amount to pay">
                                <div style="color: red"<p><?php if(isset($errors['payment_amountErr'])) echo $errors['payment_amountErr']; ?></p></div>
                                <hr>
                            
                                <h4>Refund Policy</h4>
                                <p>The suggested donation is a non-refundable fee to investigate computer problems.</p>
                                <input type="text" name="refund" value= "<?php if(isset($_POST['refund'])) echo $_POST['refund']; ?>"  placeholder="Initial">
                                <div style="color: red"<p><?php if(isset($errors['refundErr'])) echo $errors['refundErr']; ?></p></div>
                                <hr>

                                <h4>Abandoned Property</h4>
                                <p>Upon completion of work, Green River PC Repair Shop will contact the owner of the equipment. If equipment is not picked up within 90 days after this phone call, all equipment will be considered abandoned, and must be recycled. Green River PC Repair Shop will make due effort to ensure you are contacted when your equipment has been repaired.</p>
                                <input type="text" name="abandoned" value= "<?php if(isset($_POST['abandoned'])) echo $_POST['abandoned']; ?>" placeholder="Initial">
                                <div style="color: red"<p><?php if(isset($errors['abandonedErr'])) echo $errors['abandonedErr']; ?></p></div>
                                <hr>

                                <h4>Backup Policy</h4>
                                <p>In order to do backups of your files the Green River PC Repair Shop will need you to supply the storage media needed.<br>
                                    Example: An external Hard Drive</p>
                                <input type="text" name="backup" value= "<?php if(isset($_POST['backup'])) echo $_POST['backup']; ?>"  placeholder="Initial">
                                <div style="color: red"<p><?php if(isset($errors['backupErr'])) echo $errors['backupErr']; ?></p></div>
                                <hr>

                                <h4>Software Policy(newly added)</h4>
                                <p>The Green River PC Repair Shop will only work on legitimate installations of Windows operating system. Any computer found to have an illegitimate copy of Windows operating system will be return immediately without and further repair.</p>
                                <input type="text" name="software" value= "<?php if(isset($_POST['software'])) echo $_POST['software']; ?>"  placeholder="Initial">
                                <div style="color: red"<p><?php if(isset($errors['softwareErr'])) echo $errors['softwareErr']; ?></p></div>
                                <br><br>
                            
                                <input type="submit" name="submit" class="submit" value="Submit">
                            
                            </form>
                        </div>
                    </div>
                </section>
        </div>

<!-- Footer -->
<footer id="footer">
    <p class="copyright">&copy; 2017 Team SAS</a>.</p>
</footer>

</body>
</html>
