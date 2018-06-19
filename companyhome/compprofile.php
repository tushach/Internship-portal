<?php

    include('../compsession.php');

    if(!isset($_SESSION['login_user'])){
        header("location: ../index.php");
    }

    ?>

    <?php
    $conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT companyname, email, domain, website, description FROM companyLogin WHERE email='$login_session'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $companyname=$row["companyname"];
            $email=$row["email"];
            $domain=$row["domain"];
            $website=$row["website"];
            $description=$row["description"];
        }  
    } else {
        echo "0 results";
    }

    $sql2 = "SELECT company, position, description, skills, contact, date, time FROM internships WHERE contact='$login_session'";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result2->fetch_assoc()) {
            $company=$row2["company"];
            $position=$row2["position"];
            $description=$row2["description"];
            $skills=$row2["skills"];
            $contact=$row2["contact"];
            $date=$row2["date"];
            $time=$row2["time"];               
        }
        
        $rowcount=mysqli_num_rows($result2); //COUNT NUMBER OF ROWS
        
    } else {
        echo "0 results";
    }



    //STORE ROWS DATA IN AN ARRAY STARTS
    $lol = "SELECT * FROM internships WHERE contact='$login_session'";
    $lol_result = $conn->query($lol) or die(mysqli_error($conn)) ;
     $array = array();//create empty array
        
     while($row = $lol_result->fetch_array()){//loop to get all results
         $array[] = $row;//grab everything and store inside array
     }        
    //STORE ROWS DATA IN AN ARRAY ENDS



    $conn->close();
    ?>



        <?php        
    $conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
     
    //COUNTER LOGIC STARTS
    $counter=0;
    $lol2 = "SELECT description FROM internships WHERE contact='$login_session'";
    $lol2_result = $conn->query($lol2) or die(mysqli_error($conn)) ;
    $array2 = array();//create empty array
        
    while($row = $lol2_result->fetch_array()){//loop to get all results
        $counter++;
    }  
    //COUNTER LOGIC ENDS
    ?>




        <!DOCTYPE html>
        <html>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html,
            body,
            h1,
            h2,
            h3,
            h4,
            h5 {
                font-family: "Open Sans", sans-serif
            }

        </style>

        <body class="w3-theme-l5">

            <!-- Navbar -->
    <div class="w3-top">
     <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="compprofile.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
     
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-padding-large" title="My Account"><i class="fa fa-user"></i></button> 
        <div class="w3-dropdown-content w3-card-2 w3-bar-block" style="width:300px">
          <a href="editprofile.php" class="w3-bar-item w3-button">Edit Profile</a>       
            <a class="w3-bar-item w3-button w3-hover-dark-grey w3-hide-small w3-right" onclick="document.getElementById('id01').style.display='block'">Delete Profile</a>
          <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
        </div> 
      </div>         
     </div>
    </div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
 
          <a href="editprofile.php" class="w3-bar-item w3-button w3-padding-large">Edit Profile</a>
          <a class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('id01').style.display='block'; toggleFunction();">Delete Profile</a> 
    
  <a href="../logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
</div>

    
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:550px">
            <header class="w3-container w3-dark-grey"> 
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-dark-grey w3-xlarge w3-display-topright">&times;</span>
            <h3>Are you sure you want to delete this account?</h3>
            </header>

        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <div id="delete" class="w3-container login">                
                <form class="w3-container" action="deleteprofile.php" method="POST">
                    <div class="w3-section">           
                       <a href="deleteprofile.php" class="w3-bar-item w3-button">Yes</a>       
                       <a href="compprofile.php" class="w3-bar-item w3-button">No</a>                     
                    </div>
                </form>

            </div>
      </div>
           

    </div>

            <!-- Page Container -->
            <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
                <!-- The Grid -->
                <div class="w3-row">
                    <!-- Left Column -->
                    <div class="w3-col m3">
                        <!-- Profile -->
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container">
                                <h4 class="w3-center">My Profile</h4>
                                <p class="w3-center"><img src="../Images/company%20avatar.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                                <hr>
                                <p><i class="fa fa-vcard fa-fw w3-margin-right w3-text-theme"></i>
                                    <?php echo $companyname;?> </p>
                                <p><i class="fa fa-usb fa-fw w3-margin-right w3-text-theme"></i>
                                    <?php echo $domain;?> </p>
                                <p><i class="fa fa-chain fa-fw w3-margin-right w3-text-theme"></i>
                                    <?php echo $website;?> </p>
                            </div>
                        </div>
                        <br>

                        <!-- Accordion -->
                        <div class="w3-card w3-round">
                            <div class="w3-white">
                                <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Posted Internships </button>
                                <div id="Demo1" class="w3-hide w3-container">
                                    <p>
                                        <?php
                for($i=0; $i<$counter; $i=$i+1){
                    ?>

                                            <p>
                                                <?php echo $i+1 .". ".$array[$i]['position']?> posted on
                                                <?php echo $array[$i]['date']." ".$array[$i]['time'];?>
                                            </p><br/>

                                            <?php
                    }       
                ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- End Left Column -->
                    </div>


                    <!-- Middle Column -->
                    <div class="w3-col m7">
                        <h4> &nbsp &nbsp Your Posted Internships:</h4>


                        <?php
        for($i=0; $i<$counter; $i=$i+1){
            ?>
                            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                                <img src="../Images/company%20avatar.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                <span class="w3-right w3-opacity"><?php echo $array[$i]['date']." ".$array[$i]['time']; ?></span>
                                <h4>
                                    <?php echo $array[$i]['company']." - ".$array[$i]['position'];?>
                                </h4><br>
                                <hr class="w3-clear">
                                <p>
                                    <?php echo "Description:<br/>".$array[$i]['description']."<br/><br/><br/>"."Skills:<br/>".$array[$i]['skills'];?></p>                                
                            </div>

                            <?php
        }       
    ?>
                                <!-- End Middle Column -->
                    </div>


                    <!-- Right Column -->
                    <div class="w3-col m2">
                        <div class="w3-card w3-round w3-white w3-center">
                            <div class="w3-container">
                                <p>Post an internship:</p>
                                <img src="../Images/Bojacks.png" alt="Forest" style="width:100%;">
                                <p><button class="w3-button w3-block w3-theme-l4" type="button" value="Post" onclick="window.location.href='postinternship.html'">Post</button></p>
                            </div>
                        </div>
                        <br>

                        <!-- End Right Column -->
                    </div>

                    <!-- End Grid -->
                </div>

                <!-- End Page Container -->
            </div>
            <br>

            <!-- Footer -->

            <footer class="w3-container w3-theme-d5">
                <p>© Copyright 2018 Internation</p>
            </footer>

            <script>
                // Accordion
                function myFunction(id) {
                    var x = document.getElementById(id);
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                        x.previousElementSibling.className += " w3-theme-d1";
                    } else {
                        x.className = x.className.replace("w3-show", "");
                        x.previousElementSibling.className =
                            x.previousElementSibling.className.replace(" w3-theme-d1", "");
                    }
                }

                // Used to toggle the menu on smaller screens when clicking on the menu button
                function openNav() {
                    var x = document.getElementById("navDemo");
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
                }

            </script>
        </body>

        </html>
