

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "onlineapply");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$CarLicensenumber=$_POST['CarLicensenumber'];
$CarEngineNumber=$_POST['CarEngineNumber'];
$date=$_POST['date'];
 
// Attempt insert query execution
$sql="INSERT INTO clinetinfo
(`first_name`, `last_name`, `phone',  `address`, `carLicenseNumber', 'CarEngineNumber'
'date') VALUES ('$first_name', '$last_name', 
 '$phone', '$address','$CarLicensenumber','$CarEngineNumber','$date')";
 
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>