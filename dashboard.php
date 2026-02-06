<?php
session_start();
// if (!isset($_SESSION["user_id"])) {
//     header("Location: index.html");
//     exit();
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome to the Admin Dashboard</h2>
    <p>You have successfully logged in!</p>
    <a href="logout.php">Logout</a>
</body>
</html>