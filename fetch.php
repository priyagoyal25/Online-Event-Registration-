<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve input values from the form
    $email = $_POST["username"];
    $passwd = $_POST["password"];
    $sql = "SELECT * FROM signup where Email='$email' and Password='$passwd' ";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['email'] = $row['Email'];
        if(!isset($_SESSION['email']))
        header('location:login.php');
        else 
        header('location:events_info.php');
    }
    else {
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>
