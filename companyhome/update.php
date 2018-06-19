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

$sql = "UPDATE companyLogin SET companyname='$_POST[companyname]', domain='$_POST[domain]', city='$_POST[city]', website='$_POST[website]', description='$_POST[description]' WHERE email='$login_session'";
$result = $conn->query($sql);

if($conn->query($sql)){
    echo "<script type=\"text/javascript\">
        alert('The profile has been updated!');
        window.location='compprofile.php';
        </script>";
}
else
    echo "Error".$sql."<br>".$conn->error;
    

?>