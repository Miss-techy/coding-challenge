<?php
require "init.php";
?>

<html>

<head>

<title>Form title</title>

<link rel="stylesheet" href="style.css">




</head>

<body>

<section class="signin">

<center>

<h2 class="title">WELCOME</h2>


<form>
<div class="container">
<!--input type="text" placeholder="Username" style="color:white;">
<br>
<input type="password" placeholder="Password" style="color:white;">
<br-->
<button type="button" class="btn-blue"><a href="<?php echo $linkedin->getAuthUrl() ?>">Sign In to Linkedin</a></button>
</div>
</form>





<footer>

<p><a href="" class="recovery">Forgot Password?</a></p>
<br>
<p>New here? <a href="" class="join">Join Now</a>


</footer>


</center>

</section>


</body>

</html>