<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5
    elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the
    page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    </head>
    <body id="loginBody">
        
        <?php
        
        session_start();
        $error="";
        
        if(isset($_POST['submit']))
        {
            $username = $_POST['loginname'];
            $userpassword = $_POST['loginpassword'];    
            
            $connection = mysqli_connect('127.0.0.1', 'root', '', 'deallo');
            
            if(mysqli_connect_errno())
            {
            echo 'Database connection failed with the following errors: ' . mysqli_connect_error();
            die();
            }
        
           if(!mysqli_select_db($connection, 'deallo'))
           {
            die("Uh oh, couldn't select database --> deallo" . $connection->connect_error . '>');
           }
            
            $username = stripslashes($username);
            $userpassword = stripslashes($userpassword);
            $username = mysqli_real_escape_string($connection,$username);
            $userpassword = mysqli_real_escape_string($connection, $userpassword);
            
            $query = mysqli_query($connection, "SELECT * FROM users WHERE userpassword = '$userpassword' AND username = '$username'");
            $rows = mysqli_num_rows($query);
            
            if($rows == 1)
            {
                $_SESSION['login_user']=$username;
                header("location: index.php");
                echo "Success";
            }
            else
            {
                $error = "Username or Password is invalid";
                echo "FAILLLL";
            }
            
            mysqli_close($connection);
            
        }
        
        ?>
        
        
        <?php include("include/navigation.php"); ?>
        
        
        <div class="container" id="loginpg">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="jumbotron">
                    
                    <h3>Login To Account</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="loginname" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="loginpassword" class="form-control" placeholder="Enter Password">
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary form-control">Login</button>
                    </form>
                </div>
            </div>
        </div>
        

    
    
    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Basic AngularJS -->
    <script src="js/angular.min.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>