<?php
    require 'includes/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Material icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" text="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jquery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Style.css">
        <title>Ctrl_Budget</title>
        <style>
            .panel-style{
                width: 200px;
                padding-top: 50px;
                padding-bottom: 50px;
                margin-top: 50px;
            }
            .panel{
                width: 23%;
            }
            #panelb{
                padding-left: 35px;
            }
            @media(max-width:991px){
                .panel{
                    width: 50%;
                }
            }
            @media(max-width: 438px){
                .panel{
                    width: 90%;
                }
            }
        </style>
    </head>
    <body class="body" style="background-color: #f4fcf8">
        <?php 
            include 'includes/header.php';
            
            $user_id = $_SESSION['user_id'];
            $select_query = "SELECT title, people, initial_budget, fromm, too FROM plans WHERE plans.user_id='$user_id'";
            $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
            if(mysqli_num_rows($select_query_result) >= 1) {
        ?>
        <div class="container" id="panelb">
            <div class="row">
                <?php
                    while ($row = mysqli_fetch_array($select_query_result)) {
                ?>
                <div class="panel panel-default" style="margin-bottom: 40px">
                    <div class="panel-heading" style="padding: 5px; background-color: #138c79; text-align: center; color: white;">
                        
                        <h4 style="display: inline-block"><?php echo $row['title']; ?></h4><p style="display: inline-block; float: right; font-size: 20px; padding-top: 6px; padding-right: 6px"><span class="glyphicon glyphicon-user" id="about"></span><?php echo $row['people']; ?></p>
                    </div> 
                    <div class="panel-body">
                        <?php $_SESSION['title'] = $row['title']; ?>
                        <div><p style="display: inline-block; font-weight: bold">Budget</p><p style="display: inline-block; float: right">₹ <?php echo $row['initial_budget']; ?></p></div>
                        <div><p style="display: inline-block; font-weight: bold">Date</p><p style="display: inline-block; float: right"><?php echo $row['fromm']." - ".$row['too'] ?></p></div>
                        <button type="submit" class="btn btn-primary btn-block" id="btn-next" style="background-color: white; border-color: #138c79; color: #138c79;"><a href="view_plan_page.php" style="text-decoration: none">View Plan</a></button>
                    </div>
                </div>
                <?php } ?>
            </div>
            </div>
            <?php } else { ?>
        <div class="container" style="margin-top: 100px">
            <div class="row">
            <h3>You don't have any active plans</h3>
            <div class="panel panel-default panel-style col-xs-offset-4">
                <p style="text-align: center; color: #0072A0"><a href="create_new_plan.php" style="text-decoration: none"><span class="glyphicon glyphicon-plus-sign"></span>Create new plan</a></p>
            </div>
            </div>
        </div>
            <?php } ?>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>