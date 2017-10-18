<!DOCTYPE html>
<html>
<head>
    <title>Jewelry</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> 
</head>
<body>
<?php session_start(); ?>
    <?php include ("include/navigation.php"); ?>
	
	
	
        <div class="container-fluid">
			<div class="Clothing-Accesories"><!--features_items-->
			   <h2 class="title text-center">Jewelry</h2>
			   
			   
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#"><img src="image/bluenecklace.jpg" class="img-responsive" alt="product"/></a>
						    <div class="middle">
							  <a href="#"><div class="text"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">About Product</button></div></a>
							</div>
							<div class="grid_1">
						     <a href="#" class="item"><span class="price">RM120<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							 <!-- create the code fot Modal  -->
							

							  <!-- Modal -->
							  <div class="modal fade" id="myModal1" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p>A nice Diamond ring. It suitable for women. Here there is a big Blue diamond, and there will be small diamond .</p>
									  <p> Price $100</p>
									  
									  <fieldset class="rating" >
										
										    <input type="radio" id="5star" name="rating" value="5"/>
											<label class="full" for="5star" title="Excellent"></label>
											
											<input type="radio" id="4halfstar" name="rating" value="4.5"/>
											<label class="half" for="4halfstar" title="Good"></label>
											
											<input type="radio" id="4star" name="rating" value="4"/>
											<label class="full" for="4star" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar" name="rating" value="3.5"/>
											<label class="half" for="3halfstar" title="Nice"></label>
											
											<input type="radio" id="3star" name="rating" value="3"/>
											<label class="full" for="3star" title="Ok"></label>
											
											<input type="radio" id="2halfstar" name="rating" value="2.5"/>
											<label class="half" for="2halfstar" title="Kinda bad"></label>
											
											<input type="radio" id="2star" name="rating" value="2"/>
											<label class="full" for="2star" title="Bad"></label>
											
											<input type="radio" id="1halfstar" name="rating" value="1.5"/>
											<label class="half" for="1halfstar" title="Meh"></label>
											
											<input type="radio" id="1star" name="rating" value="1"/>
											<label class="full" for="1star" title="Umm"></label>
											
											<input type="radio" id="halfstar" name="rating" value="0.5"/>
											<label class="half" for="halfstar" title="Worst"></label>
											
										</fieldset>
                                        
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
				
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/goldnecklace.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><div class="text"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">About Product</button></div></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM555<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							 <!-- create the code fot Modal  -->
							

							  <!-- Modal -->
							  <div class="modal fade" id="myModal2" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p>a beautiful  gold necklace</p>
									  <p> Price $100</p>
									  
									  <fieldset class="rating" >
										
										    <input type="radio" id="5star2" name="rating2" value="5"/>
											<label class="full" for="5star2" title="Excellent"></label>
											
											<input type="radio" id="4halfstar2" name="rating2" value="4.5"/>
											<label class="half" for="4halfstar2" title="Good"></label>
											
											<input type="radio" id="4star2" name="rating2" value="4"/>
											<label class="full" for="4star2" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar2" name="rating2" value="3.5"/>
											<label class="half" for="3halfstar2" title="Nice"></label>
											
											<input type="radio" id="3star2" name="rating2" value="3"/>
											<label class="full" for="3star2" title="Ok"></label>
											
											<input type="radio" id="2halfstar2" name="rating2" value="2.5"/>
											<label class="half" for="2halfstar2" title="Kinda bad"></label>
											
											<input type="radio" id="2star2" name="rating2" value="2"/>
											<label class="full" for="2star2" title="Bad"></label>
											
											<input type="radio" id="1halfstar2" name="rating2" value="1.5"/>
											<label class="half" for="1halfstar2" title="Meh"></label>
											
											<input type="radio" id="1star2" name="rating2" value="1"/>
											<label class="full" for="1star2" title="Umm"></label>
											
											<input type="radio" id="halfstar2" name="rating2" value="0.5"/>
											<label class="half" for="halfstar2" title="Worst"></label>
											
										</fieldset>
									  
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/necklace.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><div class="text"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">About Product</button></div></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM150<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							 <!-- create the code fot Modal  -->
							 

							  <!-- Modal -->
							  <div class="modal fade" id="myModal3" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p>a beautiful white gold necklace.</p>
									   <p> Price $100</p>
									   
									   <fieldset class="rating" >
										
										    <input type="radio" id="5star3" name="rating3" value="5"/>
											<label class="full" for="5star3" title="Excellent"></label>
											
											<input type="radio" id="4halfstar3" name="rating3" value="4.5"/>
											<label class="half" for="4halfstar3" title="Good"></label>
											
											<input type="radio" id="4star3" name="rating3" value="4"/>
											<label class="full" for="4star3" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar3" name="rating3" value="3.5"/>
											<label class="half" for="3halfstar3" title="Nice"></label>
											
											<input type="radio" id="3star3" name="rating3" value="3"/>
											<label class="full" for="3star3" title="Ok"></label>
											
											<input type="radio" id="2halfstar3" name="rating3" value="2.5"/>
											<label class="half" for="2halfstar3" title="Kinda bad"></label>
											
											<input type="radio" id="2star3" name="rating3" value="2"/>
											<label class="full" for="2star3" title="Bad"></label>
											
											<input type="radio" id="1halfstar3" name="rating3" value="1.5"/>
											<label class="half" for="1halfstar3" title="Meh"></label>
											
											<input type="radio" id="1star3" name="rating3" value="1"/>
											<label class="full" for="1star3" title="Umm"></label>
											
											<input type="radio" id="halfstar3" name="rating3" value="0.5"/>
											<label class="half" for="halfstar3" title="Worst"></label>
											
										</fieldset>
									   
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/rednecklace.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><div class="text"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">About Product</button></div></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM250<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
					         <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							  <!-- create the code fot Modal  -->
							 

							  <!-- Modal -->
							  <div class="modal fade" id="myModal4" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p>a beautiful necklace with diamond</p>
									   <p> Price $150</p>
									   
									   <fieldset class="rating" >
										
										    <input type="radio" id="5star4" name="rating4" value="5"/>
											<label class="full" for="5star4" title="Excellent"></label>
											
											<input type="radio" id="4halfstar4" name="rating4" value="4.5"/>
											<label class="half" for="4halfstar4" title="Good"></label>
											
											<input type="radio" id="4star4" name="rating4" value="4"/>
											<label class="full" for="4star4" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar4" name="rating4" value="3.5"/>
											<label class="half" for="3halfstar4" title="Nice"></label>
											
											<input type="radio" id="3star4" name="rating4" value="3"/>
											<label class="full" for="3star4" title="Ok"></label>
											
											<input type="radio" id="2halfstar4" name="rating4" value="2.5"/>
											<label class="half" for="2halfstar4" title="Kinda bad"></label>
											
											<input type="radio" id="2star4" name="rating4" value="2"/>
											<label class="full" for="2star4" title="Bad"></label>
											
											<input type="radio" id="1halfstar4" name="rating4" value="1.5"/>
											<label class="half" for="1halfstar4" title="Meh"></label>
											
											<input type="radio" id="1star4" name="rating4" value="1"/>
											<label class="full" for="1star4" title="Umm"></label>
											
											<input type="radio" id="halfstar4" name="rating4" value="0.5"/>
											<label class="half" for="halfstar4" title="Worst"></label>
											
										</fieldset>
									   
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
						 </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/pantherring.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><div class="text"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">About Product</button></div></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM150<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							 <!-- create the code fot Modal  -->
						

							  <!-- Modal -->
							  <div class="modal fade" id="myModal5" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p>A beautiful gold ring with Blue diamond</p>
									    <p> Price $150</p>
										
										<fieldset class="rating" >
										
										    <input type="radio" id="5star5" name="rating5" value="5"/>
											<label class="full" for="5star5" title="Excellent"></label>
											
											<input type="radio" id="4halfstar5" name="rating5" value="4.5"/>
											<label class="half" for="4halfstar5" title="Good"></label>
											
											<input type="radio" id="4star5" name="rating5" value="4"/>
											<label class="full" for="4star5" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar5" name="rating5" value="3.5"/>
											<label class="half" for="3halfstar5" title="Nice"></label>
											
											<input type="radio" id="3star5" name="rating5" value="3"/>
											<label class="full" for="3star5" title="Ok"></label>
											
											<input type="radio" id="2halfstar5" name="rating5" value="2.5"/>
											<label class="half" for="2halfstar5" title="Kinda bad"></label>
											
											<input type="radio" id="2star5" name="rating5" value="2"/>
											<label class="full" for="2star5" title="Bad"></label>
											
											<input type="radio" id="1halfstar5" name="rating5" value="1.5"/>
											<label class="half" for="1halfstar5" title="Meh"></label>
											
											<input type="radio" id="1star5" name="rating5" value="1"/>
											<label class="full" for="1star5" title="Umm"></label>
											
											<input type="radio" id="halfstar5" name="rating5" value="0.5"/>
											<label class="half" for="halfstar5" title="Worst"></label>
											
										</fieldset>
										
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/platinum.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><div class="text"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">About Product</button></div></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM560<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							 <!-- create the code fot Modal  -->
							

							  <!-- Modal -->
							  <div class="modal fade" id="myModal6" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p>Diamond ring.</p>
									  <p> Price $350</p>
									  
									  <fieldset class="rating" >
										
										    <input type="radio" id="5star6" name="rating6" value="5"/>
											<label class="full" for="5star6" title="Excellent"></label>
											
											<input type="radio" id="4halfstar6" name="rating6" value="4.5"/>
											<label class="half" for="4halfstar6" title="Good"></label>
											
											<input type="radio" id="4star6" name="rating6" value="4"/>
											<label class="full" for="4star6" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar6" name="rating6" value="3.5"/>
											<label class="half" for="3halfstar6" title="Nice"></label>
											
											<input type="radio" id="3star6" name="rating6" value="3"/>
											<label class="full" for="3star6" title="Ok"></label>
											
											<input type="radio" id="2halfstar6" name="rating6" value="2.5"/>
											<label class="half" for="2halfstar6" title="Kinda bad"></label>
											
											<input type="radio" id="2star6" name="rating6" value="2"/>
											<label class="full" for="2star6" title="Bad"></label>
											
											<input type="radio" id="1halfstar6" name="rating6" value="1.5"/>
											<label class="half" for="1halfstar6" title="Meh"></label>
											
											<input type="radio" id="1star6" name="rating6" value="1"/>
											<label class="full" for="1star6" title="Umm"></label>
											
											<input type="radio" id="halfstar6" name="rating6" value="0.5"/>
											<label class="half" for="halfstar6" title="Worst"></label>
											
										</fieldset>									  
									  
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/ring.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><div class="text"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">About Product</button></div></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM550<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							 <!-- create the code fot Modal  -->
							

							  <!-- Modal -->
							  <div class="modal fade" id="myModal7" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									  <p>Diamond ring.</p>
									  <p> Price $350</p>
									  
									  <fieldset class="rating" >
										
										    <input type="radio" id="5star7" name="rating7" value="5"/>
											<label class="full" for="5star7" title="Excellent"></label>
											
											<input type="radio" id="4halfstar7" name="rating7" value="4.5"/>
											<label class="half" for="4halfstar7" title="Good"></label>
											
											<input type="radio" id="4star7" name="rating7" value="4"/>
											<label class="full" for="4star7" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar7" name="rating7" value="3.5"/>
											<label class="half" for="3halfstar7" title="Nice"></label>
											
											<input type="radio" id="3star7" name="rating7" value="3"/>
											<label class="full" for="3star7" title="Ok"></label>
											
											<input type="radio" id="2halfstar7" name="rating7" value="2.5"/>
											<label class="half" for="2halfstar7" title="Kinda bad"></label>
											
											<input type="radio" id="2star7" name="rating7" value="2"/>
											<label class="full" for="2star7" title="Bad"></label>
											
											<input type="radio" id="1halfstar7" name="rating7" value="1.5"/>
											<label class="half" for="1halfstar7" title="Meh"></label>
											
											<input type="radio" id="1star7" name="rating7" value="1"/>
											<label class="full" for="1star7" title="Umm"></label>
											
											<input type="radio" id="halfstar7" name="rating7" value="0.5"/>
											<label class="half" for="halfstar7" title="Worst"></label>
											
										</fieldset>
									  
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/silverring.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><div class="text">Buy</div></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM560<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							  <!-- create the code fot Modal  -->
							 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">About Product</button>

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
									  <p>Some text in the modal.</p>
									  
									  <fieldset class="rating" >
										
										    <input type="radio" id="5star8" name="rating8" value="5"/>
											<label class="full" for="5star8" title="Excellent"></label>
											
											<input type="radio" id="4halfstar8" name="rating8" value="4.5"/>
											<label class="half" for="4halfstar8" title="Good"></label>
											
											<input type="radio" id="4star8" name="rating8" value="4"/>
											<label class="full" for="4star8" title="Pretty good"></label>
											
											<input type="radio" id="3halfstar8" name="rating8" value="3.5"/>
											<label class="half" for="3halfstar8" title="Nice"></label>
											
											<input type="radio" id="3star8" name="rating8" value="3"/>
											<label class="full" for="3star8" title="Ok"></label>
											
											<input type="radio" id="2halfstar8" name="rating8" value="2.5"/>
											<label class="half" for="2halfstar8" title="Kinda bad"></label>
											
											<input type="radio" id="2star8" name="rating8" value="2"/>
											<label class="full" for="2star8" title="Bad"></label>
											
											<input type="radio" id="1halfstar8" name="rating8" value="1.5"/>
											<label class="half" for="1halfstar8" title="Meh"></label>
											
											<input type="radio" id="1star8" name="rating8" value="1"/>
											<label class="full" for="1star8" title="Umm"></label>
											
											<input type="radio" id="halfstar8" name="rating8" value="0.5"/>
											<label class="half" for="halfstar8" title="Worst"></label>
											
										</fieldset>
									  
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  
								</div>
							  </div>
							  <!-- End ofModal code -->
							  
							  
							  
					     </div>
				        </div>
				    </div>
				</div>
				
				
			</div>
		</div>

