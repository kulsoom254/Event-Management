<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "csefest");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the event ID from the URL
if (isset($_GET['id'])) {
    $event_id = $_GET['id'];

    // Delete query
    $sql = "DELETE FROM events WHERE event_id = $event_id";

    if ($conn->query($sql) === TRUE) {
        echo "Event deleted successfully.";
    } else {
        echo "Error deleting event: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Redirect back to manage_events.php after 2 seconds
header("refresh:2;url=manage_events.php");

$conn->close();
?>