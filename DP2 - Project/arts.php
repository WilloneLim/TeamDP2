<!DOCTYPE html>
<html>
<head>
    <title>Vintage Arts</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> 
</head>
<body>
    <?php session_start(); ?>
    <?php 
    include ("include/navigation.php"); 
    include ("include/conn.php");
    
    $sql = "SELECT * FROM product WHERE categories = 'Vintage Art' ";
    $results = mysqli_query($conn, $sql);
    
    ?>
	
	
        <div class="container-fluid">
			<div class="Clothing-Accesories"><!--features_items-->
			   <h2 class="title text-center">Vintage Art</h2>
                
                
                <?php while($product = mysqli_fetch_assoc($results)) : ?>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#"><img src="<?= $product['image'] ?>" class="img-responsive" id="images" alt="product"/></a>
						    <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">About Product</button></a>
							</div>
							<div class="grid_1">
						     <h2 id="price">RM <?= $product['price'] ?></h2>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 
							 
							 <!-- create the code fot Modal  -->
							 

							  <!-- Modal -->
							  <div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									 
									    <p><?= $product['details'] ?></p>
										<p>Price: RM <?= $product['price'] ?></p>
                                        
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="<?= $product['image'] ?>" class="imag" alt="product"/></a></div></div>
										
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
                                        <br />
                                            
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md1" value="Post">
                                            
                                            
									</div>
									<div class="modal-footer">
									  <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
                <?php endwhile; ?>
                    
				
				
				
			</div>
		</div>

    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Basic AngularJS -->
    <script src="js/angular.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script> 
    <script src="js/main.js"></script>
    </body>
</html>