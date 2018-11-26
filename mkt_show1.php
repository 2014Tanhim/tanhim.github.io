

<?php
$con=mysql_connect("mysql.1freehosting.com","u938439341_user","123123");

if(!$con){
	die("Error: ".mysql_error());
	
}

mysql_select_db("u938439341_hrman",$con);



$result=mysql_query("select employee.employee_id,employee.first_name,employee.middle_name,employee.last_name,employee.address,department.dept_name
from employee inner join department
on employee.dept_id=department.dept_id WHERE department.dept_id=03");

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Dot Technology</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
	

    <link href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>
   
   <script>
   $(document).ready(function(){
    $('#example').DataTable();
});
   
   
   </script>
  </head>
  <body id="login2_1">
  <div>
  <div class="container">
 <div class="container">
		<nav class="navbar navbar-default" style="background-color:none,border-color:none">
		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
			<ul class="nav navbar-nav navbar-right">
			<li><a href="home1.html" style="color:#7f8c8d">HOME</a></li>
			<li><a href="login.html" style="color:#7f8c8d">ABOUT</a></li>
			<li><a href="login.html" style="color:#7f8c8d">LOGOUT</a></li>
			
        
			</ul>
			<ul class="nav navbar-nav navbar-left">
			<li><a href="landing_page.html" style="color:#7f8c8d">DOT TECHNOLOGY</a></li>
			
        
			</ul>
    </div>
	
	</nav>
	</div></br></br></br>
	<section id="admin_home">
	
		<div class="container">
	     <div class="row">
            	
        <div class="" style="text-align:center">
  <table id="example">
	<thead>
		<tr>
<th>EMPLOYEE ID</th>
<th>FIRST NAME</th>
<th>MIDDLE NAME</th>
<th>LAST NAME</th>
<th>ADDRESS</th>
<th>DEPARTMENT NAME</th>

</tr>
</thead>
<tbody>
     <?php
	 while($row = mysql_fetch_array($result)){
		?>
	 <tr>
	  <td><?=$row['employee_id']?></td>
	  <td><?=$row['first_name']?></td>
	  <td><?=$row['middle_name']?></td>
	  <td><?=$row['last_name']?></td>
	  <td><?=$row['address']?></td>
	  <td><?=$row['dept_name']?></td>
	  </tr>
	 <?php
	 }
	?>
</tbody>	
  </table>
  </div>
</section>
</div>
</div>
</div></div>
</body>
</html>
   