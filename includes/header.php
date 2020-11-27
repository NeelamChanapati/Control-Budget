<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand nav_header">Ct₹l Budget</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['email'])) {
                        ?>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign" id="about"></span>About Us</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-cog" id="signup"></span>Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in" id="login"></span>Logout</a></li>
                        <?php 
                            } else {
                        ?>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign" id="about"></span>About Us</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user" id="signup"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" id="login"></span>Login</a></li>  
                        <?php 
                            } 
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
                                          
