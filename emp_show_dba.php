
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Dot Technology</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

   
  </head>
  <body id="login2_1">
  <div id="container-overlay">
<div class="container">
 <div class="container">
		<nav class="navbar navbar-default" style="background-color:none,border-color:none">
		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
			<ul class="nav navbar-nav navbar-right">
			<li><a href="home1.html" style="color:#ecf0f1">HOME</a></li>
			<li><a href="login.html" style="color:#ecf0f1">ABOUT</a></li>
			<li><a href="login.html" style="color:#ecf0f1">LOGOUT</a></li>
			
        
			</ul>
			<ul class="nav navbar-nav navbar-left">
			<li><a href="landing_page.html" style="color:#ecf0f1">DOT TECHNOLOGY</a></li>
			
        
			</ul>
    </div>
	
	</nav>
	</div></br></br></br>
	<section id="admin_home">
	
		<div class="container">
	     <div class="row">
            	
        <div class="col-md-4 col-md-offset-4" style="text-align:center">
            
			<?php


$con = mysql_connect("localhost", "cty", "1234");

if (!$con) {
    die("cannot connect: " . mysql_error());
}

echo '</br>';

$db_selected = mysql_select_db('hrmanagement', $con);
if (!$db_selected) {
    die('Could not select database: ' . mysql_error());
}

if(isset($_POST('delete')))
{
    $DeleteQuery = "delete from employee where employee_id='$_POST[hidden]'";

    mysql_query($DeleteQuery, $con);
};

$query = 'SELECT employee.employee_id,employee.first_name, employee.last_name,EMPLOYEE.middle_name,employee.address,employee.gender,employee.date_of_birth, department.dept_id, jobs.jobs_id  from employee inner join department on employee.dept_id = department.dept_id inner join jobs on employee.j_id=jobs.jobs_id';

$result = mysql_query($query);
if (!$result) {
    die('Query failed: ' . mysql_error());
}
else
	echo "</br> </br>";

echo "<table border=1>
<tr>
<th>EMPLOYEE ID</th>
<th>FIRST NAME</th>
<th>MIDDLE NAME</th>
<th>LAST NAME</th>
<th>ADDRESS</th>
<th>DATE OF BIRTH</th>
<th>GENDER</th>
<th>DEPARTMENT ID</th>
<th>JOBS ID</th>
</tr>";


for ($i = 0; $i < mysql_num_rows($result) ; $i++) {
    if (!mysql_data_seek($result, $i)) {
        echo "Cannot seek to row $i: " . mysql_error() . "\n";
        continue;
    }
	$row = mysql_fetch_assoc($result);
	
    echo "<form action = emp_show_dba.php method=post>";
    echo "<tr>";
    echo "<td>" . "<input type=text name=employee_id value=" . $row['employee_id'] . "</td>"; 
    echo "<td>" . "<input type=text name=first_name value=" . $row['first_name'] . "</td>"; 
    echo "<td>" . "<input type=middle_name value=" . $row['middle_name'] . "</td>"; 
    echo "<td>" . "<input type=text name=last_name value=" . $row['last_name'] . "</td>";
    echo "<td>" . "<input type=text name=address value=" . $row['address'] . "</td>"; 
    echo "<td>" . "<input type=text name=date_of_birth value=" . $row['date_of_birth'] . "</td>"; 
    echo "<td>" . "<input type=text name=gender value=" . $row['gender'] . "</td>"; 
    echo "<td>" . "<input type=text name=dept_id value=" . $row['dept_id'] . "</td>";
    echo "<td>" . "<input type=text name=jobs_id value=" . $row['jobs_id'] . "</td>";
    echo "<td>" . "<input type=hidden name=hidden value=" . $row['first_name'] . "</td>";
    echo "<td>" . "<input type=submit name=delete value=delete" . "</td>";

    echo "</from>";
}

echo "</table>";
	
mysql_query($sql, $con);

mysql_close($con);

?>
   
			   
				
</div>
</section>
</div>
</div>
</div></div>
</body>
</html>