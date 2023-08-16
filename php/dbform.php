
<!DOCTYPE html>
<?php
$mydb="student";
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    echo("Unable to connect with server");
    die();}
else
{echo("Connected with webs server");}
$DB=mysqli_select_db($conn,$mydb);
if(!$DB)
{echo("<br>Unable to connect with Database");
    die();}
else
{echo("<br>Database connected successfully");}?>
<form method="POST" action=""  border="4 px solid black" >
<h4>Enter your name</h4>
<input type="text" name="sname" value="">
<h4>Enter your Father's name</h4>
<input type="text" name="fname" value="">
<h4>Enter your School name</h4>
<input type="text" name="school" value=""><br>
<h4>Enter your Rollno</h4>
<input type="text" name="rollno" value=""> 
<h4>Enter your class</h4>
<input type="text" name="class" value="">
<Button type="submit" value="submit">Submit</Button>
</form>
<?php
@$sname=$_POST['sname'];
@$fname=$_POST['fname'];
@$school=$_POST['school'];
@$rollno=$_POST['rollno'];
@$class=$_POST['class'];
$result=mysqli_query($conn,"INSERT INTO student(sname, father_name, school, rollno, class) VALUES('$sname','$fname',
'$school','$rollno', '$class')");
if($result==TRUE)
{echo "One record has been added";}
else 
echo "FALSE";
?></html>
