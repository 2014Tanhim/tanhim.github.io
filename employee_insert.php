<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dot Technology</title>
    
	 <link href="css/style1.css" rel="stylesheet">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	
	
    </head>
  <body >
  <div class="container">
		<nav class="navbar navbar-default" style="background-color:none,border-color:none">
		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
			<ul class="nav navbar-nav navbar-right">
			<li><a href="home1.html" style="color:#black">Home</a></li>
			<li><a href="employee_insert.php" style="color:#black">Employee</a></li>
			<li><a href="dept_insert1.php" style="color:#black">Department</a></li>
			<li><a href="jobs_insert1.php" style="color:#black">Jobs</a></li>
			<li><a href="project_insert1.php" style="color:#black">Project</a></li>
			<li><a href="salary_insert1.php" style="color:#black">Salary</a></li>
        
			</ul>
			<ul class="nav navbar-nav navbar-left">
			<li><a href="landing_page.html" style="color:#ecf0f1">DOT TECHNOLOGY</a></li>
			
        
			</ul>
    </div>
	
	</nav>

  <div class="nav" style="background-color: #e74c3c">
    <h1 class="text-center" style="color:#ecf0f1">Insert new Employee</h1></div>
	<div class="container">

   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <fieldset class="form-group">
    <legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        Option three is disabled
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





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