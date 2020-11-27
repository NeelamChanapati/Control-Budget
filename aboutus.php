<?php
    /* Includes database connected file */
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
        <!-- Linking style sheet -->
        <link rel="stylesheet" type="text/css" href="Style.css">
        <title>Ctrl_Budget</title>
    </head>
    <body class="body" style="background-color: #f4fcf8">
        <?php
            /* Includes header file */
            include 'includes/header.php';
        ?>
        <div class="container" style="margin-top: 90px">
            <div class="col-xs-6" id="aboutus">
                <h3>Who are we?</h3>
                <p>We are a group of young technocrats who came up with an idea of solving budget and time issues which we usually face in our daily lives.We are here to provide a budget controller according to your aspects.<br><br>Budget control is the biggest financial issue in the present world.One should look after their budget control to get rid off from their financial crisis.</p>
            </div>
            <div class="col-xs-6" id="aboutus">
                <h3>Why choose us?</h3>
                <p>We provide with a predominant way to control and manage your budget estimations with ease of accessing for multiple users.</p>
            </div>
        </div>
        <div class="container">
            <div class="col-xs-6" id="aboutus" style="margin-bottom: 60px">
                <h3>Contact Us</h3>
                <p><b>Email:</b> trainings@internshala.com<br><b>Mobile:</b> +91-8448444853</p>
            </div>
        </div>
        <?php
            /* Includes footer file */
            include 'includes/footer.php';
        ?>
    </body>
</html>