<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "csefest";

$conn = new mysqli($host, $user, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $participants = $_POST['participants'];
    $image = $_POST['image'];
    $type_id = $_POST['type_id'];

    $sql = "INSERT INTO events (event_title,event_price, participents, img_link, type_id)
            VALUES ('$title', '$price', '$participants', '$image', '$type_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_events.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Add New Event</h2>
<form method="POST" action="">
    Title: <input type="text" name="title"><br><br>
    Price: <input type="text" name="price"><br><br>
    Participants: <input type="text" name="participants"><br><br>
    Image URL: <input type="text" name="image"><br><br>
    Type ID: <input type="text" name="type_id"><br><br>
    <input type="submit" value="Add Event">
</form>