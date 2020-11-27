<?php
    require 'includes/common.php';
    
    $user_id=$_SESSION['user_id'];

    $title=$_POST['title'];
    $title= mysqli_real_escape_string($con, $title);
    
    $fromm=$_POST['fromm'];
    $fromm= mysqli_real_escape_string($con, $fromm);
    
    $too=$_POST['too'];
    $too=mysqli_real_escape_string($con, $too);
    
    $initial_budget=$_POST['initial_budget'];
    $initial_budget=mysqli_real_escape_string($con, $initial_budget);
    
    $people=$_POST['people'];
    $people=mysqli_real_escape_string($con, $people);
    
    $person1=$_POST['person1'];
    $person1=mysqli_real_escape_string($con, $person1);
    
    $person2=$_POST['person2'];
    $person2=mysqli_real_escape_string($con, $person2);
    
    $user_registration_query="INSERT INTO plans(user_id, title, fromm, too, initial_budget, people, person1, person2)VALUES('".$user_id."', '".$title."', '".$fromm."', '".$too."', '".$initial_budget."', '".$people."', '".$person1."', '".$person2."')";
    $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $user_id= mysqli_insert_id($con);
    header('location:home.php');
?>