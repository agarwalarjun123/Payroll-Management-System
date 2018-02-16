<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<?php

include("../../../htconfig/dbconfig.php");
if(!empty($_COOKIE["Admin"])){
	
$ID=$_GET["ID"];
$query="select * from employee where ID='".$ID."';";
$s1=mysqli_query($dbConnected,$query);
$row=mysqli_fetch_array($s1,MYSQLI_BOTH);
echo"EDIT FORM<hr>";
echo "<form action='update.php' method='POST'>";
echo "<input type='ID' NAME='ID' value=$ID hidden>";
echo "NAME<input type='text' name='name' value='".$row[1]."'><br><br>";
echo "AGE<input type ='text' name='age' value='".$row[2]."'><br><br>";
echo "SEX<input type ='text' name='gender' value='".$row[3]."'><br><br>";
echo "DESIGNATION<input type ='text' name='designation' value='".$row[4]."'><br><br>";
echo "EDUCATIONAL QUALIFICATION<input type ='text' name='ed' value='".$row[5]."'><br><br>";
echo "WORK EXPERIENCE<input type ='text' name='work_exp'value='".$row[6]."'><br><br>";
echo "DOJ<input type ='date' name='doj' value='".$row[7]."'><br><br>";
echo "DEPTID<input type ='text' name='deptid' value='".$row[8]."'><br><br>";
echo "USERNAME<input type ='text' name='username' value='".$row[9]."'><br><br>";
echo "PASSWORD<input type ='text' name='password' value='".$row[10]."'><br><br>";
echo"<div class='thumbnail s1'><img src='".$row[11]."'></div>";
echo "<input type='SUBMIT' value='UPDATE'></form>";




}
else 
{

header("location:loginpage.php");
}




?>
</div>
<style>
.s1{
position:fixed;
top:20px;
right:10px;
height:30%;
width:30%;
display:block;
}
</style
