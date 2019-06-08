<?php

//include_once "connect_db.php";

if(isset($_POST['but']))
{
	$name=$_POST['stud_name'];

	$rno=$_POST['stud_rno'];
	$class=$_POST['stud_class'];
	$dept=$_POST['stud_dept'];
	$perc=$_POST['stud_perc'];

	$sql = "insert into Student values($rno,'$name','$dept','$class',$perc)";

	$result= $connection->query($sql);
	if($result)
	{
		echo "Record Inserted Successfully";
		header('location: process.php');
	}
	else
	{
		echo $sql;

	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP | STUDENT RECORD</title>
<style type="text/css">

.form123  {
	border :1px solid black  ;
	width: 50%;
	height: auto;
	padding: 8px;
}

th {
	padding: 10px;
	text-align: right;
}
td {
	padding: 6px;
}

input {
	padding: 3px;
}

.but1 {

width: 80%;
height: 40px;
background-color: green;
color: white;

}

.but1:hover {
	background-color: black;
	}

</style>
</head>

<body>

	<center>
		<form  method="POST" action="index.php" class="form123" >
		<center><h1>Student Record</h1></center>
		<table>
			<tr>
				<th>Name*</th>
				<td><input type="text" name="stud_name" id="stud_name" placeholder="Enter Your Name" required>
			</tr>

			<tr>
				<th> Roll Number*</th>
				<td><input type="number" name="stud_rno" id="stud_rno" min="1000" placeholder="Enter Roll number" required>
			</tr>

			<tr>
				<th>Class*</th>
				<td><input type="text" name="stud_class" id="stud_class" placeholder="Enter Your Class" required>
			</tr>

			<tr>
				<th>Department*</th>
				<td><input type="text" name="stud_dept" id="stud_dept" placeholder="Enter Your Department" required>
			</tr>

			<tr>
				<th>Percentage*</th>
				<td><input type="number" step="any" name="stud_perc" id="stud_perc" placeholder="Enter  Percentage" required>
			</tr>

			<tr>
				<td colspan="2"> <input class="but1" type="submit" name="but" id="but" value="Submit"> </td>
			</tr>


		</table>
		</form>
	</center>



</body>
</html>
