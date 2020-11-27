<?php
    require 'includes/common.php';
    
                    $user_id = $_SESSION['user_id'];
                    $s = "SELECT date, amount_spent, choose_person FROM expenses WHERE expenses.user_id='$user_id'";
                    $s_r = mysqli_query($con, $s) or die(mysqli_error($con));
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
            }
            #panelb{
                padding-left: 35px;
            }
            #panelc{
                width: 100%;
            }
            #paneld{
              float: right;
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
    <body class="body" style="background-color: #f4fcf8">
        <?php 
            include 'includes/header.php';
            
            $user_id = $_SESSION['user_id'];
            $title = $_SESSION['title'];
            $select_query = "SELECT title, people, initial_budget, fromm, too, person1, person2 FROM plans WHERE plans.user_id='$user_id' and plans.title='$title'";
            $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
            $row = mysqli_fetch_array($select_query_result);
        ?>
        <div class="container" id="panelb">
            <?php
                $sum = 0;
                while($r = mysqli_fetch_array($s_r)) {
                    $sum = $sum + $r['amount_spent'];
                }
                $remaining_amount = $row['initial_budget'] - $sum;
            ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="panel panel-default" id="panela">
                    <div class="panel-heading" id="heading_v">
                        <h4 style="display: inline-block"><?php echo $row['title']; ?></h4>
                        <p id="people_v" style="display: inline-block"><span class="glyphicon glyphicon-user" id="about"></span><?php echo $row['people']; ?></p>
                    </div> 
                    <div class="panel-body">
                        <div>
                            <p style="display: inline-block; font-weight: bold">Budget</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo $row['initial_budget']; ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Remaining Amount</p>
                            <p style="display: inline-block" id="paneld">₹ <?php echo "$remaining_amount" ?></p>
                        </div>
                        <div>
                            <p style="display: inline-block; font-weight: bold">Date</p>
                            <p style="display: inline-block" id="paneld"><?php echo $row['fromm']." - ".$row['too'] ?></p>
                        </div>
                    </div>
                </div>
                 </div>
                <div class="container">
                <div class="col-lg-2 col-md-2">
                    <button type="submit" class="btn btn-primary btn-block" id="btn-next" style="margin-top: 30px;margin-bottom: 30px;float: right;width: 100%;height: 50px;background-color: white; border-color: #138c79; color: #138c79;"><a href="expense_distribution_page.php" style="text-decoration: none">Expense Distribution</a></button>
                </div>
                </div>
            </div> 
                <?php
                    $s_t = mysqli_query($con, $s) or die(mysqli_error($con));
                ?>
                <?php
                    while ($r = mysqli_fetch_array($s_t)) {
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="panel panel-default" id="panela">
                    <div class="panel-heading" id="heading_v">
                        <h4 style="display: inline-block">My first plan</h4><p style="display: inline-block" id="people_v"><span class="glyphicon glyphicon-user" id="about"></span>2</p>
                    </div> 
                    <div class="panel-body">
                        <div><p style="display: inline-block; font-weight: bold">Amount</p><p style="display: inline-block; float: right">₹ <?php echo $r['amount_spent']; ?></p></div>
                        <div><p style="display: inline-block; font-weight: bold">Paid by</p><p style="display: inline-block; float: right"><?php echo $r['choose_person']; ?></p></div>
                        <div><p style="display: inline-block; font-weight: bold">Paid on</p><p style="display: inline-block; float: right"><?php echo $r['date']; ?></p></div>
                    </div>
                </div>
                </div>
                <?php } ?>
        </div>
            
            
            <div class="container" id="paneld">
            <div class="row">
                <div class="col-lg-4 col-xs-12 col-sm-6" style="float: right">
                <div class="panel panel-default" id="panelc" style="margin-bottom: 70px;">
                    <div class="panel-heading" id="heading_v">
                        <h4>Add New Expense</h4>
                    </div> 
                    <div class="panel-body">
                        <form method="POST" action="new_expense_script.php">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" placeholder="Expense Name">
                            </div>  
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy">
                            </div> 
                            <div class="form-group">
                                <label for="amount_spent">Amount Spent:</label>
                                <input type="number" class="form-control" name="amount_spent" placeholder="Amount Spent">
                            </div> 
                            <div class="form-group">
                                <select class="form-control" name="person">
                                    <option>--Choose--</option>
                                    <option value="person1"><?php echo $row['person1']; ?></option>
                                    <option value="person2"><?php echo $row['person2']; ?></option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" id="btn-next" style="background-color: white; border-color: #138c79; color: #138c79;"><a style="text-decoration: none">Add</a></button>
                        </form>
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