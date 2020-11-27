<!DOCTYPE html>
<?php
    require 'includes/common.php';
    $user_id = $_SESSION['user_id'];
    $title = $_SESSION['title'];
?>
<?php
    $select_query = "SELECT title, people, initial_budget FROM plans WHERE plans.user_id='$user_id' and plans.title='$title'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($select_query_result);
?>
<?php
    $sel_que = "SELECT amount_spent FROM expenses WHERE user_id='$user_id' and choose_person = 'person1'";
    $sel_que_res = mysqli_query($con, $sel_que) or die(mysqli_error($con));
?>
<?php
    $person1 = 0;
    while($ro = mysqli_fetch_array($sel_que_res)){
        $person1 += $ro['amount_spent'];
    }
?>
<?php
    $se_qu = "SELECT amount_spent FROM expenses WHERE user_id='$user_id' and choose_person = 'person2'";
    $se_qu_re = mysqli_query($con, $se_qu) or die(mysqli_error($con));
?>
<?php
    $person2 = 0;
    while($r = mysqli_fetch_array($se_qu_re)){
        $person2 += $r['amount_spent'];
    }
?>
<?php
    $individual_shares = ($person1 + $person2) / 2;
?>
<?php
?>
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
            #heading_v{
                padding: 5px;
                background-color: #138c79;
                text-align: center;
                color: white;
            }
            #people_v{
                 float: right;
                 font-size: 20px;
                 padding-top: 6px;
                 padding-right: 6px
            }
            #panela{
                width: 100%;
                margin-top: 100px;
                
            }
            #paneld{
              float: right;
            }
            #btn-next{
                background-color: white;
                border-color: #138c79;
                color: #138c79;
            }
            #btn-next:hover{
                background-color: #138c79 !important;
                color: white !important;
            }
            a{
                color: #138c79;
                text-decoration: none;
            }
            a:hover{
                color: white !important;
            }
        </style>
    </head>
    <body>
        <?php 
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                <div class="panel panel-default" id="panela">
                    <div class="panel-heading" id="heading_v">
                        <h4 style="display: inline-block"><?php echo $row['title'] ?></h4>
                        <p id="people_v" style="display: inline-block"><span class="glyphicon glyphicon-user" id="about"></span><?php echo $row['people']; ?></p>
                    </div> 
                    <div class="panel-body">
                        <div>
                            <p style="display: inline-block; font-weight: bold">Initial Budget</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo $row['initial_budget']; ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Person A</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo $person1; ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Person B</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo $person2; ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Total amount spent</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo $person1 + $person2; ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Remaining Amount</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo $row['initial_budget'] - ($person1 + $person2) ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Individual shares</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo $individual_shares ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Person A</p>
                            <p style="display: inline-block" id="paneld">
                                <?php
                                    if($person1 > $individual_shares){ $count = $person1 - $individual_shares; ?>
                                    <p style="color: red; display: inline-block; float: right">Owes ₹<?php echo $count ?></p>
                                <?php } else if($person1 < $individual_shares) { $count = $individual_shares - $person1; ?>  
                                    <p style="color: green; display: inline-block; float: right">Gets back ₹<?php echo $count ?></p>
                                <?php } else { ?>
                                    <p style="color: black; display: inline-block; float: right">All Settled Up</p> 
                                <?php } ?>
                            </p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Person A</p>
                            <p style="display: inline-block" id="paneld">
                                <?php
                                    if($person2 > $individual_shares){ $count = $person2 - $individual_shares; ?>
                                    <p style="color: red; display: inline-block; float: right">Owes ₹<?php echo $count ?></p>
                                <?php } else if($person2 < $individual_shares) { $count = $individual_shares - $person2; ?>  
                                    <p style="color: green; display: inline-block; float: right">Gets back ₹<?php echo $count ?></p>
                                <?php } else { ?>
                                    <p style="color: black; display: inline-block; float: right">All Settled Up</p> 
                                <?php } ?>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary col-xs-offset-5 col-xs-2" id="btn-next"><a href="view_plan_pagemain.php" style="text-decoration: none"><span class="glyphicon glyphicon-arrow-left" id="about"></span>Go back</a></button>
                    </div>
                </div>
                 </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>