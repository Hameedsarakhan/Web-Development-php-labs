<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questionnaire3";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $sql = "UPDATE users SET name = '$name' WHERE id = 1"; 
    if ($conn->query($sql) === TRUE) {
        echo "Name updated successfully";
    } else {
        echo "Error updating name: " . $conn->error;
    }
}
$conn->close();
?>
