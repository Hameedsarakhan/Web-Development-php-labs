<?php
$con=mysqli_connect("localhost","root"."");
$db='university management system';
mysqli_select_db($con,$db);

if(isset($_POST['submit'])){
    $ccode = $_POST['ccode'];
    $cname = $_POST['cname'];
    $credithrs = $_POST['credithrs'];
    $Tid= $_POST['Tid'];
    
   $query="INSERT INTO `courses`(ccode,cname,credithrs,Tid) VALUES('$ccode','$cname','$credithrs','$Tid')";
   $insert_row=$con->query($query) or die($con->error.__LINE__);
   
    $msg='course has been added';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style.css" type="text/css"></link>
</head>
<body>
<header>
   <div class="container">
       <h1>UNIVERSITY MANAGEMENT SYSTEM</h1>
   </div>
</header>
<main>
<div class="container">
   <h2>ADD COURSE INFO</h2>
   <?php
       if(isset($msg)){
       echo '<p>'.$msg.'</p>';}?>
   <form method="post" action="insertcourse.php">
       <p>
           <label>Course code</label>
           <input type="text" name="ccode"/>
       </p>
       <label>Course Name</label>
           <input type="text" name="cname"/>
       </p>
       <p>
           <label>Credit Hours</label>
           <input type="number" name="credithrs"/>
       </p>
       <p>
           <label>Teacher ID</label>
           <input type="number" name='Tid'/>
       </p>
       <p>
           <input type="submit" name="submit" value="Submit"/>
       </p>

</div>
</main>   
</body>
</html>

