<?php
$firstname=filter_input(INPUT_POST, 'firstname');
$lastname=filter_input(INPUT_POST, 'lastname');
$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST, 'password');
$dob=filter_input(INPUT_POST, 'dob');
$gender=filter_input(INPUT_POST, 'gender');
$course=filter_input(INPUT_POST, 'course');
$city=filter_input(INPUT_POST, 'city');

$conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");
        
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

else{
    $sql="INSERT INTO studentLogin (firstname, lastname, email, password, dob, gender, course, city)
    values('$firstname', '$lastname', '$email', '$password', '$dob', '$gender', '$course', '$city')";
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