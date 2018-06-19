<?php
include('studlogin.php'); 
if(isset($_SESSION['login_user'])){
    header("location: studenthome/studprofile.php");    
}    
else{
    echo "<script type=\"text/javascript\">
    alert('Invalid User Details. Please Try Again.');
    window.location='index.php';
    </script>";
}
    
?> 