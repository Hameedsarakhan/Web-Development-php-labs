<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have already established the database connection
    $conn = mysqli_connect($sname, $uname, $pass, $DBname);

    if (!$conn) {
        die("Unable to connect with the server: " . mysqli_connect_error());
    }

    // Get the serial number to delete from the form submission
    $dbsid = $_POST["dbsid"];

    // Prepare the DELETE query
    $query = "DELETE FROM viewdb from WHERE serialno = $dbsid";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
