<?php
include('complogin.php'); 
if(isset($_SESSION['login_user'])){
    header("location: companyhome/compprofile.php");    
}    
else{
    echo "<script type=\"text/javascript\">
    alert('Invalid User Details. Please Try Again.');
    window.location='index.php';
    </script>";
}
    
?>
