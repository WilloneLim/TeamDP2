<!DOCTYPE html>
<html>
    <head>
    <title>Deallo House Craft</title>
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
    <body>
        
        <?php include("include/navigation.php"); ?>
        
        <?php 
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'deallo');
        
        if(mysqli_connect_errno()){
            echo 'Database connection failed with the following errors: ' . mysqli_connect_error();
            die();
        }
        
        if(!mysqli_select_db($conn, 'deallo'))
        {
            die("Uh oh, couldn't select database --> deallo" . $conn->connect_error . '>');
        }
        
        if(isset($_POST['submit']))
        {
            
        $Name = mysqli_real_escape_string($conn, $_POST["userName"]);
        $Email = mysqli_real_escape_string($conn, $_POST["userEmail"]);
        $Password = mysqli_real_escape_string($conn, $_POST["userPassword"]);
        
        $sql = "INSERT INTO users (username, useremail, userpassword) VALUES ('".$Name."' ,'".$Email."' ,'".$Password."')";
          
        
        if(!mysqli_query($conn, $sql))
        {
            echo "Not Inserted";
        }
        else
        {
            header("location: login.php");
        }
            
        }
       
        
        ?>
        
        
        <div class="container signuppg" id="form-container">
            
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign Up Here</h3>
                        </div>
                        
                        <div class="panel-body">
                            <form  method="post" name="myForm" role="form" onsubmit="return checkForm(myForm);">
                                
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="userName"  class="form-control input-sm" placeholder="User Name" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="userEmail"  class="form-control input-sm" placeholder="Email Address" required>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="userPassword"  class="form-control input-sm" placeholder="Password" required>
                                        </div>
                                    </div>
                                    
                                     <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="rePassword"  class="form-control input-sm" placeholder="Re-Enter Password"  required>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <input type="submit" name="submit" value="Sign Up" class="btn btn-info btn-block"> 
                                
                            </form>
                        </div>
                    </div>
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