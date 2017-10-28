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
  <body id="signupbd">
        
        <?php include("include/navigation.php"); ?>
		
		
        <?php 
        include ("include/conn.php"); 
		
		if(isset($_POST['submit']))
        {
            
        $productName = $_POST["productName"];
        $proDetails = $_POST["proDetails"];
        $typeofproduct = $_POST["typeofproduct"];
		$productPrice = $_POST["productPrice"];
        
        $sql = "INSERT INTO prodregister (register_name, register_details, register_categories,registrer_price) VALUES ('".$productName."' ,'".$proDetails."' ,'".$typeofproduct."','".$productPrice."')";
          
        
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
		
		
		
		
		
    



	   <div class="container" id="form-container">
            
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Product Registratin</h3>
                        </div>
                        
                        <div class="panel-body">
                            <form method="post" name="myForm" role="form" onsubmit="return checkForm(myForm);">
                                
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="usr">Product Name:</label>
											<input type="text" name="productName" id="name" class="form-control input-sm" placeholder="Product Name" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                   <label for="usr">Product Details:</label>
								   <textarea class="form-control" name="proDetails" rows="5" id="comment"></textarea>
                                </div>
                                
								<div class="form-group">
								  <label for="p_type">Product Type:</label>
								    <select name="typeofproduct" class="selectpicker">
									  <option>Clothing and Accesories</option>
									  <option>Craft Supplies</option>
									  <option>Room Decor</option>
									  <option>Soft Toys</option>
									  <option>Vintage arts</option>
									  <option>Wedding Accesories</option>
									 
								    </select> <br>
							    </div>					
                                     
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="usr">Product Price:</label>
											<input type="text" name="productPrice" id="Price" class="form-control input-sm" placeholder="Product Proce" required>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit"  value="Submit" class="btn btn-info btn-block"> 
                                
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