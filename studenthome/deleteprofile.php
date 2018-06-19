<?php

include('../studsession.php');

if(!isset($_SESSION['login_user'])){
    header("location: ../index.php");
}

?>


<?php
$conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM studentLogin WHERE email='$login_session2'";
$result = $conn->query($sql);

if($conn->query($sql)){
    echo "<script type=\"text/javascript\">
        alert('Profile has been deleted successfully!');
        window.location='../index.php';
        </script>";
}

else
    echo "Error".$sql."<br>".$conn->error;
?>