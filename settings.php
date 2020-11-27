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
    </head>
    <body class="body" style="background-color: #f4fcf8">
        <?php
            include 'includes/header.php';
        ?>
        <div class="container" id="panelb">
            <div class="row">
                <div class="panel panel-default" style="margin-bottom: 40px">
                    <div class="panel-heading" style="padding: 5px; background-color: white; text-align: center;">
                        <h4>Change Password</h4>
                    </div> 
                    <div class="panel-body">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                    <form method="POST" action="settings_script.php">
                            <div class="form-group">
                                <label for="Old">Old password:</label>
                                <input type="password" class="form-control" name="Old" placeholder="Old Password">
                            </div>  
                            <div class="form-group">
                                <label for="New">New Password:</label>
                                <input type="password" class="form-control" name="New" placeholder="New Password">
                            </div> 
                            <div class="form-group">
                                <label for="Confirm">Confirm New Password:</label>
                                <input type="password" class="form-control" name="Confirm" placeholder="Re-type New Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #588b72"><a href="home1.php" style="color: white; text-decoration: none">change</a></button>
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

