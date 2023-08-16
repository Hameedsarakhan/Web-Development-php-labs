<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    color: #333;
}
    </style>
</head>
<body>
    <h1>User Profile</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "questionnaire3";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle the name update request
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        // Run an SQL query to update the name in the database for the specific user
        $sql = "UPDATE users SET name = '$name' WHERE id = 1"; // Assuming the user's ID is 1
        if ($conn->query($sql) === TRUE) {
            echo "Name updated successfully";
        } else {
            echo "Error updating name: " . $conn->error;
        }
    }

    // Handle the email update request
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        // Run an SQL query to update the email in the database for the specific user
        $sql = "UPDATE users SET email = '$email' WHERE id = 1"; // Assuming the user's ID is 1
        if ($conn->query($sql) === TRUE) {
            echo "Email updated successfully";
        } else {
            echo "Error updating email: " . $conn->error;
        }
    }

    // Handle the profile picture upload request
    if (isset($_FILES['profilePic'])) {
        $file = $_FILES['profilePic'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];

        // Specify the directory to upload the profile pictures
        $uploadDirectory = "uploads/";

        if ($fileError === 0) {
            $destination = $uploadDirectory . $fileName;
            if (move_uploaded_file($fileTmpName, $destination)) {
                // Run an SQL query to update the profile picture path in the database for the specific user
                $sql = "UPDATE users SET profile_pic = '$destination' WHERE id = 1"; // Assuming the user's ID is 1
                if ($conn->query($sql) === TRUE) {
                    echo "Profile picture uploaded successfully";
                } else {
                    echo "Error updating profile picture: " . $conn->error;
                }
            } else {
                echo "Error uploading profile picture";
            }
        } else {
            echo "Error uploading profile picture: " . $fileError;
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <br><br>

    <h2>User Details:</h2>

    <?php
    // Retrieve the user details from the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE id = 1"; // Assuming the user's ID is 1
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Profile Picture: <br>";
        if ($row['profile_pic']) {
            echo "<img src='" . $row['profile_pic'] . "' alt='Profile Picture' width='200'><br>";
        } else {
            echo "No profile picture uploaded";
        }
    } else {
        echo "No user found";
    }

    $conn->close();
    ?>

</body>
</html>
