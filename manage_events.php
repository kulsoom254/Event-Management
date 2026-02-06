<?php
// manage_events.php

// Connect to the database
$conn = new mysqli("localhost", "root", "", "csefest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events
$sql = "SELECT * FROM events";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td a {
            color: #007bff;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
        .container {
            margin: 0 auto;
            max-width: 900px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Event Management Dashboard</h2>
            <a href="add_event.php" style="background-color: #4CAF50; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">Add New Event</a>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Participants</th>
                <th>Image</th>
                <th>Type ID</th>
                <th>Actions</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Ensure the image exists before displaying
                    $imgSrc = !empty($row['img_link']) ? $row['img_link'] : 'default_image.jpg'; // You can set a default image if the link is empty
                    echo "<tr>
                            <td>{$row['event_id']}</td>
                            <td>{$row['event_title']}</td>
                            <td>{$row['event_price']}</td>
                            <td>{$row['participents']}</td>
                            <td><img src='{$imgSrc}' alt='Event Image' width='100'></td>
                            <td>{$row['type_id']}</td>
                            <td>
                                <a href='edit_event.php?id={$row['event_id']}'>Edit</a> | 
                                <a href='delete_event.php?id={$row['event_id']}' onclick='return confirmDelete()'>Delete</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No events found.</td></tr>";
            }
            ?>

        </table>
    </div>

    <script>
        // Confirmation prompt for delete action
        function confirmDelete() {
            return confirm("Are you sure you want to delete this event?");
        }
    </script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>