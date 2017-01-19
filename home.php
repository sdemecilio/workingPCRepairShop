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
<!-- CSS libraries -->
<link rel = "stylesheet" href = "css/RepairShop.css">
<body>

<h1>PC Repair Shop</h1>
<form action="">
    <p>Is your computer under warranty?</p>
  <input type="radio" name="warranty" value="yes" id = "YesWarranty"> Yes<br>
  <input type="radio" name="warranty" value="no" id = "no"> No<br>
</form>

<p id = "errorMessage" class = "requiredFields">We cannot work on your computer. Please see a tech for questions.</p>
<button> <a href = "GRworkOrderForm.php">Green River Community</a></button>&nbsp;&nbsp;<button>Public</button>

</body>
<footer>Contact"<a href ="mailto:arobinson@greenriver.edu">arobinson@greenriver.edu</a>"</footer>
<!-- including the jquery library from the jquery website -->
<script src = "http://code.jquery.com/jquery.js"></script>

<script>
    $('#YesWarranty').click(function() {
        $('button').hide();
        $('#errorMessage').show();
    });

    $('#no').click(function() {
        $('button').show();
        $('#errorMessage').hide();
    });

    $('#errorMessage').hide();
    $('button').hide();

</script>
</html>
