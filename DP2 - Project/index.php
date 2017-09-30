<!DOCTYPE html>
<html>
<head>
    <title>Template use for Bootstrap</title>
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
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
    
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
      <img src="image/clothing-carousel.jpeg" alt="clothing" class="carouselImage">
        <div class="carousel-caption">
            <h3>Clothing and Accesories</h3>
        </div>
    </div>

    <div class="item">
      <img src="image/jewelry-carousel.jpeg" alt="Jewelry" class="carouselImage">
        <div class="carousel-caption">
            <h3>Jewelries</h3>
        </div>
    </div>

    <div class="item">
      <img src="image/roomDecor-carousel.jpeg" alt="Room-Decor" class="carouselImage">
        <div class="carousel-caption">
            <h3>Room Decorations</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/Soft_Toys.jpg" alt="soft toys" class="carouselImage">
        <div class="carousel-caption">
            <h3>Soft Toys</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/craft_supplies.jpeg" alt="Craft Supplies" class="carouselImage">
        <div class="carousel-caption">
            <h3>Craft Supplies</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/Vintage_art.jpg" alt="vintage art" class="carouselImage">
        <div class="carousel-caption">
            <h3>Vintage Art</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="image/Wedding_accessories.jpeg" alt="wedding accessories" class="carouselImage">
        <div class="carousel-caption">
            <h3>Wedding Accessories</h3>
        </div>
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
    
    
    <div class="container-fluid">
        <div class="col-md-2"></div>
        
        <div class="col-md-8">
            <div class="row">
                <h2 class="text-center">Featured Products</h2>
            </div>
        </div>
        
        <div class="col-md-2"></div>
    </div>
   
     
    <footer class="container-fluid text-center">
        <form class="form-inline">Subscribe to our newsletter:
            <input type="email" class="form-control" size="50" placeholder="Email Address">
            <button type="button" class="btn btn-danger">Sign Up</button>
        </form>
    </footer>
   
   
        
    
    
    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Basic AngularJS -->
    <script src="js/angular.min.js"></script>
    <script src="js/unit.js"></script>
</body>
</html>