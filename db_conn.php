<?php

$firstname = "localhost"; 
$lastname = "root"; 
$email = ""; 
$newpassword=""; 
$companyname=""; 
$db_name = "upload";  
$conn = mysqli_connect($firstname, $lastname, $email,$newpassword,$companyname ,$db_name);

if (!$conn) { 
    echo "Connection failed!";    
} else{
    echo "Successfully connected";
}  
?>

