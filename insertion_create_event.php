
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve input values from the form
    $event=$_POST["event"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $ticket = $_POST["ticket"];
    $venue = $_POST["venue"];
    $description = $_POST["description"];
    

    // SQL statement to insert data into a table
    $sql = "INSERT INTO event (EventName ,Date,Timing,Tickets_Available,Venue,Description) VALUES ('$event','$date','$time','$ticket','$venue','$description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Event Created successfully')</script>";
        header('location:events_info.php');
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
?>
