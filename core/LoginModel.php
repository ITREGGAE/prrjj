<?php
session_start();

    function login($em, $pass)
    {
        include("../php/config.php");
        $email = mysqli_real_escape_string($con, $em);
        $password = mysqli_real_escape_string($con, $pass);

        $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['id'] = $row['Id'];
            
            return true;
        }
        return false;
    }