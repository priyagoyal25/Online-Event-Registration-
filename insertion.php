<!-- Check if form is submitted  -->
<?php
// error_reporting(0); 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve input values from the form
    $f_name = $_POST["firstname"];
    $l_name = $_POST["lastname"];
    $email = $_POST["email"];
    $passwd = $_POST["password"];
    $event=$_POST["event"];

    // SQL statement to insert data into a table
    $sql = "INSERT INTO signup (FirstName,LastName,Email,Password) VALUES ('$f_name','$l_name','$email','$passwd')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Sign Up successfully')</script>";
        header('location:login.php');
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
?>
