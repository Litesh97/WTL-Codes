<?php 
require_once "connect_db.php";

echo "<table > <tr>
	<th>Student Name</th>
	<th>Roll Number</th>
	<th>Class</th>
	<th>Department</th>
	<th>percentage</th>
	</tr>	
	
";

$sql = "select * from Student";
$result=$connection->query($sql);
if($result)
	{
	echo "hello";
	while($row = mysqli_fetch_array($result))
		{
		echo "<tr><td>".$row['student_name']."</td><td>".$row['student_rollno']."</td><td>".$row['student_class']."</td><td>".$row['student_dept']."</td><td>".$row['student_perc']."</td></tr>";	
		}

echo "</table>";
	
	}






?>
