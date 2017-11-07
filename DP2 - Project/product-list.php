<!DOCTYPE html>
<html>
    <head>
    <title>Product registration page</title>
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
    <style>
    .sm-image {
        width: 200px;
        height: auto;
        max-height: 120px;
    }
    </style>
    </head>
  <body id="signupbd">
        
        <?php include("include/navigation.php"); ?>
		
		
        <?php 
        include ("include/conn.php"); 
        ?>
		
		
		
		
		
    



	   <div class="container" id="form-container">
            
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Products</h3>
                        </div>
                        
                        <div class="panel-body">

 <table class="table table-bordered"> 
    <thead>
        <tr> 
            <th>#</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Details</th>
            <th>Categories</th>
        </tr>
    </thead>
    <tbody> 
    <?php
$result = mysqli_query($conn, "select * from prodregister");
$num_rows = mysqli_num_rows($result);
if($num_rows > 0) {
    $i=0;
    while($rows=mysqli_fetch_assoc($result)) {
        $image_url = "image/product-images/";
        $image_url .= !is_null($rows['image']) && strlen($rows['image']) > 0 ? $rows['image'] : 'no-image.jpeg';  
        ?>
             <tr>
                    <th scope="row"><?php echo ++$i;?></th>
                      <td>
                      <img src="<?php echo $image_url; ?>" class="thumbnail sm-image"/>
                      
                      </td>
                    <td><?php echo $rows["register_name"]; ?></td>
                      <td><?php echo $rows["registrer_price"]; ?></td>
                    <td><?php echo $rows["register_details"]; ?></td>
                  
                    <td><?php echo $rows["register_categories"]; ?></td>
                  
            </tr>
        
        <?php
    }
}

?>
        
    </tbody>
</table>


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