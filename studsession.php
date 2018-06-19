<?php

$conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");
session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT email from studentLogin where email = '$user_check'";

$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session2 = $row['email'];

?>
