
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<h1>INSERT EMPLOYEE FORM</h1>
<hr><br>
<form action="insertpage.php" method="POST">
NAME
<input type="text" name="NAME">
AGE
<input type="text" name="AGE"><br><br>
SEX<br>
<input type="radio" value="M" name="r1">
MALE
<input type="radio" value="F" name="r1">
FEMALE<br>
<br>

DESIGNATION<br>

<input type="radio" value="MANAGER" name="r3">
MANAGER

<input type="radio" value="ASS_MANAGER" name="r3">
ASSISTANT MANAGER

<input type="radio" value="junior developer" name="r3">
JUNIOR DEVELOPER


<input type="radio" value="area manager" name="r3">
AREA MANAGER<br><br>


EDUCATIONAL QUALIFICATION
<input type="text" name="Qualification"><br><br>
WORK EXPERIENCE
<input type="text"name="work"><br><br>
DOJ
<input type="date"name="DOJ"><br><br>
DEPARTMENT NAME
<input type="text" name="DEPT"><br><br>
USER NAME
<input type="text" name="username"><br><br>
PASSWORD
<input type="text" name="password"><br><br>
EMAIL
<input type="text" name="email"><br><br>
<input type="SUBMIT" VALUE="REGISTER" name="submit">
<button href="adminpage.php">CANCEL</button>







<?php 
include("../../../htconfig/dbconfig.php");
error_reporting(0);
if(!empty($_FILES['uploadfile']['name'])){
$dir="../UPLOAD_DOCS/uploads/";
$target_file=$dir.basename($_FILES["uploadfile"]["name"]);
$temp=$_FILES['uploadfile']['tmp_name'];
move_uploaded_file($temp,$target_file);
echo "<div class='thumbnail s1' align='right'><img src='".$target_file."'></div>";

echo "<input type='hidden' name='image' value=".$target_file.
">";

}
?>
</form>
<form action="insertform.php" method="POST" enctype="multipart/form-data">
<input type="file" name="uploadfile" >
<input type="SUBMIT" name="submit" value="UPLOAD PHOTO">
</form>
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
</style>
