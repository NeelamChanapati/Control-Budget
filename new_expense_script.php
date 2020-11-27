<?php
    require 'includes/common.php';

     $user_id=$_SESSION['user_id'];
    
    $title=$_POST['title'];
    $title= mysqli_real_escape_string($con, $title);
    
    $date=$_POST['date'];
    $date= mysqli_real_escape_string($con, $date);
    
    $amount_spent=$_POST['amount_spent'];
    $amount_spent=mysqli_real_escape_string($con, $amount_spent);
    
    $person=$_POST['person'];
    $person=mysqli_real_escape_string($con, $person);
    
    $user_registration="INSERT INTO expenses(user_id, title, date, amount_spent, choose_person)VALUES('".$user_id."','".$title."', '".$date."', '".$amount_spent."', '".$person."')";
    $user_registration= mysqli_query($con, $user_registration) or die(mysqli_error($con));
    $user_id= mysqli_insert_id($con);
    header('location:view_plan_page.php');
?>