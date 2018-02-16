<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
include("../../../htconfig/dbconfig.php");

if(!empty($_COOKIE["junior_developer"]))
{
 $query="select * from employee where ID='".$_COOKIE["junior_developer"]."';";
 $x=mysqli_query($dbConnected,$query);
 $row=mysqli_fetch_array($x,MYSQLI_ASSOC);
 echo "<h1>HI &nbsp; &nbsp;". $row['E_NAME']."</h1><hr>";
 echo "ID:".$row["ID"]."<br>";
 echo "NAME:".$row["E_NAME"]."<br>";
 echo "AGE:".$row["AGE"]."<br>";
 echo "SEX:".$row["SEX"]."<br>";
 echo "DESIGNATION:".$row["Designation"]."<br>";
 echo "WORK EXPERIENCE:".$row["WORK_EXP"]."<br>";
 echo "EDUCATIONAL QUALIFICATION:".$row["Educational_Qualification"]."<br>";
 echo "EMAIL:".$row["email"]."<br>";
 echo "<img src='".$row["img_address"]."'>"."<br>";
 $query="select * from salary where U_ID='".$row['ID']."';";
 $x=mysqli_query($dbConnected,$query);
 $row=mysqli_fetch_array($x,MYSQLI_ASSOC);
 echo "<H1> Salary Details</h1>";
 echo "Basic Pay:".$row["BASIC_PAY"]."<br>";
 echo "Provident Fund:".$row["Provident_Fund"]."<br>";
 echo "Income Tax:".$row["Income_Tax"]."<br>";
 $query="select * from payslip_history where UID='".$row["U_ID"]."';";
 echo "<h1>Payment Slips</h1>";
 $x=mysqli_query($dbConnected,$query);
 echo "<table><tr><td>Month</td><td>Year</td><td>Net Salary</td><td>Deductions</td><tr>";
while($row=mysqli_fetch_array($x,MYSQLI_ASSOC)){
    echo "<tr><td>".$row['MONTH']."</td><td>".$row['YEAR']."</td><td>".$row['NET_SALARY']."</td><td>".$row['deductions']."</td></tr>";
    
    
}
 echo "</table>";
 
 setcookie("junior_developer",$row[0],time()-30,"/");
 
 
}
 
 else if(!empty($_COOKIE["ASS_MANAGER"])){
 $query="select * from employee where ID='".$_COOKIE["ASS_MANAGER"]."';";
 $x=mysqli_query($dbConnected,$query);
 $row=mysqli_fetch_array($x,MYSQLI_ASSOC);
 echo "<h1>HI &nbsp; &nbsp;". $row['E_NAME']."</h1><hr>";
 echo "ID:".$row["ID"]."<br>";
 echo "NAME:".$row["E_NAME"]."<br>";
 echo "AGE:".$row["AGE"]."<br>";
 echo "SEX:".$row["SEX"]."<br>";
 echo "DESIGNATION:".$row["Designation"]."<br>";
 echo "WORK EXPERIENCE:".$row["WORK_EXP"]."<br>";
 echo "EDUCATIONAL QUALIFICATION:".$row["Educational_Qualification"]."<br>";
 echo "EMAIL:".$row["email"]."<br>";
 echo "<img src='".$row["img_address"]."'>"."<br>";
  $query="select * from salary where U_ID='".$row['ID']."';";
 $x=mysqli_query($dbConnected,$query);
 $row=mysqli_fetch_array($x,MYSQLI_ASSOC);

  echo "<H1> Salary Details</h1>";
 echo "Basic Pay:".$row["BASIC_PAY"]."<br>";
 echo "Provident Fund:".$row["Provident_Fund"]."<br>";
 echo "Income Tax:".$row["Income_Tax"]."<br>";
 $query="select * from payslip_history where UID='".$row["U_ID"]."';";
 
 echo "<h1>Payment Slips</h1>";
 $x=mysqli_query($dbConnected,$query);
 echo "<table><tr><td>Month</td><td>Year</td><td>Net Salary</td><td>Deductions</td><tr>";
while($row=mysqli_fetch_array($x,MYSQLI_ASSOC)){
    echo "<tr><td>".$row['MONTH']."</td><td>".$row['YEAR']."</td><td>".$row['NET_SALARY']."</td><td>".$row['deductions']."</td></tr>";
    
    
}
 echo "</table>";
 setcookie("ASS_MANAGER",$row[0],time()-30,"/");
 
 
 }
 else if(!empty($_COOKIE["area_manager"])){
 $query="select * from employee where ID='".$_COOKIE["area_manager"]."';";
 $x=mysqli_query($dbConnected,$query);
 $row=mysqli_fetch_array($x,MYSQLI_ASSOC);
 echo "<h1>HI &nbsp; &nbsp;". $row['E_NAME']."</h1><hr>";
 echo "ID:".$row["ID"]."<br>";
 echo "NAME:".$row["E_NAME"]."<br>";
 echo "AGE:".$row["AGE"]."<br>";
 echo "SEX:".$row["SEX"]."<br>";
 echo "DESIGNATION:".$row["Designation"]."<br>";
 echo "WORK EXPERIENCE:".$row["WORK_EXP"]."<br>";
 echo "EDUCATIONAL QUALIFICATION:".$row["Educational_Qualification"]."<br>";

 echo "EMAIL:".$row["email"]."<br>";
 echo "<img src='".$row["img_address"]."'>"."<br>";

$query="select * from salary where U_ID='".$row['ID']."';";
 $x=mysqli_query($dbConnected,$query);
 $row=mysqli_fetch_array($x,MYSQLI_ASSOC);
  echo "<H1> Salary Details</h1>";

 echo "Basic Pay:".$row["BASIC _PAY"]."<br>";
 echo "Provident Fund:".$row["Provident_Fund"]."<br>";
 echo "Income Tax:".$row["Income_Tax"]."<br>";
 $query="select * from payslip_history where UID='".$row["U_ID"]."';";
 echo "<h1>Payment Slips</h1>";
 $x=mysqli_query($dbConnected,$query);
 echo "<table><tr><td>Month</td><td>Year</td><td>Net Salary</td><td>Deductions</td><tr>";
while($row=mysqli_fetch_array($x,MYSQLI_ASSOC)){
    echo "<tr><td>".$row['MONTH']."</td><td>".$row['YEAR']."</td><td>".$row['NET_SALARY']."</td><td>".$row['deductions']."</td></tr>";
    
    
}
 echo "</table>";
 
 setcookie("area_manager",$row[0],time()-30,"/");
 
 }
 
else
{
  header("Location:loginpage.php");  

}
?>
<center>
    <a href="loginpage.php" class="btn btn-primary">LOGOUT</a>
</center>
<style>
img{
display:block;
position:fixed;
top:90px;
height:30%;
right:30;
}
a{
    
    position:fixed;
    display: block;
    bottom:50px;
    left:600px;
}
th,td{
    padding:20 20 20 20;
    
}
</style>
