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
    <h1 class="text-center" style="color:#ecf0f1">Insert New Job</h1></div>
	<div class="container">

    <form class="well form-horizontal" action="jobs_insert1.php" method="post" >
<fieldset>

<!-- Form Name -->
<legend class="text-center"></legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Job Id</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="jobs_id" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Job Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
  <input  name="job_name" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Max Salary</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input name="max_salary" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Min Salary</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input name="min_salary" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>




<br>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   <button type="submit" value="submit" class="btn btn-danger" name="PRESS"><i class="glyphicon glyphicon-send"></i> Send</button><br>
	
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   <button type="submit" value="submit" class="btn btn-danger" name="view"><i class="glyphicon glyphicon-send"></i>show result</button><br>
	
  </div>
</div>


</fieldset>
</form>
</div>
</div>   
    
	<?php

if (isset($_POST['PRESS'])) {
	


$con = mysql_connect("mysql.1freehosting.com","u938439341_user","123123");

if (!$con) {
	die("cannot connect: " . mysql_error());
}

mysql_select_db("u938439341_hrman", $con);


$sql = "insert into jobs(jobs_id, job_name, max_salary, min_salary) values('$_POST[jobs_id]','$_POST[job_name]','$_POST[max_salary]','$_POST[min_salary]')";

mysql_query($sql, $con);

mysql_close($con);

}



elseif (isset($_POST['view'])) {


$con = mysql_connect("mysql.1freehosting.com","u938439341_user","123123");



	if (!$con) {

		die("cannot connect: " . mysql_error());
}
    else
    	
    header('location: jobs_show1.php');

}




 ?>
 






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
    <script src="js/bootstrap.min.js"></script>
	
	 



</body>
</html>