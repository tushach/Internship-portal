<?php

include('../compsession.php');

if(!isset($_SESSION['login_user'])){
    header("location: ../index.php");
}

?>


    <?php
$conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM companyLogin WHERE email='$login_session'";
$result = $conn->query($sql);    

?>



        <!DOC TYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <title>Edit Profile</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

        <style>
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            foote,
                {
                font-family: "Lato", sans-serif;
            }

            body,
            html {
                height: 100%;
                color: #777;
                line-height: 1.8;
            }

            footer {
                min-height: 7%
            }

            /* Create a Parallax Effect */

            .bgimg-1,
            .bgimg-2,
            .bgimg-3 {
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .bgimg-1 {
                background-image: url('../registration/Images/Comp_sign_up.jpg');
                min-height: 60%;
                background-position: bottom;
            }

            @media only screen and (max-device-width: 1024px) {
                .bgimg-1,
                .bgimg-2,
                .bgimg-3 {
                    background-attachment: scroll;
                }
            }

            .inputfield {
                width: 30%;
            }

        </style>

        <body>


            <!---Navigation On Top---->
            <div class="w3-top">
                <div class="w3-bar" id="myNavbar">
                    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
                    <a href="compprofile.php" class="w3-bar-item w3-button w3-hover-dark-grey">HOME</a>

                </div>
            </div>


            <!---Middle logo/text--->
            <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                <div class="w3-display-middle" style="white-space:nowrap;">
                    <span class="w3-center w3-padding-large w3-black w3-xxlarge w3-wide w3-animate-opacity">Edit Profile</span>
                </div>
            </div>

            <div class="w3-card-4">
                <div class="w3-container w3-dark-grey">
                    <h2>Edit Profile</h2>
                </div>
                <br>
                <form class="w3-container" action="update.php" method="POST">
                    <div class="w3-row-padding">

                        <div class="inputfield">
                            <p><label>Company Name</label>
                                <input class="w3-input w3-border w3-round" type="text" placeholder="Company Name" name="companyname" required></p>
                        </div>
                        <div class="inputfield">
                            <p>
                                <label>Domain</label>
                                <input class="w3-input w3-border w3-round" type="text" placeholder="Domain" name="domain" required></p>
                        </div>

                        <div class="inputfield">
                            <p><label>City</label>
                                <select class="w3-select" name="city" required>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Banglore">Banglore</option>
                    </select>
                            </p>
                        </div>

                        <div class="inputfield">
                            <p>
                                <label>Website</label>
                                <input class="w3-input w3-border w3-round" type="text" placeholder="website" name="website" required></p>
                        </div>

                        <div>
                            <p><label>Description</label><br>
                                <textarea rows="4" cols="50" name="description" required></textarea> </p>
                        </div>

                        <p><button class="w3-btn w3-dark-grey w3-hover-green w3-round  ">Update</button></p>
                    </div>

                    <br>
                </form>

            </div>


        </body>

        <footer class="w3-dark-grey w3-center">
            <div class="w3-display-bottom">
                <h4>Developed by students of Symbiosis Instutute of Technology</h4>
            </div>
        </footer>

        <script>
            function toggleFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
            window.onscroll = function() {
                myFunction()
            };

            function myFunction() {
                var navbar = document.getElementById("myNavbar");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
                } else {
                    navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
                }
            }

        </script>

        </html>
