<?php
$companyname=filter_input(INPUT_POST, 'companyname');
$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST, 'password');
$domain=filter_input(INPUT_POST, 'domain');
$city=filter_input(INPUT_POST, 'city');
$website=filter_input(INPUT_POST, 'website');
$description=filter_input(INPUT_POST, 'description');

$conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");
        
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

else{
    $sql="INSERT INTO companyLogin (companyname, email, password, domain, city, website, description)
    values('$companyname', '$email', '$password', '$domain', '$city', '$website', '$description')";
    if($conn->query($sql)){
        echo "<script type=\"text/javascript\">
        alert('Profile has been created!');
        window.location='../index.php';
        </script>";
    }
    
    else
        echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>