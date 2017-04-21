<?php

/**
    The MIT License (MIT)

    Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */

 /** Side bar navigation code from: http://www.w3schools.com/howto/howto_js_sidenav.asp **/
?>

<!DOCTYPE html>
<html>

<head>
 <link rel = "stylesheet" href = "css/index.css">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
 
<body>
<!--Creating nav bar -->


<nav>
     <ul>
     	

     	<li><a href="index.php">Forms</a></li>
     	<li><a href="ourStory.php">Our Story</a></li>
        <li><a href="shopRequirements.php">Shop Requirements</a></li>    
       	<li><a href="contact.php">Contact</a></li>
       	<li><a href="admin/login.php">Admin/Tech Login</a></li>
   </ul>
   <div class="handle">Menu</div>
</nav>

<script>
	$(".handle").on("click", function(){
	
    	    $("nav ul").toggleClass("showing");
   });

</script>

</body>
</html> 