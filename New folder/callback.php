<?php


require_once "init.php";

$accessToken = $linkedin->getAccessToken($_GET['code']);
$profileObject = $linkedin->getPerson();


?>

<html>

<head>

<title>Welcome Page</title>

<link rel="stylesheet" href="style.css">




</head>

<body>

<center>
<br><br><br>
                 <p>   Welcome <?php echo $profileObject->localizedFirstName; ?> <?php echo $profileObject->localizedLastName; ?>
              
          <br><br>
                You have Successfully Logged in. Click here to <a
                    href="index.php?action=logout"> Logout </a>
           
		</center>	
			
</body>

</html>
		






