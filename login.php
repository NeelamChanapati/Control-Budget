<?php
    /* Includes database connected file */
    require 'includes/common.php';
    
    /* If already logged in you will be redirected to home page */
    if(isset($_SESSION['email'])){
        header('location: home.php');
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
    </head>
    <body class="body" style="background-color: #f4fcf8">
        <?php
            /* Includes header file */
            include 'includes/header.php';
        ?>
        <div class="container" id="panelb">
            <div class="row">
                <div class="panel panel-default" style="margin-bottom: 40px">
                    <div class="panel-heading" style="padding: 5px; background-color: white; text-align: center;">
                        <h4>Login</h4>
                    </div> 
                    <div class="panel-body">
                        <form method="POST" action="login_script.php">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>  
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div> 
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #588b72"><a href="home.php" style="color: white; text-decoration: none">Login</a></button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account?<a href="signup.php">Click here to Sign Up</a></p>
                    </div>
                </div>
                </div>
            </div>
        <?php
              /* Includes footer file */
              include 'includes/footer.php';
        ?>
    </body>
</html>