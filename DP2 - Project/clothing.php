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
    <?php include ("include/navigation.php"); ?>
	
	
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
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                        <form method="post" class="form-inline">
						  <a href="#"><img src="image/bluedress.jpg" class="img-responsive" id="images" alt="product"/></a>
						    <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">About Product</button></a>
							</div>
							<div class="grid_1">
						     <h2 id="price">RM 120</h2>
						    </div>
						     <input type="submit" name="cart" class="button" value="Add to cart">
				            <?php
                            
                            if(isset($_POST['cart']))
                            {
                                include ("insertCart/cart.php");
                            }
                            
                            
                            ?>
							 
							 
							 
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
									  <p>Ladies blue party dress </p>
									  <p>Price: RM120 </p>
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
                                        
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md1" value="Post">
                                     
                                          
                                          <?php
                                          include ("include/conn.php");
                                          
                                          if(isset($_POST['md1']))
                                          {
                                              
                                              include ("modComments/post_comments1.php");
                                          }
                                        
                                          $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =1");
                                          while($row = mysqli_fetch_assoc($find_comments))
                                          {
                                               $user = $row['user'];
                                               $userComment = $row['prod_comment'];
                                              
                                               echo "<p>$user: $userComment</p>";
                                          }
                                        
                                          ?>
                                          
									  
									</div>
									<div class="modal-footer">
									 <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
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
				
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                        <form  method="post" class="form-inline">
						  <a href="#" ><img src="image/reddress.jpg" class="img-responsive" id="images" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <h2 id="price">RM 110</h2>
						    </div>
						     <input type="submit" name="cart" class="button" value="Add to cart">
				            <?php
                            
                            if(isset($_POST['cart2']))
                            {
                                include ("insertCart/cart2.php");
                            }
                            
                            
                            ?>
				

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
                                        
                                        
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md2" value="Post" />
                                      
                                          
                                          <?php
                                          
                                          include ("include/conn.php");
                   
                                          if(isset($_POST['md2']))
                                          {
                                              
                                              include ("modComments/post_comments2.php");
                                          }
                                           
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
							 
                             </form>
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                             <form method="post" class="form-inline">
						  <a href="#" ><img src="image/pinkdress.jpg" class="img-responsive" id="images" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <h2 id="price">RM 100</h2>
						    </div>
						     <input type="submit" name="cart" class="button" value="Add to cart">
				            <?php
                            
                            if(isset($_POST['cart3']))
                            {
                                include ("insertCart/cart3.php");
                            }
                            
                            
                            ?>
							

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
									  <p>Ladies pink party dress </p>
									  <p>Price: RM100 </p>
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
                                        
                                        
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md3" value="Post">
                                      
                                          
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
							 
                             </form>
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                             <form method="post" class="form-inline">
						  <a href="#" ><img src="image/purpledress.jpg" class="img-responsive" id="images" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <h2 id="price">RM 160</h2>
						    </div>
							<input type="submit" name="cart" class="button" value="Add to cart"> 
				            <?php
                            
                            if(isset($_POST['cart4']))
                            {
                                include ("insertCart/cart4.php");
                            }
                            
                            
                            ?>
							 
							

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
									  <p>Ladies purple party dress </p>
									  <p>Price: RM160 </p>
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
                                        
                                       
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md4" value="Post">
                                       
                                          
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
							 
							 
							 
                             </form> 
						 </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                             <form method="post" class="form-inline">
						  <a href="#" ><img src="image/whiteshirt.jpg" class="img-responsive" id="images" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <h2 id="price">RM 100</h2>
						    </div>
							<input type="submit" name="cart" class="button" value="Add to cart"> 
				            <?php
                            
                            if(isset($_POST['cart5']))
                            {
                                include ("insertCart/cart5.php");
                            }
                            
                            
                            ?>
							 


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
									  <p>Price: RM100 </p>
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
                                        
                                        
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md5" value="Post">
                                        
                                          
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
							 
							 
                             </form>
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                             <form method="post" class="form-inline">
						  <a href="#" ><img src="image/blackshirt.jpg" class="img-responsive" id="images" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <h2 id="price">RM 200</h2>
						    </div>
							<input type="submit" name="cart" class="button" value="Add to cart"> 
				            <?php
                            
                            if(isset($_POST['cart6']))
                            {
                                include ("insertCart/cart6.php");
                            }
                            
                            
                            ?>
							 
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
									  <p>Price: RM200 </p>
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
                                        
                                       
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md6" value="Post">
                                    
                                          
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
							 
							 
							 
                             </form>
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                             <form method="post" class="form-inline">
						  <a href="#" ><img src="image/blueshirt.jpg" class="img-responsive" id="images" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <h2 id="price">RM 100</h2>
						    </div>
							<input type="submit" name="cart" class="button" value="Add to cart"> 
				            <?php
                            
                            if(isset($_POST['cart7']))
                            {
                                include ("insertCart/cart7.php");
                            }
                            
                            
                            ?>
							 
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
									  <p>Price: RM100 </p>
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
                                        
                                        
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md7" value="Post">
                                      
                                          
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
							 
							 
                             </form> 
					     </div>
				        </div>
				    </div>
				</div>
				
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
						 <div class="products">
                             <form method="post" class="form-inline">
						  <a href="#" ><img src="image/casual.jpg" class="img-responsive" id="images" alt="product"/></a>
						  <div class="middle">
							  <a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8">About Product</button></a>
							</div>
						    <div class="grid_1">
						     <h2 id="price">RM 120</h2>
						    </div>
							<input type="submit" name="cart" class="button" value="Add to cart">
							<?php
                            
                            if(isset($_POST['cart8']))
                            {
                                include ("insertCart/cart8.php");
                            }
                            
                            
                            ?>
							 

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
									  <p>Price: RM120 </p>
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
                                        
                                        
                                            <label>Comment: <br/><textarea cols="45" rows="3" name="msg"></textarea></label><br/>
                                            <input type="submit" name="md8" value="Post">
                                        
                                          
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
							 
							 
							 
                             </form> 
					     </div>
				        </div>
				    </div>
				</div>
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
    <script src="js/unit.js"></script>
	
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