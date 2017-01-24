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
    <title>GR Repair Sop</title>
<!-- CSS libraries -->
<link rel = "stylesheet" href = "css/RepairShop.css">
<link rel = "stylesheet" href = "css/home.css">
<link rel = "stylesheet" href = "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>

<img src = "images/grcRepairLogo.jpg" class = "logo">

<form action="">
    <p>Is your computer under warranty?</p>
  <input type="radio" name="warranty" value="yes" id = "YesWarranty"> Yes<br>
  <input type="radio" name="warranty" value="no" id = "no"> No<br>
</form>

<p id = "errorMessage" class = "requiredFields">We cannot work on your computer. Please see a tech for questions.</p>
<button> <a href = "GRworkOrderForm.php">Green River Community</a></button>&nbsp;&nbsp;<button>Public</button>

<footer>Contact"<a href ="mailto:arobinson@greenriver.edu">arobinson@greenriver.edu</a>"</footer>


<!-- including the jquery library from the jquery website -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src = "javascript/RepairShop.js"></script>

</body>


</html>
