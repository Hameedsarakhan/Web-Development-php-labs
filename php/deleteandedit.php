<?php
require('delete.php');
$sname="localhost";
$uname="root";
$pass="";
$DBname="viewdb";
@$sid=$_POST['sid'];
$conn=mysqli_connect($sname,$uname,$pass);
if(!$conn)
{
    echo("Unable to connect with server");
    die();
}
else
{
    echo("Connected with webs server");
}


$DB=mysqli_select_db($conn,$DBname);


if(!$DB)
{
    echo("<br>Unable to connect with Database");
    die();
}
else
{
    echo("<br>Database connected successfully");
}
$q="delete from studentfrom where serialno='$sid'";
$result=mysqli_query($conn, $q);
if($result==TRUE)
{
    echo "One record has been deleted";
}


else 
echo "FALSE";
?>