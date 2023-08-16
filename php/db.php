
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        display:flex;
        justify-content:center;
        flex-direction:column;
        align-items:center;
        color:orange;
    
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php
$con=mysqli_connect("localhost","root"."");
if(!$con){
    echo "<h2>cannot connect></h2>";
    die();
}
else{
    echo "<h2> connected></h2>";
}
$q=("SELECT * FROM emp");
$results=mysqli_query($con,$q);
while($rows=mysqli_fetch_assoc($results)){

}
?>
<table>
    <tr colspan=4>
        <td>Employee info system</td> </tr>
        <tr>
            <td>EmpNo</td>
            <td>EmpName</td>
            <td>Designation</td>
            <td>Department</td>
</tr>
<tr>
    <td><?php echo $rows['empId'];?></td>
    <td><?php echo $rows['name'];?></td>
    <td><?php echo $rows['desg'];?></td>
    <td><?php echo $rows['dept'];?></td>
</tr>
</table>
<?php

?>