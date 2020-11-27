<?php
    require 'includes/common.php';
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
            .panel_width{
                width: 65%;
            }
            #panelp{
                padding-top: 90px;
                padding-left: 320px;
                
            }
            #from{
                display: inline-block;  
                width: 45%;  
            }
            #to{
                display: inline-block;
                width: 54%;
                padding-left: 5%;
            }
            #initial_budget{
                display: inline-block;
                width: 60%;
            }
            #people{
                display: inline-block;
                width: 39%;
                padding-left: 6%;
            }
            #btn-next:hover{
                background-color: #138c79 !important;
                color: white !important;
            }
            @media(max-width: 550px){
                .panel_width{
                    width: 80%;
                }
                #panelp{
                    padding-left: 35px;
                }
            }
            @media(max-width: 991px){
                #from{
                  width: 100%;  
                }
                #to{
                    width: 100%;
                    padding-left: 0px;
                }
                #initial_budget{
                  width: 100%;  
                }
                #people{
                    width: 100%;
                    padding-left: 0px;
                }
            }
        </style>
    </head>
    <body class="body" style="background-color: #f4fcf8">
        <?php 
            include 'includes/header.php';
        ?>
        <div class="container" id="panelp">
            <div class="row">
                <div class="panel panel-default panel_width" style="margin-bottom: 70px;">
                    <div class="panel-body">
                        <form method="POST" action="plan_script.php">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title (Ex. Trip to Goa)" required>
                            </div> 
                            
                            <div class="form-group" id="from">
                                <label for="fromm">From</label>
                                <input type="date" class="form-control" name="fromm" placeholder="dd/mm/yyyy" required>
                            </div>
                            <div class="form-group" id="to">
                                <label for="too">To</label>
                                <input type="date" class="form-control" name="too" placeholder="dd/mm/yyyy" !important required>
                            </div> 
                            <div class="form-group" id="initial_budget">
                                <label for="initial_budget">Initial Budget</label>
                                <input type="number" class="form-control" name="initial_budget" placeholder="10000" required>
                            </div>
                            <div class="form-group" id="people">
                                <label for="people">No. of People</label>
                                <input type="number" class="form-control" name="people" placeholder="2" required>
                            </div> 
                            <div class="form-group">
                                <label for="person_1">Person 1</label>
                                <input type="text" class="form-control" name="person1" placeholder="Person 1 Name" required>
                            </div>
                            <div class="form-group">
                                <label for="person_2">Person 2</label>
                                <input type="text" class="form-control" name="person2" placeholder="Person 2 Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" id="btn-next" style="background-color: white; border-color: #138c79; color: #138c79;" href="home1.php">Submit</button>
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