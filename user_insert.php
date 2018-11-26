<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Appointment System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
  <body>
  <div class="nav" style="background-color: #e74c3c">
    <h1 class="text-center" style="color:#ecf0f1">ONLINE APPOINTMENT SYSTEM</h1></div>
	<div class="container">

    <form class="well form-horizontal" action="user_insert.php" method="post">
<fieldset>

<!-- Form Name -->
<legend class="text-center"></legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="Address" placeholder="Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="01710000000" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label"> Car License number </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input name="CarLicensenumber" placeholder="Car License number" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Car Engine Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input name="CarEngineNumber" placeholder="Car Engine Number" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label"> mechanic </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your desire mechanic</option>
      <option>Abdullah</option>
      <option>Billal</option>
      <option >Mohsin</option>
      <option >Promod</option>
      
    </select>
  </div>
</div>
</div>

<!-- Text input-->


<div class="form-group">
  <label class="col-md-4 control-label">Date</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input class="form-control" name="Date" placeholder="MM/DD/YYYY" class="form-control"  type="text">
    </div>
</div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   <input type="submit" name="PRESS" value="submit"><br>
	
  </div>
</div>




</fieldset>
</form>
</div>
    </div><!-- /.container -->

    

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 


<?php

if (isset($_POST['PRESS'])) {
	

$con = mysql_connect("localhost", "cty", "1234");

if (!$con) {
	die("cannot connect: " . mysql_error());
}

mysql_select_db("onlineapply", $con);

$sql = "insert into clinetinfo(first_name, last_name, address,phone,CarLicensenumber,CarEngineNumber) values('$_POST[first_name]','$_POST[last_name]','$_POST[address]','$_POST[phone]','$_POST[CarLicensenumber]','$_POST[CarEngineNumber]')";

mysql_query($sql, $con);

mysql_close($con);

}



elseif (isset($_POST['view'])) {

	$con = mysql_connect("localhost", "cty", "1234");

	if (!$con) {

		die("cannot connect: " . mysql_error());
}
    else
    	
    header('location:dept_show.php');

}


elseif (isset($_POST['search'])) {

	$con = mysql_connect("localhost", "cty", "1234");

	if (!$con) {

		die("cannot connect: " . mysql_error());
}
    else
    	
    header('location: search.php');

}
elseif (isset($_POST['next_page'])) {

	$con = mysql_connect("localhost", "cty", "1234");

	if (!$con) {

		die("cannot connect: " . mysql_error());
}
    else
    	
    header('location: jobs_insert.php');

}

 ?>

</body>
</html>