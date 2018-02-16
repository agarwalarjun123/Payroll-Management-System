<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
include("../../../htconfig/dbconfig.php");
if(!empty($_COOKIE["Manager"]))
{
	include("payslip.css");
	
	
	if(isset($_POST['leave'])&&isset($_POST['bonus']))
	{
		$query="select employee.E_NAME,employee.WORK_EXP,salary.BASIC_PAY,salary.Provident_Fund,salary.Income_Tax,employee.email from employee, salary where employee.ID=salary.U_ID and salary.U_ID='".$_POST['ID']."';";
		$x=mysqli_query($dbConnected,$query);
		$row=mysqli_fetch_array($x,MYSQLI_BOTH);
		$leave=$_POST['leave'];
		$bonus=$_POST['bonus'];
		$pf=$row[3];
		$it=$row[4];
		$email=$row[5];
		if($leave>=5)
		{
		$leave=$leave-5;
		}
		else
		{
		$leave=0;
		}
		$deduction=$leave*($row[2]/30);
		$basic_pay=$row[2]-$deduction;
		$salary=$basic_pay+$bonus+$pf-$it;
		$month=$_POST['month'];
		$year=$_POST['year'];
		$query="insert into payslip_history(UID,MONTH,YEAR,NET_SALARY,deductions,STATUS)values( '".$_POST['ID']."','".$month."','".$year."','".$salary."','".$deduction."','PAYSLIP GENERATED');";
		if(mysqli_query($dbConnected,$query))
		{
				
		header("location:../PHPMailer-master/mail.php?email=".$email);		
				
		}	
		
		
		
	}
	
	
	
	else{
	echo "<div class='s1'><h1> SALARY SLIP</h1><hr>";
	$query="select employee.E_NAME,employee.WORK_EXP,salary.BASIC_PAY,salary.Provident_Fund,salary.Income_Tax from employee,salary where employee.ID=salary.U_ID and salary.U_ID=".$_GET['ID'].";";

	$x=mysqli_query($dbConnected,$query);
	$row=mysqli_fetch_array($x,MYSQLI_BOTH);
	echo "<form action='salaryslip.php' method='POST'>";
	echo "<br><span>BASIC PAY &nbsp; &nbsp; ".$row[2]."</span>";
	echo "<br><span>Provident Fund &nbsp; &nbsp; ".$row[3]."</span>";
		echo "<br><span>Income Tax  &nbsp; &nbsp; ".$row[4]."</span>";

	echo "<br><input type='text' hidden name='ID' value='".$_GET['ID']."'>";
echo "<br>";
	$months=array("JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER");
	echo "month<select name='month'>";
	for($i=0;$i<12;$i++){
	echo "<option>".$months[$i]."</option>";
	}
	echo "</select>";
	
	echo "year<select name='year'>";
	for($i=2000;$i<2021;$i++)
	{
		echo "<option>".$i."</option>";
		
	}
	echo "</select><br><br>";
	echo "enter number of leaves<br>";
	echo "<input type='text' name='leave' required><br><br>";
	echo "enter bonus<br>";
	echo "<input type='text' name='bonus' required><br><br>
	<input type='SUBMIT' value='GENERATE'><br>";
	echo "</form>";
	echo "</div>";
	}
	
	
	
	
}	
else {
	header("location:loginpage.php");
	
	
}
?>
