<?php
$sname="localhost";
$uname="root";
$pass="";
$DBname="viewdb";


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
$query = "SELECT * FROM viewdb";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error executing query: " . mysqli_error($conn);
    die();
}
?>
<!DOCTYPE html>
<html>
    <body style="background-color:white">
        <table align="center" border="1 px solid black" style="width:600px;line-height:40px;">
        <tr>
            <th style="background-color:blue" colspan="6"><h2>Student Information System</h2></th>
        </tr>
        <tr style="background-color:blue;color:white;font-style:italic;font-size:20px;">
            <td>Serial No</td>
            <td>Name</td>
            <td>Father's Name</td>
            <td>Roll No</td>
            <td>Delete</td>
            <td>Insert</td>
        </tr>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
            $dbsid = $rows['serialno'];
            ?>
            <tr style="background-color: lightblue">
                <td><?php echo $rows['serialno']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['fathername']; ?></td>
                <td><?php echo $rows['rollno']; ?></td>
                <td>
                    <form action="task3.php" method='post'>
                        <input type='hidden' name="dbsid" value="<?php echo $dbsid; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td>
                    <form action="task4.php" method='post'>
                        <input type='hidden' name="dbsid" value="<?php echo $dbsid; ?>">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
            <?php
        }
?>        
       </table>
</body>
</html>
