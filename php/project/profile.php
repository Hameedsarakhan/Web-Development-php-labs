<?php
$host = 'localhost'; 
$dbName = 'questionnaire2'; 
$username = 'root'; 
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

// Check if the 'id' parameter exists in the URL
if (!isset($_GET['id'])) {
  die("User ID not provided");
}

$userID = $_GET['id'];

$query = "SELECT name, email FROM users WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $userID);
$stmt->execute();

// Fetch the user profile data
$userProfile = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$userProfile) {
  die("User not found");
}

// Return the user profile data as JSON
header('Content-Type: application/json');
echo json_encode($userProfile);
?>


