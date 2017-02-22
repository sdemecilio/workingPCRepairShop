<?php
/**
 * Created by PhpStorm.
 * User: Axum
 * Date: 2/17/2017
 * Time: 11:09 AM
 */
?>


<?php
/**
The MIT License (MIT)

Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */
?>
<html>
<head>
    <title>Green River Repair Shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        <span class="logo"><img src="images/grcRepairLogo.jpg" alt="Repair Shop Logo" /></span>
        <h1>Green River PC Repair Shop</h1>
    </header>

    <!-- Nav -->
    <?php
    include ('indexMenu.php');
    ?>

    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Forms</h2>
                    </header>
                        <form>
                            <p>Is your computer under warranty?</p>
                            <input type = "radio" name = "warranty" id = "YesWarranty"><label for = "YesWarranty">Yes</label>
                            <input type = "radio" name = "warranty" id = "no"><label for = "no">No</label>
                            
                            <p id = "followUp">Is your warranty a software warranty or hardware warranty?<br><br>
                            
                                <input type = "radio" name = "followUp" id = "Software"><label for = "Software">Software</label>
                                <input type = "radio" name = "followUp" id = "Hardware"><label for = "Hardware">Hardware</label>
                                <input type = "radio" name = "followUp" id = "Unsure"><label for = "Unsure">Not sure/ Don't know</label>
                            </p>
                            
<!--  <p id = "options">
    <input type = "radio" name = "followUpAnswer" value = "Software" id = "Software"> Software<br>
    <input type = "radio" name = "followUpAnswer" value = "Hardware" id = "Hardware"> Hardware
  </p>-->
                        </form>
                        <p id = "errorMessage" class = "requiredFields">We cannot work on your computer. Please see a tech for questions.</p>
                        <a class = "btn btn-default" href = "policy.php" id = "proceedToPaperwork">Proceed to paperwork</a>
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

<!-- Scripts -->

<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

<!-- including the jquery library from the jquery website -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src = "javascript/RepairShop.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>