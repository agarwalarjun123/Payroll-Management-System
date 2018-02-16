<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
include("../../../htconfig/dbconfig.php");

if(!empty($_COOKIE["Manager"]))
{
include("man.css");
echo "<div class='s2'>"	;
echo "<a href=']salarypage.php'>PAYROLL</a>
<a href='view.php'>VIEW PROFILE</a>
<a href='loginpage.php'>LOGOUT</a>

</div>";
$a="select DEP_ID from employee where ID='".$_COOKIE['Manager']."';";
	$r1=mysqli_query($dbConnected,$a);
	$r2=mysqli_fetch_array($r1,MYSQLI_BOTH);
		
$x="select * from employee where DEP_ID="."'".$r2[0]."';";

echo "<table class='t2'><tr><th>ID</th><th>NAME</th><th>AGE</th><th>SEX</th><th>DESIGNATION</th><th>Education Qualification</th><th>WORK EXPERIENCE</th><th>DOJ</th><th>Dept_ID</th>";

$select=mysqli_query($dbConnected,$x);
while($row=mysqli_fetch_array($select,MYSQLI_NUM))
{
	echo "<tr>";

echo "<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."<td>".$row[5]."</td>"."<td>".$row[6]."</td>"."<td>".$row[7]."</td><td>".$row[8]."</td>
</tr>";	
}
echo "</table>";
}	
else{
	header("Location:loginpage.php");
	
}


?>
