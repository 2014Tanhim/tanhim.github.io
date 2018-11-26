<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dot Technology</title>
    
	
	 <link href="css/style2.css" rel="stylesheet">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	
	
    </head>
  <body id="login2" >
  <div class="container">
		<nav class="navbar navbar-default" style="background-color:none,border-color:none">
		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
			<ul class="nav navbar-nav navbar-right">
			<li><a href="index.html" style="color:#black">Home</a></li>
			<li><a href="About.php" style="color:#black">About</a></li>
			
        
			</ul>
			<ul class="nav navbar-nav navbar-left">
			<li><a href="landing_page.html" style="color:#ecf0f1">Apply For Job</a></li>
			
        
			</ul>
    </div>
	
	</nav>

  
<div class="container">
<form>
<div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+880">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Gender</label>
    <select class="form-control" id="exampleSelect1">
      <option>male</option>
      <option>female</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Apply For</label>
    <select multiple class="form-control" id="exampleSelect2">
      <option>Hr Manager</option>
      <option>IT Manager</option>
      <option>Mkt Manager</option>
      <option>Designer</option>
      <option>Branding</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Skill</label>
    <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Professional Experience</label>
    <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Academic Experience</label>
    <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Upload Photo</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">P.S : Not more than 50kb</small>
  </div>
  <fieldset class="form-group">
    <legend>Work Experience</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        More than 5 years
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        more than 2 years
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        Fresher
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Accept Company Terms and Policy
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>




<?php

$error=''; 
if (isset($_POST['PRESS'])) {
if (empty($_POST['first_name']) || empty($_POST['middle_name']) || empty($_POST['last_name'])|| empty($_POST['emp_id']) 
	|| empty($_POST['date']) || empty($_POST['gender'])||empty($_POST['address']) || empty($_POST['department']) || empty($_POST['jobs_id']) ) {
$error = "please fulfill all the information";
 echo $error; 
}
else
{
	

$con = mysql_connect("mysql.1freehosting.com","u938439341_user","123123");

if (!$con) {
	die("cannot connect: " . mysql_error());
}

mysql_select_db("u938439341_hrman", $con);

$sql = "insert into employee(first_name, middle_name, last_name, employee_id, date_of_birth, gender, address, dept_id, j_id) values('$_POST[first_name]','$_POST[middle_name]','$_POST[last_name]','$_POST[emp_id]','$_POST[date]','$_POST[gender]','$_POST[address]', '$_POST[department]','$_POST[jobs_id]')";



mysql_query($sql, $con);

mysql_close($con);

}}



elseif (isset($_POST['view'])) {

	$con = mysql_connect("localhost", "cty", "1234");

	if (!$con) {

		die("cannot connect: " . mysql_error());
}
    else
    	
    header('location:emp_show.php');

}


 ?>
 



</fieldset>
</form>
</div>
</div>   
    






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
    <script src="js/bootstrap.min.js"></script>
	
	 



</body>
</html>