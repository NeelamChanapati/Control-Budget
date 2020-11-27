<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email']))
        header('location:login.php');
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
            #btn-next:hover{
                background-color: #138c79 !important;
                color: white !important;
            }
            .text{
                font-weight: 0px;
            }
            a{
                color: #138c79;
                text-decoration: none;
            }
            a:hover{
                color: white;
            }
        </style>
    </head>
    <body class="body" style="background-color: #f4fcf8">
        <?php 
            include 'includes/header.php';
        ?>
        <div class="container" id="panelb">
            <div class="row">
                <div class="panel panel-default" style="margin-bottom: 40px">
                    <div class="panel-heading" style="padding: 5px; background-color: #138c79; text-align: center; color: white;">
                        <h4>Create New Plan</h4>
                    </div> 
                    <div class="panel-body">
                        <form>
                        <div class="form-group">
                            <label for="initial_budget">Initial Budget</label>
                            <input type="number" class="form-control" name="initial_budget" placeholder="Initial Budget (Ex. 4000)">
                        </div>  
                        <div class="form-group">
                            <label for="people">How many People you want to add in your group?</label>
                            <input type="number" class="form-control" name="people" placeholder="No. of people">
                        </div> 
                       
                            <button type="submit" class="btn btn-primary btn-block" id="btn-next" style="background-color: white; border-color: #138c79; color: #138c79;"><a href="plan_details_page.php" style="text-decoration: none">Next</a></button>
                 
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>