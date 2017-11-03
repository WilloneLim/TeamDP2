<!DOCTYPE html>
<html>
<head>
    <title>Clothing and Accesories</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> 
	<script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>
	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	 <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">

</head>
<body>

    <?php session_start(); ?>
    <?php 
    include ("include/navigation.php"); 
    include ("include/conn.php");
    
    $sql = "SELECT * FROM product WHERE categories = 'Clothing and Accesories' ";
    $results = mysqli_query($conn, $sql);
    
    ?>
    
    <?php
    
    if(isset($_POST['cart']))
    {
        include ("insertCart/cart.php");
        
    }
    
    
    ?>
	
	
        <div class="container-fluid" style="height:100%;">
			<div class="Clothing-Accesories"><!--features_items-->
			   <h2 class="title text-center">Clothing and Accessories</h2>
			   
			    <div class="col-md-2">
                      <div class="left-sidebar">
						<h2>Filters by</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Discount</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Rating</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Brands</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="image/shipping1.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
			   
	
	         <div class="col-md-10">
                 <?php while($product = mysqli_fetch_assoc($results)) : ?>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                        <form method="post" class="form-inline">
						  <a href="#"><img src="<?= $product['image'] ?>" class="img-responsive" id="images" alt="product"/></a>
						    <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">About Product</button></a>
							</div>
							<div class="grid_1">
						     <h2 id="price">RM <?= $product['price'] ?></h2>
						    </div>
                             <input type="hidden" name="itname" value="<?= $product['title'] ?>">
                             <input type="hidden" name="itprice" value="<?= $product['price'] ?>">
						     <input type="submit" name="cart" class="button" value="Add to cart">
							 
							 
							 
							  <div class="modal fade" id="myModal1" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p><?= $product['details'] ?> </p>
									  <p>Price: RM<?= $product['price'] ?> </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="<?= $product['image'] ?>" class="imag" alt="product"/></a></div>
									</div>
									 <script>
                                        $(document).ready(function () {
                                           $("#rated .stars").click(function () {
                           
                                           $.post('rating.php',{rate:$(this).val()},function(d){
                                           if(d>0)
                                           {
                                            alert('You already rated');
                                           }else{
                                            alert('Thanks For Rating');
                                           }
                                        });
                                       $(this).attr("checked");
                                      });
                                     });
                                     </script>
									 
									 
								<fieldset id='rated' class="rating">
                                    <input class="stars" type="radio" id="star5" name="rating" value="5" />
                                    <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    <input class="stars" type="radio" id="star4" name="rating" value="4" />
                                    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input class="stars" type="radio" id="star3" name="rating" value="3" />
                                    <label class = "full" for="star3" title="Meh - 3 stars"></label>
                                    <input class="stars" type="radio" id="star2" name="rating" value="2" />
                                    <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input class="stars" type="radio" id="star1" name="rating" value="1" />
                                    <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                                </fieldset>
                                        <br><br><br>
                                        
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="<?=$product['id'] ?>" value="Post">
                                     
                                          
                                          <?php
                                          
                                          if(isset($_POST[$product['id']]))
                                          {
                                              
                                              include ("modComments/post_comments1.php");
                                          }
                                        
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =" .$product['id']);
                                          while($row = mysqli_fetch_assoc($find_comments))
                                          {
                                               $user = $row['user'];
                                               $userComment = $row['prod_comment'];
                                              
                                               echo "<p>$user: $userComment</p>";
                                          }
                                        
                                          ?>
                                          
									  
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							 
                             </form>
					     </div>
				        </div>
				    </div>
				</div>
				
				<?php endwhile; ?>
				
			  </div>
			</div>
		</div>
		
    <a href="#" class="back-to-top" >
     <i class="fa fa-arrow-up"></i>
   </a>
	
	
	
 

    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Basic AngularJS -->
    <script src="js/angular.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script> 
    <script src="js/main.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
    	$('.back-to-top').css({"display": "none"});
        jQuery(document).ready(function() {
         var offset = 250;
        var duration = 300;
        jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
        jQuery('.back-to-top').fadeIn(duration);
        } else {
        jQuery('.back-to-top').fadeOut(duration);
        }
     });
     
     jQuery('.back-to-top').click(function(event) {
       event.preventDefault();
       jQuery('html, body').animate({scrollTop: 0}, duration);
       return false;
     })
     });
    </script>
    </body>
</html>    