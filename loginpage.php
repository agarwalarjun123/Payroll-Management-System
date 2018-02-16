<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
include("../../../htconfig/dbconfig.php");
include("loginform.htm");
include("loginpage.css");

error_reporting(0);
$user=$_POST["username"];
$password=$_POST["password"];
$query="select ID,E_NAME,AGE,SEX,Designation,DOJ,DEP_ID,Username,Password from employee where Username="."'".$user."' and Password="."'".$password."';";
$select1=mysqli_query($dbConnected,$query);
$row=mysqli_fetch_array($select1,MYSQLI_NUM);
if(!empty($row))
{
	if($row[4]=="ADMIN"){
	setcookie("Admin",$row[0],time()+300,"/");
	header("Location:adminpage.php");	
	}
	if($row[4]=="MANAGER"){
		setcookie("Manager",$row[0],time()+300,"/");
	header("Location:manager.php");
	}
	if($row[4]=="junior developer")
	{
		setcookie("junior_developer",$row[0],time()+300,"/");
		header("Location:otherprofile.php");
	}
	if($row[4]=="area manager")
	{

		setcookie("area_manager",$row[0],time()+300,"/");
		header("Location:otherprofile.php");
	}
	if($row[4]=="ASS_MANAGER")
	{
		setcookie("ASS_MANAGER",$row[0],time()+300,"/");
		header("Location:otherprofile.php");
	}

	
}

?>
