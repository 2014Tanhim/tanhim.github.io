<!DOCTYPE html>
<html>
<head>
	<title>connect</title>	

</head>
<body style="background-color:white;">
<?php
 $inputuser = $_POST['email'];
 $inputpass = $_POST['pwd'];


 if ($inputuser == "tanhim@gmail.com" && $inputpass == "123") {
 	echo "welcome";

 	header('location:home1.html');
 }

elseif ($inputuser == "it@gmail.com" && $inputpass == "321") {
	header('location: home2it1.php');
}
elseif ($inputuser == "hr@gmail.com" && $inputpass == "123") {
	header('location: home2hr1.php');
}
elseif ($inputuser == "mkt@gmail.com" && $inputpass == "321") {
	header('location: home2mkt1.php');
}
 else{
 	echo "retry";

 	header('location: login.html');
 }
?>
</body>
</html>
