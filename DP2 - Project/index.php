<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
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
    <?php session_start(); ?>
    <?php include ("include/navigation.php"); ?>
    


 <div class="row"> 
  <div class="col-md-12">   
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
       <li data-target="#myCarousel" data-slide-to="4"></li>
       <li data-target="#myCarousel" data-slide-to="5"></li>
       <li data-target="#myCarousel" data-slide-to="6"></li>     
     </ol>

  <div class="carousel-inner">
    <div class="item active">
      <img src="image/newphoto1.jpeg" alt="clothing" class="img-responsive">
        <div class="carousel-caption">
            <h3>Clothing and Accesories</h3>
        </div>
    </div>

    <div class="item">
      <img src="image/newphoto2.jpg" alt="Jewelry" class="img-responsive">
        <div class="carousel-caption">
            <h3>Jewelries</h3>
        </div>
    </div>

    <div class="item">
      <img src="image/newphoto3.jpeg" alt="Room-Decor" class="img-responsive">
        <div class="carousel-caption">
            <h3>Room Decorations</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/newphoto4_2.jpeg" alt="soft toys" class="img-responsive">
        <div class="carousel-caption">
            <h3>Soft Toys</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/newphoto4.jpeg" alt="Craft Supplies" class="img-responsive">
        <div class="carousel-caption">
            <h3>Craft Supplies</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/newphoto5.jpeg" alt="vintage art" class="img-responsive">
        <div class="carousel-caption">
            <h3>Vintage Art</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/newphoto6.jpeg" alt="wedding accessories" class="img-responsive">
        <div class="carousel-caption">
            <h3>Wedding Accessories</h3>
        </div>
    </div>  


  <!-- Left and right controls -->
       
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
     </div>
    </div>        
  </div>  
 </div>    
    
    <div class="container-fluid">
      <div class="row">   
        <div class="col-md-2"></div>
        
        <div class="col-md-8">
            <div class="row">
                <h2 class="text-center">Featured Products</h2>
				<div class="col-sm-4">
				   <div class="product-image-wrapper">
				    <div class="single-products">
					 <div class="productinfo text-center">
					 <img src="image/bluedress2.jpg" alt=""/>
					 <h2>RM126</h2>
					 <p>Blue Dress</p>
					 <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
					 </div>
                    </div>
                   </div>
				</div>
				<div class="col-sm-4">
				   <div class="product-image-wrapper">
				    <div class="single-products">
					 <div class="productinfo text-center">
					 <img src="image/reddress2.jpg" alt=""/>
					 <h2>RM100</h2>
					 <p>Red Dress</p>
					 <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
					 </div>
                    </div>
                   </div> 
				</div>
				<div class="col-sm-4">
				   <div class="product-image-wrapper">
				    <div class="single-products">
					 <div class="productinfo text-center">
					 <img src="image/casual2.jpg" alt=""/>
					 <h2>RM120</h2>
					 <p>Casual</p>
					 <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
					 </div>
                    </div>
                   </div> 
				</div>
            </div>    
        </div>
        
        <div class="col-md-2"></div>
        </div>      
    </div>    
   
     
    <?php include("include/footer.php"); ?>
   
   
        
    
    
    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Basic AngularJS -->
    <script src="js/angular.min.js"></script>
    <script src="js/unit.js"></script>
</body>
</html>