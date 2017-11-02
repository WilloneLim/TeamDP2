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
    <body>
        
   <?php include("include/navigation.php"); ?>
		
		
        <?php 
        include ("include/conn.php"); 
		
		if(isset($_POST['submit']))
        {
            
        $loginname = $_POST["loginname"];
        $loginpassword = $_POST["loginpassword"];
        
        
        $sql = "INSERT INTO admin (username,userpassword) VALUES ('".$loginname."' ,'".$loginpassword."')";
          
        
        if(!mysqli_query($conn, $sql))
        {
            echo "Not Inserted";
        }
        else
        {
            echo "Inserted";
        }
            
        }
       
        
        ?>
		
        
        
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