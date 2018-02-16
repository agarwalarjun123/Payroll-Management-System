<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
include("../../../htconfig/dbconfig.php");
if(!empty($_COOKIE["Manager"]))
{
	error_reporting(0);
	include("salarypage.css");
	$a="select DEPID from salary where U_ID='".$_COOKIE['Manager']."';";
	$r1=mysqli_query($dbConnected,$a);
	$r2=mysqli_fetch_array($r1,MYSQLI_BOTH);
	
	$query="select U_ID,BASIC_PAY from salary where DEPID='".$r2[0]."';";
	$u=mysqli_query($dbConnected,$query);
	$q1="select E_NAME from employee where DEP_ID='".$r2[0]."';";
	$s1=mysqli_query($dbConnected,$q1);
	//$link="<a class='btn btn-primary' href='editsalary.php?ID=";
	$gen="<a class='btn btn-primary' href='salaryslip.php?ID=";
	echo "<table>";
	echo "<tr><td>ID</td><td>NAME</td><td>BASIC PAY</td><td> </td> <td> </td></tr>";
	while(($row=mysqli_fetch_array($u,MYSQLI_BOTH))&& ($x1=mysqli_fetch_array($s1,MYSQLI_BOTH)))
	{
	echo "<tr> <td>".$row[0]."</td><td>".$x1[0]."</td><td>".$row[1]."</td><td>".$gen.$row[0]."'>GENERATE SLIP</a></td></tr>";
	}
	echo "</table>";
	echo "<center><a href='manager.php' class='btn btn-danger'>GO BACK</a></center>";
	
	
	
	
}	
else {
header("location:loginpage.php");


}
?>
