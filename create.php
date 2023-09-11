<?php

if (isset($_POST['Firstname'])  
    && isset($_POST['Lastname']) 
    && isset($_POST['Email']) 
    && isset($_POST['Newpassword']) 
    && isset($_POST['Companyname'])) {

    include "../db_conn.php";   
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Newpassword = $_POST['Newpassword'];
    $Companyname = $_POST['Companyname'];

        if (empty($email)) {
            header("Location: ../index.php?Email is required");
            exit;
        }else {
            if (isset($_POST['Signup'])) {
                $Signup = "Yes";
            }else {
                $Signup= "No";
            }
            $sql = "INSERT INTO users(firstname, lastname,email,newpassword, companyname)VALUES('$firstname','$lastname','email','newpassword','companyname')";
            $result = mysql_query($conn, $sql);

            if ($result) {
                $ms = "Successfully created";
                header("Location: ../index.php?ms=");
                exit;
            }else {
                $ms = "unknown error";
                header("Location: ../index.php?ms=");
                exit;
            }

        }

    }else {
        header("Location: ../index.php");
        exit;
    }
?>