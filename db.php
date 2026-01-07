<?php
if ($_SERVER['SERVER_NAME'] == "localhost") {
    // LOCAL
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "student_portal";
} else {
    // SERVER
    $host = "localhost";
    $user = "np03cs4a240043";
    $password = "ZcTaqAnZjf";
    $database = "np03cs4a240043";
}

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

