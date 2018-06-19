<?php
$company=filter_input(INPUT_POST, 'company');
$position=filter_input(INPUT_POST, 'position');
$description=filter_input(INPUT_POST, 'description');
$skills=filter_input(INPUT_POST, 'skills');
$contact=filter_input(INPUT_POST, 'contact');

if(!empty($contact)){
    $conn=mysqli_connect("fdb20.your-hosting.net", "2701247_login", "rkp12345", "2701247_login");
// Check connection
if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
else{
    $sql = "INSERT INTO internships (company, position, description, skills, contact, date, time)
    VALUES ('$company', '$position', '$description', '$skills', '$contact', CURDATE(), CURTIME())";    
    if ($conn->query($sql) === TRUE) {
        echo "<script type=\"text/javascript\">
        alert('Internship has been posted!');
        window.location='compprofile.php';
        </script>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
    $conn->close();
} 

    
}
else{
        echo "Email should not be empty!";
        die();
    }    

?>