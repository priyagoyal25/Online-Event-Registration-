
<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve input values from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message=$_POST["message"];

    // SQL statement to insert data into a table
    $sql = "INSERT INTO contact (Name,Email,Message) VALUES ('$name','$email','$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully')</script>";
        header('location:index.php');
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
?>
