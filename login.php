<html>
    <head>
        <title>LOGIN PAGE</title>
        <script src="https://kit.fontawesome.com/c21410e9fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/login.css">
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
        <?php include "fetch.php" ?>
        <div class="navbar"><div class="float">event registration</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="index.php#snapshot">SnapShots</a></li>
            <li><a href="create_event.php">Create an event</a></li>
            <li><a href="index.php#contact">Contact us</a></li>
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
        </div>
        <div class="container">
        <form action="" method="Post">
            <br>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <label>USERNAME:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Email" name="username" required >
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>PASSWORD:</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" placeholder="Password" name="password" id="passwrd" required >
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <h3><input type="checkbox" onclick="myFunction()">Show password</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <h3><input type="checkbox" checked="true" >Rememeber me</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" >Login</button>
                            
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <h4>&nbsp OR &nbsp </h4>
                            <center><a href="https://www.google.co.in/"><img src="images/googleimage.png" width="42px"></a>
                                <a href="https://www.facebook.com/" ><img src="images/facebookimage.png" width="40px" ></a></center>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </form>
        </div>
        
    </body>
</html>