<?php

include('../compsession.php');

if(!isset($_SESSION['login_user'])){
    header("location: ../index.php");
}

?>


<?php
$servername = "localhost";
$username = "id5124537_login";
$password = "rkp12345";
$dbname = "id5124537_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM companyLogin WHERE email='$login_session'";
$result = $conn->query($sql);

$sql2 = "DELETE FROM internships WHERE contact='$login_session'";
$result2 = $conn->query($sql2);



if($conn->query($sql)){
  echo '<script language="javascript">';
  echo 'alert("Profile has been deleted successfully!")';
  echo '</script>';
  exit;
}

else
    echo "Error".$sql."<br>".$conn->error;
?>