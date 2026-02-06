<?php
// edit_event.php

$conn = new mysqli("localhost", "root", "", "csefest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// STEP 1: Get the event ID from URL
if (!isset($_GET['id'])) {
    echo "No event ID provided.";
    exit;
}

$event_id = $_GET['id'];

// STEP 2: Handle the form submission (update event)
if (isset($_POST['update'])) {
    $title = $_POST['event_title'];
    $price = $_POST['event_price'];
    $participants = $_POST['participants'];
    $img_link = $_POST['img_link'];
    $type_id = $_POST['type_id'];

    $update_sql = "UPDATE events SET 
        event_title = '$title',
        event_price = '$price',
        participants = '$participants',
        img_link = '$img_link',
        type_id = '$type_id'
        WHERE event_id = $event_id";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: manage_events.php");
        exit;
    } else {
        echo "Error updating event: " . $conn->error;
    }
}

// STEP 3: Fetch current event details
$sql = "SELECT * FROM events WHERE event_id = $event_id";
$result = $conn->query($sql);

if ($result->num_rows !== 1) {
    echo "Event not found.";
    exit;
}

$event = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
</head>
<body>
    <h2>Edit Event</h2>
    <form method="POST" action="">
        <label>Title:</label><br>
        <input type="text" name="event_title" value="<?php echo $event['event_title']; ?>"><br><br>

        <label>Price:</label><br>
        <input type="number" name="event_price" value="<?php echo $event['event_price']; ?>"><br><br>

        <label>Participants:</label><br>
        <input type="number" name="participants" value="<?php echo $event['participents']; ?>"><br><br>

        <label>Image Link:</label><br>
        <input type="text" name="img_link" value="<?php echo $event['img_link']; ?>"><br><br>

        <label>Type ID:</label><br>
        <input type="number" name="type_id" value="<?php echo $event['type_id']; ?>"><br><br>

        <input type="submit" name="update" value="Update Event">
    </form>
</body>
</html>

<?php $conn->close(); ?>