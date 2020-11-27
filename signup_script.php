<?php
    require 'includes/common.php';

    $name=$_POST['name'];
    $name= mysqli_real_escape_string($con, $name);
    
    $email=$_POST['email'];
    $email= mysqli_real_escape_string($con, $email);
    
    $password=$_POST['password'];
    $password=mysqli_real_escape_string($con, $password);
    
    $contact=$_POST['contact'];
    $contact=mysqli_real_escape_string($con, $contact);
    
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $regex_num = "/^[789][0-9]{9}$/";
    
    $query="SELECT id FROM users WHERE email='$email'";
    $result= mysqli_query($con, $query);
    $rows_fetched=mysqli_num_rows($result);
    
    if($rows_fetched > 0) {
        $e="<span class='red'>Email already exists</span>";
        header('location:signUp.php?error='.$e);
        
    } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
    
    } else{
        $user_registration_query="INSERT INTO users(name, email, password, contact)VALUES('".$name."', '".$email."', '".$password."', '".$contact."')";
        $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
        $user_id= mysqli_insert_id($con);
        $_SESSION['email']=$email;
        $_SESSION['user_id']=$user_id;
        header('location:home.php');
    }
?>