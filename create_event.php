<?php 
session_start();
?>
<html>

<head>
<title>CREATE AN EVENT</title>
<link rel="stylesheet" href="css/create_event.css">
</head>
<body>
    <?php include "connection.php" ?>
    <?php include "insertion_create_event.php" ?>
    
    <div class="navbar"><div class="float">event registration</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="index.php#snapshot">SnapShots</a></li>
            <li><a class="active" href="create_event.php">Create an event</a></li>
            <li><a href="index.php#contact">Contact us</a></li>
            <li><a href="login.php" id="login">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="box1">Create New Event</div>
        <div class="box2">Enter Basic Event Details</div>
        <form action="" method="POST" >
            <table>
            <tr>
                <td>
                    <label>Event Name:</label>
                </td>
                <td>
                    <input type=text size=20px maxlength=50 placeholder="The National Conference" name="event"required></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Date:</label>
                </td>
                <td>
                    <input type=date size=20px name="date" required></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Timing:</label>
                </td>
                <td>
                    <input type=time size=20px name="time" required ></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tickets Available:</label>
                </td>
                <td>
                    <input type=date size=20px name="ticket" required ></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Venue:</label>
                </td>
                <td>
                    <input type=text size=20px maxlength=100 name="venue" required></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Description:</label>
                </td>
                <td>
                    <input type=textarea size=20px maxlength=3000 name="description" required></input>
                </td>
            </tr>

            </table>
            <button type="submit" name="submit">Create</button>
            <button type="reset" name="reset" >Cancel</button>
            <button onclick="history.back()">Go back</button>     
        </form>
    </div>



</body>
</html>

