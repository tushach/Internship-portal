<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Internzip | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Internzip is an Internship Portal website made by Rajan, Sachin, Tushali and Ujjwal of Symbiosis Pune as a mini project.">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/CSS/style.css">
    </head> 
    
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
            height: 100%;
            color: #777;
            line-height: 1.8;
            }
        
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: fixed;
            
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bgimg-1 {
            background-image: url('/Images/editing%20back%201.jpg');
            min-height: 100%;
            background-position: center;
        }
        
        .bgimg-2 {
            background-image: url("/Images/cable-call-communication-33999.jpg");
            min-height: 300px;
            background-position: left;
        }

        
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            }
        }
    </style>
    
    <body>
        <!---Navigation On Top---->
    <div class="w3-top">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#home" class="w3-bar-item w3-button w3-hover-dark-grey">HOME</a>
            <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hover-dark-grey"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-dark-grey"><i class="fa fa-envelope"></i> CONTACT</a>
            <div class="w3-dropdown-hover w3-right w3-hide-small ">
                <button class="w3-button w3-hover-dark-grey">SIGN UP</button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="/registration/internzip-student.html" class="w3-bar-item w3-button w3-hover-dark-grey">Student</a>
                    <a href="/registration/internzip-company.html" class="w3-bar-item w3-button w3-hover-dark-grey">Company</a>
                </div>
            </div>
             <a class="w3-bar-item w3-button w3-hover-dark-grey w3-hide-small w3-right" onclick="document.getElementById('id01').style.display='block'">LOGIN</a>
     </div>
            
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
            <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
            <a class="w3-bar-item w3-button" onclick="document.getElementById('id01').style.display='block'; toggleFunction();">LOGIN</a>
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-hover-dark-grey">SIGN UP</button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="/registration/internzip-student.html" class="w3-bar-item w3-button">Student</a>
                    <a href="/registration/internzip-company.html" class="w3-bar-item w3-button">Company</a>
                </div>
            </div>
        </div>
    </div>
        
        <!----Start of Login Modal---->
        
        <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:550px">
            <header class="w3-container w3-dark-grey"> 
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-dark-grey w3-xlarge w3-display-topright">&times;</span>
            <h2>Login</h2>
            </header>

        <div class="w3-bar w3-border-bottom">
            <button class="tablink w3-bar-item w3-button" onclick="Login(event, 'student')">Student</button>
            <button class="tablink w3-bar-item w3-button" onclick="Login(event, 'company')">Company</button>
        </div>

        <div id="student" class="w3-container login">
            <h1>Internzip | Student Login</h1>                                  <!------STUDENT FORM POP UP---->
            <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="/Images/avatar_student.jpg" alt="Internzip | Student Login" style="width:30%" class="w3-circle w3-margin-top">
      </div>
            <br>
      <form class="w3-container" action="/studconnection.php" method="POST">
        <div class="w3-section">
          <label><b>Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Student Email" name="email" id="email" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password" required>
          <button class="w3-button w3-block w3-black w3-section w3-padding" type="submit" name="submit2">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
        

        <div id="company" class="w3-container login">
            <h1>Internzip | Company Login</h1>
            <div class="w3-center"><br>                                       <!------COMPANY FORM POP UP---->
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="/Images/company%20avatar.jpg" alt="Internzip | Company Login" style="width:30%" class="w3-circle w3-margin-top">
      </div>
            <br>
      <form class="w3-container" action="/compconnection.php" method="POST">
        <div class="w3-section">
          <label><b>Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Company Email" name="email" id="email" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password" required>
          <button class="w3-button w3-block w3-black w3-section w3-padding" type="submit" name="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
        </div>
        </div>
        
        <!----End of Login modal--->
        
        <!----Start of Sign up modal----->
       <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container w3-dark-grey"> 
                <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-dark-grey w3-xlarge w3-display-topright">&times;</span>
            <h2>Sign Up</h2>
            </header>

        <div id="student" class="w3-container signup">
            <h1><a href="registration/student.html" ">Student</a></h1>
        </div>

        <div id="company" class="w3-container signup">
            <h1><a href="registration/company.html" ">Company</a></h1>
        </div>


        <div class="w3-container w3-light-grey w3-padding">
        <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id02').style.display='none'">Close</button>
        </div>
        </div>
        </div>
        <!----End of Sign Up modal---->
        
        
    <!---Middle logo/text--->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">INTERNZIP</span>
    </div>
    </div>
        
    <!----About me Text--->
    <div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT US</h3>
    <p class="w3-center"><em>We create opportunities</em></p>
        <p>Internzip is an internship portal made for the students, by the students. On our platform, you will be able to find various forms of internship opportunities. At the core of the idea is the belief that internships, if managed well, can make a positive difference to the student, to the employer, and to the society at large. Hence, the ad-hoc culture surrounding internships in India should and would change. Internzip aims to be the driver of this change.</p>
    <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
        <img src="/Images/book-computer-design-326424.jpg" class="w3-round w3-image w3-hover-opacity-off" alt="Internzip | About Us" width="500" height="333">
    </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
            <p>Welcome to our website. Internzip is an internship platform, based out of Pune, India. Founded by Rajan, Sachin, Ujjwal and Tushali, students of Symbiosis International University Pune, in 2018, the website helps students find internships with organisations in India.</p>
        </div>
    </div>
        <br>
        <div class="w3-content w3-container w3-padding-10 w3-center">
        <p class="w3-center"><em><h3>Meet the team</h3></em></p>
        </div>
