

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<?php

if(!empty($_COOKIE['Admin'])){
include("../../../htconfig/dbconfig.php");
include("admin.css");

$link="<a class='btn btn-primary btn-center'href='editform.php?ID=";

echo "<h1>EMPLOYEE LIST</h1>";
echo "<table><tr><th>NAME</th><th>AGE</th><th>SEX</th><th>DESIGNATION</th><th>EDUCATION QUALIFICATION</th><th>WORK EXPERIENCE</th><th>DOJ</th><th>Dept_ID</th><th>USERNAME</th><th>PASSWORD</th><th> </th></tr>";
$query="select * from employee";
$s1=mysqli_query($dbConnected,$query);
while($row=mysqli_fetch_array($s1,MYSQLI_NUM))
{
echo "<tr>";

echo "<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."<td>".$row[5]."</td>"."<td>".$row[6]."</td>"."<td>".$row[7]."</td>"."<td>".$row[8]."</td>"."<td>".$row[9]."</td>"."<td>".$row[10]."</td><td>".$link.$row[0]."'>EDIT</a>"."</td></tr>";	
}
echo "</table>";
echo"<center> <a class='btn btn-danger a1' href='insertform.php'>ADD NEW RECORD</a></center>";
}
else
{
	
	header("Location:loginpage.php");
}

?>
</div><center>&nbsp;&nbsp;
<a href="view.php" class="btn btn-danger">view profile</a>
<a href="loginpage.php" class="btn btn-danger">logout</a></center>
