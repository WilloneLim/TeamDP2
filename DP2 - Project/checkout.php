<!DOCTYPE html>
<html>
<head>
    <title>Checkout Page</title>
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
<body data-ng-app="validationApp" data-ng-controller="mainController">
    <?php session_start(); ?>
    <?php include ("include/navigation.php"); ?>
    
    
    
    <div class="row" id="checkoutrow">
        <div class="col-md-2"></div>
        
        <div class="col-md-8">
        <form name="checkoutForm" method="post"   id="checkout-form" novalidate>
                <div class="form-group col-md-6" ng-class="{'has-error' : checkoutForm.full_name.$invalid && !checkoutForm.full_name.$pristine } ">
                    <label for="full_name">Full Name:</label>
                    <input class="form-control" id="full_name" name="full_name" type="text" data-ng-model="user.full_name" required>
                    <p data-ng-show="checkoutForm.full_name.$invalid && !checkoutForm.full_name.$pristine" class="help-block">Your name is required.</p>
                </div>
                <div class="form-group col-md-6" ng-class="{'has-error' : checkoutForm.email.$invalid && !checkoutForm.email.$pristine }">
                    <label for="email">Email:</label>
                    <input class="form-control" id="email" name="email" type="text" data-ng-model="user.email" required>
                    <p data-ng-show="checkoutForm.email.$invalid && !checkoutForm.email.$pristine" class="help-block">Enter a valid email.</p>
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address 1:</label>
                    <input class="form-control" id="address" name="address" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="address2">Address 2:</label>
                    <input class="form-control" id="address2" name="address2" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input class="form-control" id="city" name="city" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State:</label>
                    <input class="form-control" id="state" name="state" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="zip_code">Zip Code:</label>
                    <input class="form-control" id="zip_code" name="zip_code" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="country">Country:</label>
                    <input class="form-control" id="country" name="country" type="text" required>
                </div>
            
            
            <button type="button" class="btn btn-primary" onclick="retrieve()" data-toggle="modal" data-target="#checkoutModal">Proceed</button>
                
        </form>
            
            
             <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModal" >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form name="checkmodal" action="index.php" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="checkoutModalLabel">Checkout Information</h4>
                            </div>
                            <div class="modal-body">    
                                <h1>Checkout Complete - Thank You</h1>
                                <p id="billname"></p>
                                <p id="homeinfo"></p>

                                <br /><hr />
                                <h3>Billing information</h3>
                                
                                <table class="table table-bordered table-condensed table-striped ">
                                   <thead>
                                       <th>Item</th>
                                       <th>Price</th>
                                   </thead>
                                   <tbody>
                                       <?php
                                       
                                       if(isset($_SESSION['login_user']))
                                       {
                       
                                           include ("include/conn.php");
                       
                                           $find_items = mysqli_query($conn, "SELECT * FROM cart WHERE buyer = '".$_SESSION['login_user']."' ");
                                           
                                           $result = mysqli_query($conn, "SELECT SUM(item_price) AS value_sum FROM cart WHERE buyer = '".$_SESSION['login_user']."'");
                            
                                           $row = mysqli_fetch_assoc($result);
                                           
                                           $sum = $row['value_sum'];
                                           
                                           while($cartrow = mysqli_fetch_assoc($find_items))
                                       {
                                           $itemName = $cartrow['item_name'];
                                           $itemPrice = $cartrow['item_price'];
                                           
                                           echo "<tr><td>" .$itemName. "</td>";
                                           echo "<td> RM " .$itemPrice. "</td></tr>";
                                           
                                       }
                                           
                                           echo "<tr id='sub'><td></td><td>Subtotal: RM ".$sum."</tr>";
                           
                   
                                       }
                                       ?>
                                   </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                
                                <input type="submit" name="checkdone" class="btn btn-primary" value="Done">
                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            
            

        </div>
        
        <div class="col-md-2"></div>
        
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