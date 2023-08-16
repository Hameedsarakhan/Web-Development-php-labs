<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have already established the database connection
    $conn = mysqli_connect($sname, $uname, $pass, $DBname);

    if (!$conn) {
        die("Unable to connect with the server: " . mysqli_connect_error());
    }

    // Get the serial number to edit from the form submission
    $dbsid = $_POST["dbsid"];

    // Retrieve the student's information based on the serial number
    $query = "SELECT * FROM viewdb from WHERE serialno = $dbsid";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Close the previous HTML table
    echo '</table>';

    // Output the form for editing the student's information
    echo '<form action="viewdb.php" method="post">';
    echo '<tr style="background-color:lightblue">';
    echo '<td>' . $row['serialno'] . '</td>';
    echo '<td><input type="text" name="name" value="' . $row['name'] . '"></td>';
    echo '<td><input type="text" name="fathername" value="' . $row['fathername'] . '"></td>';
    echo '<td><input type="text" name="rollno" value="' . $row['rollno'] . '"></td>';
    echo '<td><input type="hidden" name="dbsid" value="' . $dbsid . '">';
    echo '<input type="submit" value="Update"></td>';
    echo '</tr>';
    echo '</form>';

    mysqli_close($conn);
}
?>
