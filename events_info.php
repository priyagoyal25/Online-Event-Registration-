<?php
session_start();
?>
<html>
<head>
    <title>Events</title>
    <link rel="stylesheet" href="css/events_info.css">
</head>
<body>
<div class="navbar"><div class="float">event registration</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="index.php#snapshot">SnapShots</a></li>
            <li><a href="create_event.php">Create an event</a></li>
            <li><a href="index.php#contact">Contact us</a></li>
            <li><a class="active "href="tickets.php">Register For Event</a></li>
            <!-- <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li> -->
        </ul>
    </div>

    <?php include "connection.php"?>

    <!-- Retrieve event details from the database -->
    <?php
    $sql = "SELECT * FROM event";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h3>Event: " . $row["EventName"] . "</h3>";
            echo "<p>Date: " . $row["Date"] . "</p>";
            echo "<p>Time: " . $row["Timing"] . "</p>";
            echo "<p>Ticket: " . $row["Tickets_Available"] . "</p>";
            echo "<p>Venue: " . $row["Venue"] . "</p>";
            echo "<p>Description: " . $row["Description"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "No events found.";
    }
    ?>
</body>
</html>
