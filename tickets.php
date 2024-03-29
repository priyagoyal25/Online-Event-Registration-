<?php 
session_start();
?>
<html>
    <head>
        <title>Confirm Ticket</title>
        <link rel="stylesheet" href="css/tickets.css">
    <script>
        function resetForm(){
            document.getElementById("form1").reset();
            document.getElementById("form2").reset();
        }
    </script>
    </head>
    <body>
        <div class="navbar"><div class="float">event registration</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="index.php#snapshot">SnapShots</a></li>
            <li><a href="create_event.php">Create an event</a></li>
            <li><a href="index.php#contact">Contact us</a></li>
            <!-- <li><a href="/NSP project/loginpage.html">Login</a></li>
            <li><a href="/NSP project/signup.html">Signup</a></li> -->
        </ul>
        </div>


        <div class="container">
        <div class="box1">Entry Pass</div>
        <div class="box2">Personal Info
        
        <form id="form1">
            <table>
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type=text size=20px maxlength=30 required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type=email size=20px></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone no:</label>
                    </td>
                    <td>
                        <input type=tel size=20px required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Adhaar no:</label>
                    </td>
                    <td>
                        <input type=number size=20px maxlength=10 required></input>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Nationality:</label>
                    </td>
                    <td>
                        <select required>
                            <option selected="True">-Select-</option>
                            <option>India</option>
                            <option>USA</option>
                            <option>Thailand</option>
                            <option>Srilanka</option>
                            <option>Pakistan</option>
                            <option>Australia</option>
                            <option>China</option>
                            <option>Russia</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>UAE</option>
                            <option>Afghanistan</option>
                            <option>Nepal</option>
                            <option>Indonesia</option>
                            <option>Bangladesh</option>
                            <option>Japan</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
        </div>

        
        <div class="box3">Event Info
            <form id="form2">
                <table>

                    <tr>
                        <td>
                            <label>Event Name:</label>
                        </td>
                        <td>
                            <input type=text size=20px maxlength=50 placeholder="The National Conference"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Date:</label>
                        </td>
                        <td>
                            <input type=date size=20px></input>
                        </td>
                    </tr>


                <tr>
                    <td>
                        <label>Timing:</label>
                    </td>
                    <td>
                        <input type=time size=20px ></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Venue:</label>
                    </td>
                    <td>
                        <input type=text size=20px maxlength=100></input>
                    </td>
                </tr>
    
                </table>
            
            <button type="button" name="download">Download</button>
            <button type="submit" name="submit">Confirm</button>
            <button type="reset" onclick="resetForm()" name="reset">Cancel</button>
              </form>     
            </div>
        </div>
        
        
    </body>
</html>