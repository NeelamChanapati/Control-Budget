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
        <!-- Linking style sheet -->
        <link rel="stylesheet" type="text/css" href="Style.css">
        <title>Ctrl_Budget</title>
    </head>
    <body class="body">
        <?php
            /* Includes header file */
            include 'includes/header.php';
        ?>
        <div>
            <div>
                <!-- Banner Image -->
                <img src="images/bg_cover3.jpg" class="banner-image">
                
            <!-- Banner Content -->
            <div class="container">
                <div class="row">
                    <div class="banner-content" style="padding-top: 5px; padding-bottom: 30px;">
                        <h3 style="padding-top: 30px">We help you control your budget</h3>
                    <div>
                        <button class="btn btn-primary btn-lg active" id="start_today"><a href="home.php" style="color: white; text-decoration: none">Start Today</a></button>
                    </div>
                    </div>
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