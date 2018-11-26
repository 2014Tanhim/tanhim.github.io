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
    <h1 class="text-center" style="color:#ecf0f1">Salary</h1></div>
	<div class="container">

    <form class="well form-horizontal" action="salary_insert1.php" method="post" >
<fieldset>

<!-- Form Name -->
<legend class="text-center"></legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Work Per Hour</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="work_hour" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Vacation</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
  <input  name="vacation" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Employee id</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="s_emp_id" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Total Salary</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input name="total_salary" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Department Id</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input name="s_dept_id" placeholder="" class="form-control"  type="text">
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



$sql = "insert into department(dept_id, dept_name, location,manager_id) values('$_POST[dept_id]','$_POST[dept_name]','$_POST[location]','$_POST[manager_id]')";

mysql_query($sql, $con);

mysql_close($con);

}



elseif (isset($_POST['view'])) {

	$$con = mysql_connect("mysql.1freehosting.com","u938439341_user","123123");





	if (!$con) {

		die("cannot connect: " . mysql_error());
}
    else
    	
    header('location:salary_show1.php');

}


 ?>
 






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
    <script src="js/bootstrap.min.js"></script>
	
	 



</body>
</html>