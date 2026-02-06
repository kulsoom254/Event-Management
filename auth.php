<?php
session_start();

header('Content-Type: application/json');

$host = "localhost";
$dbname = "csefest";
$username = "root";
$password = "";



$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "DB connection failed"]);
    exit;
}

// Handle Login
if (isset($_POST['loginUsername'], $_POST['loginPassword'])) {
    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];

    $stmt = $conn->prepare("SELECT password_hash FROM user WHERE username = ?");
    $stmt->bind_param("s", $loginUsername);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($passwordHash);
        $stmt->fetch();

        if (password_verify($loginPassword, $passwordHash)) {
            $_SESSION['username'] = $loginUsername;
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Invalid password"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "User not found"]);
    }
    $stmt->close();
}

// Handle Registration
elseif (isset($_POST['registerUsername'], $_POST['registerPassword'], $_POST['collegeName'])) {
    $registerUsername = $_POST['registerUsername'];
    $registerPassword = $_POST['registerPassword'];
    $collegeName = $_POST['collegeName'];

    $hashedPassword = password_hash($registerPassword, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO user (username, college_name, password_hash) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $registerUsername, $collegeName, $hashedPassword);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Registration successful! You can now login."]);
    } else {
        echo json_encode(["success" => false, "message" => "Username or email already exists."]);
    }
    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}

$conn->close();
