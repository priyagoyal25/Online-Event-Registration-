<html>

<head>
    <title>SIGNUP PAGE</title>
    <script src="https://kit.fontawesome.com/c21410e9fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/signup.css">
    <script>
        function myFunction() {
            var x = document.getElementById("passwrd");
            if (x.type === "password") {
                x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
        
    </script>
</head>

<body>
    <?php include "connection.php" ?>
    <?php include "insertion.php" ?>
   
     <div class="navbar">
        <div class="float">event registration</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="index.php#snapshot">SnapShots</a></li>
            <li><a href="create_event.php">Create an event</a></li>
            <li><a href="index.php#contact">Contact us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a class="active" href="signup.php">Signup</a></li>
        </ul>
    </div> 
     <div class="container">
        <form action="" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
             else { alert('Please indicate that you have read and agree to the Terms and Conditions.'); 
             return false; }">

            <br>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <label>Name:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="box">
                                <input type="text" placeholder="First name" name="firstname" required id="first_name">
                                <input type="text" placeholder="Last name" name="lastname" required id="last_name">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" placeholder="Email address" name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Create a password:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" placeholder="Password" name="password" id="passwrd" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><input type="checkbox" onclick="myFunction()">Show
                                password</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 ><input type="checkbox" checked="true" id="agree">I Agree to the <a
                                    href="terms.php">Terms & conditions</a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" id="submit">Register</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div> 
</body>

</html>