<!-----------Images-----------> 
        
    <div class="w3-row-padding ">

    <div class="w3-col s3 w3-display-container w3-opacity-min w3-hover-opacity-off">
      <img src="/Images/Rajan.jpg" style="width:100%; max-height: 190px" alt="Internzip | Rajan Pandey">
      <div class="w3-display-bottomright w3-large w3-container w3-padding-10 w3-black">
        Rajan
      </div>
    </div>

    <div class="w3-col s3 w3-display-container w3-opacity-min w3-hover-opacity-off">
      <img src="Images/sachin.jpg" style="width:100%;  max-height: 190px" alt="Internzip | Sachin Pothukuchi">
      <div class="w3-display-bottomright w3-large w3-container w3-padding-10 w3-black">
        Sachin
      </div>
    </div>

    <div class="w3-col s3 w3-display-container w3-opacity-min w3-hover-opacity-off">
      <img src="/Images/unnamed.jpg" style="width:100%;  max-height: 190px" alt="Internzip | Tushali Chetty">
      <div class="w3-display-bottomright w3-large w3-container w3-padding-10 w3-black">
        Tushali
      </div>
    </div>

    <div class="w3-col s3 w3-display-container w3-opacity-min w3-hover-opacity-off">
      <img src="/Images/ujjwal.jpg" style="width:100%; max-height: 190px" alt="Internzip | Ujjwal Jain">
      <div class="w3-display-bottomright w3-large w3-container w3-padding-10 w3-black ">
        Ujjwal
      </div>
    </div>

</div>


        
<br>
<br>
        
        <!----Contact us section---->
    <div class="bgimg-2 w3-display-container w3-opacity-min" id="contact">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white">CONTACT</span>
    </div>
    </div>
    <div class=" w3-panel">
    <div class="w3-large w3-margin-bottom w3-center"><br><br>
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Pune, India<br><br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +91 8796588371<br><br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: internshipportal69@gmail.com<br><br>
    </div>
    </div>    
        </div>
</body>
    
<script>
    function toggleFunction() 
    {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
}

    
    
    document.getElementsByClassName("tablink")[0].click();

function Login(evt, type) {
  var i, x, tablinks;
  x = document.getElementsByClassName("login");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(type).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
    
    document.getElementsByClassName("tablink")[0].click();
    function SignUP(evt, type) {
  var i, x, tablinks;
  x = document.getElementsByClassName("signup");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(type).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
    
    
</script>
</html>
