<html>
    <head>
        <title>home page</title>
        <script src="https://kit.fontawesome.com/c21410e9fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/index.css">

    </head>
    <body>
        <div class="navbar"><div class="float">event registration</div>
            <ul>
                <li><a class="active " href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="#snapshot">SnapShots</a></li>
                <li><a href="create_event.php">Create an event</a></li>
                <li><a href="#contact">Contact us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
            </ul>
        </div>
        <div class="slideshow-container">
         <h3>WELCOME TO ALL !!</h3>
        </div>
        <h1>NOW IT'S TIME TO ENJOY !!</h1>
        <h2>EVERY MOMENT AND EVERY EVENT <br><br>
            OF<br><br>
            EVERY HUMAN'S LIFE <br><br>
            PLANTS SOMETHING IN THEIR SOUL...
        </h2>

      <div class="snapshot-container" id="snapshot">
        <h4><br>Event Snapshots</h4>
        <div class="box1">
        <img src="images/snap1.jpg">
        <img src="images/snap2.jpg">
        <img src="images/snap3.png">
        <img src="images/snap4.jpg">
        </div>
        <div class="box1" style="margin:0px;">
        <img src="images/snap5.jpg">
        <img src="images/snap6.jpeg">
        <img src="images/snap7.jpeg">
        <img src="images/snap8.jpeg">
        </div>
      </div>
       
       
        <div class="container" id="contact">
            <h4><br>Contact Us</h4>
            <div class="content">
                <div class="left-side">
                    <div class="phone details">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+91 8690769647</div>
                        <div class="text-two">+91 2583691473</div>
                    </div>
                    <div class="linkedin details">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <div class="topic">Linkedin</div>
                        <div class="text-one"><a href="https://www.linkedin.com/in/priya-goyal-549089230" target="_blank">https://www.linkedin.com/in/priya-goyal-549089230</a></div>
                    </div>
                    <div class="email details">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">2021pietcspriya132@poornima.org</div>
                        <div class="text-two">priyagoyal@gmail.com</div>
                    </div>
                </div>

                <?php include "connection.php"?>
                <?php include "contact.php"?>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                  <form action="" method="POSt">
                    <div class="input-box">
                      <input type="text"name="name" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                      <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box">
                        <input type="textarea" name="message" placeholder="Enter your message">
                    </div>
                    <div class="button">
                      <input type="submit" value="Send Now" >
                    </div>
                  </form>
                </div>
            
            </div>
            <div class="footer">
                <ul>
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li>
                        <a href="terms.php">Terms & Conditions</a>
                    </li>
                </ul> </div>
        </div>
        
        
    </body>
</html>
