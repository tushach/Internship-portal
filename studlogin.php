<?php

session_start(); 
$error = ''; 

if (isset($_POST['submit2'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
    }

else{
    $username = $_POST['email'];
    $password = $_POST['password'];
    
    $conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");
    $query = "SELECT email, password from studentLogin where email=? AND password=? LIMIT 1";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $password);
    $stmt->store_result();

    if($stmt->fetch()){
          $_SESSION['login_user'] = $username;
          header("location: studenthome/studprofile.php"); 
    }
    else{
       $error = "Email or Password is invalid";
    }
    
    mysqli_close($conn);
    }
}

?>
