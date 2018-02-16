<?php
include("../../../htconfig/dbconfig.php");
if(!empty($_COOKIE["Admin"]))
{
	$ID=$_POST["ID"];
	$NAME=$_POST["name"];
	$age=$_POST["age"];
	$sex=$_POST["gender"];
	$des=$_POST["designation"];
	$ed=$_POST["ed"];
	$wkexp=$_POST["work_exp"];
	$doj=$_POST["doj"];
	$dept_ID=$_POST["deptid"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$query="update employee set E_NAME='".$NAME."',AGE='".$age."',SEX='".$sex."',Designation='".$des."',Educational_Qualification='".$ed."',WORK_EXP='".$wkexp."',DOJ='".$doj."',DEP_ID='".$dept_ID."',Username='".$username."',Password='".$password."' where ID='".$ID."';";
	if(mysqli_query($dbConnected,$query));
	{
		header("Location:adminpage.php");
	}
	}
else{
	header("location:loginpage.php");
	
	
}
?>