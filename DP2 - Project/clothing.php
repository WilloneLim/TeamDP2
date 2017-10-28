<!DOCTYPE html>
<html>
<head>
    <title>Clothing and Accesories</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> 
	

        <script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>
</head>
<body>

    <?php session_start(); ?>
    <?php include ("include/navigation.php"); ?>
	
	
        <div class="container-fluid">
			<div class="Clothing-Accesories"><!--features_items-->
			   <h2 class="title text-center">Clothing and Accessories</h2>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#"><img src="image/bluedress.jpg" class="img-responsive" alt="product"/></a>
						    <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">About Product</button></a>
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
									  <p>Ladies colorful party dress </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/bluedress.jpg" class="imag" alt="product"/></a></div>
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
                                        <form action="modComments/post_comments1.php" method="post" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md1" value="Post">
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $rating = mysqli_query($conn, "SELECT * FROM rating WHERE prod_id =1");
                                          while($row = mysqli_fetch_assoc($rating))
                                          {
                                              $user = $row['rate'];
                                             
                                              
                                              echo "<p>$rate: $rate</p>";
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
							 
							 
					     </div>
				        </div>
				    </div>
				</div>
				
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/reddress.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM110<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
				

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
									  <p>Ladies colorful party dress </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/reddress.jpg" class="imag" alt="product"/></a></div>
									</div>
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
                                        
                                        <form action="modComments/post_comments2.php" method="post" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md2" value="Post" />
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =2");
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
							 
							 
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/pinkdress.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM100<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							

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
									  <p>Ladies colorful party dress </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/pinkdress.jpg" class="imag" alt="product"/></a></div>
									</div>
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
                                        
                                        <form action="modComments/post_comments3.php" method="post" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md3" value="Post">
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =3");
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
							 
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/purpledress.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM160<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
					         <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							

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
									  <p>Ladies colorful party dress </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/purpledress.jpg" class="imag" alt="product"/></a></div>
									</div>
									  <fieldset class="rating" >
										
										    <input type="radio" id="5star4" name="rating4" value="5"/>
											<label class="full" for="5star" title="Excellent"></label>
											
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
                                        
                                        <form action="modComments/post_comments4.php" method="post" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md4" value="Post">
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =4");
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
							 
							 
							 
							 
						 </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/whiteshirt.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM100<i></i></span></a>
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
									   <p>Men formal shirt </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/whiteshirt.jpg" class="imag" alt="product"/></a></div>
									</div>
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
                                        
                                        <form action="modComments/post_comments5.php" method="post" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md5" value="Post">
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =5");
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
							 
							 
							 
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/blackshirt.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM200<i></i></span></a>
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
									 <p>Men formal shirt </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/blackshirt.jpg" class="imag" alt="product"/></a></div>
									</div>
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
                                        
                                        <form action="modComments/post_comments6.php" method="post" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md6" value="Post">
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =6");
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
							 
							 
							 
							 
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/blueshirt.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM100<i></i></span></a>
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
									 <p>Men formal shirt </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/blueshirt.jpg" class="imag" alt="product"/></a></div>
									</div>
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
                                        
                                        <form action="modComments/post_comments7.php" method="post" name="mod7" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md7" value="Post">
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =7");
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
							 
							 
							 
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
						  <a href="#" ><img src="image/casual.jpg" class="img-responsive" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <a href="#" class="item"><span class="price">RM120<i></i></span></a>
						    </div>
						     <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							 <a href="#" class="wishlist"><i class="fa fa-plus-square"></i> Add to wishlist</a>
							 
							 
							 <!-- create the code fot Modal  -->
							 

							  <!-- Modal -->
							  <div class="modal fade" id="myModal8" role="dialog">
								<div class="modal-dialog">
								
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Product Details</h4>
									</div>
									<div class="modal-body">
									 <p>Men formal shirt </p>
									  <p>Price: $52 </p>
                                        <div class="zoomin frame"><div class="imag"><a href="#"><img src="image/casual.jpg" class="imag" alt="product"/></a></div>
									</div>
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
                                        
                                        <form action="modComments/post_comments8.php" method="post" class="form-inline">
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md8" value="Post">
                                        </form>
                                          
                                          <?php
                                          
                                          include ("include/conn.php"); 
                                          
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =8");
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
							 
							 
							 
							 
					     </div>
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
    <script src="js/unit.js"></script>
    </body>
</html>    