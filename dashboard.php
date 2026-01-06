<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

// Theme from cookie
$theme = $_COOKIE['theme'] ?? "light";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: <?= $theme == "dark" ? "#000" : "#fff" ?>;
            color: <?= $theme == "dark" ? "#fff" : "#000" ?>;
            font-family: Arial;
        }
    </style>
</head>
<body>

<h2>Welcome, <?= $_SESSION['name']; ?> 👋</h2>

<nav>
    <a href="dashboard.php">Dashboard</a> |
    <a href="preference.php">Theme Preference</a> |
    <a href="logout.php">Logout</a>
</nav>

<p>This is your student dashboard.</p>

</body>
</html>
