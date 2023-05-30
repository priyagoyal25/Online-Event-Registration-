<?php 
session_start();
?>
<html>
    <head>
        <title>Terms & Conditions</title>
        <style>
            .box{
                width:30%;
                height:80%;
                border:3px solid black;
                margin-top:20px;
                border-radius:50px;
                box-shadow: 0px 0px 25px 0px rgb(30, 29, 29);
            }
            h1{
                margin-top:30px;
                font-size:30px;
                font-family: 'Times New Roman', Times, serif;
                text-align:center;
                text-decoration: underline;
            }
            button{
                margin-top:40px;
                margin-left:70%;
                padding:10px 30px;
                color:black;
                background-color:rgb(190, 201, 200);
                border: none;
                border-radius: 25px;
            }
            a{
                text-decoration: none;
            }
            button:hover{
                text-decoration: underline;
            }
            li{
                text-align: justify;
                margin-top:15px;
                margin-left: 0px;
                margin-right: 10px;
                font-family: 'Times New Roman', Times, serif;
            }
            body{
                background-color: #f2f2f2;
                background-image: url("images/background3.jpg");
                background-size:1600px 800px;
            }
        </style>
    </head>
    <body>
        <h1>Terms & Conditions</h1>
        <center>
        <div class="box">
            <ul>
                <h3>
                <li>
                    A Terms and Conditions agreement outlines the terms that visitors must agree to 
                    if they want to interact with your website. Essentially, 
                    if the visitor continues to use the website after accepting the Terms,
                    they enter into a contract with you.
                </li>
                <li>
                    The purpose of a Terms and Conditions agreement is to prevent misunderstandings between the business owner (you),
                     and the consumer. The agreement helps you:
                </li>
                <li>
                    Tickets can be booked only once for one person. Details can not be updated .
                </li>
                <li>
                    For updation or any query you have to contact with event organisers or site developers.
                </li>
                <li>
                    Details must be correct. we provide you facility to attend events with passes without struggling for tickets in line.
                    Support us by providing correct information.
                </li>
                </h3>
            </ul>
            
            <button onclick="history.back()">Ok</button>
        </div>
        </center>
    </body>
</html>