<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
include("../../../htconfig/dbconfig.php");
if(!empty($_COOKIE["Admin"])){
$NAME=$_POST["NAME"];
$AGE=$_POST["AGE"];
$SEX=$_POST["r1"];
$DESIGN=$_POST["r3"];
$qualification=$_POST["Qualification"];
$work=$_POST["work"];
$DOJ=$_POST["DOJ"];
$DEPT_NAME=$_POST["DEPT"];
$user=$_POST["username"];
$password=$_POST["password"];
$image=$_POST["image"];
$email=$_POST["email"];
$x="select dept_ID from department where D_NAME='".$DEPT_NAME."';";

$a=mysqli_query($dbConnected,$x);
$ID=mysqli_fetch_array($a,MYSQLI_BOTH);
$query="insert into employee(E_NAME,AGE,SEX,Designation,Educational_Qualification,WORK_EXP,DOJ,DEP_ID,Username,Password,img_address,email)values("."'".$NAME."','".$AGE."','".$SEX."','".$DESIGN."','".$qualification."','".$work."','".$DOJ."','".$ID[0]."','".$user."','".$password."','".$image."','".$email."');";
echo $query;
$y="select BASIC_PAY from designation where DESIGNATION='".$DESIGN."';";
$u=mysqli_query($dbConnected,$y);

$basicpay=mysqli_fetch_array($u,MYSQLI_BOTH);
if($basicpay[0]>100000){
$incometax=(18/100)*$basicpay[0];

}
$pf=(5/100)*$basicpay[0];
$query2="insert into salary(BASIC_PAY,DEPID,Provident_Fund,Income_Tax)values('".$basicpay[0]."','".$ID[0]."','".$pf."','".$incometax."');";

if(mysqli_query($dbConnected,$query) && mysqli_query($dbConnected,$query2)){
	header("Location:adminpage.php");
	
}
}
else{
	
	header("location:adminpage.php");
}
?>
