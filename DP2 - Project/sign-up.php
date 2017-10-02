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
        
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Deallo House Craft</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Clothing and Accesories</a></li>
                        <li><a href="#">Jewelry</a></li>
                        <li><a href="#">Craft Supplies</a></li>
                        <li><a href="#">Room Decor</a></li>
                        <li><a href="#">Soft Toys</a></li>
                        <li><a href="#">Vintage arts</a></li>
                        <li><a href="#">Wedding Accesories</a></li>
                    </ul>
                </li>
                <li><a href="#">Forums</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign UP</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
            </ul>
        </div>
    </nav>
        
        <div class="container" id="form-container">
            
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign Up Here</h3>
                        </div>
                        
                        <div class="panel-body">
                            <form method="post" name="myForm" role="form" onsubmit="return checkForm(myForm);">
                                
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="userName" id="user_name" class="form-control input-sm" placeholder="User Name" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="userEmail" id="user_email" class="form-control input-sm" placeholder="Email Address" required>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="userPassword" id="user_password" class="form-control input-sm" placeholder="Password" required>
                                        </div>
                                    </div>
                                    
                                     <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="rePassword" id="re_password" class="form-control input-sm" placeholder="Re-Enter Password"  required>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <input type="submit" value="Sign Up" class="btn btn-info btn-block"> 
                                
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