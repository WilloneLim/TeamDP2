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
    
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="carthead">My Shopping Cart</h1>
                
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
                            
                            while($cartrow = mysqli_fetch_assoc($find_items))
                        {
                            $itemName = $cartrow['item_name'];
                            $itemPrice = $cartrow['item_price'];
                            
                            echo "<tr><td> $itemName </td>";
                            echo "<td> $itemPrice </td></tr>";
                        }
        
            
    
                        }
                        ?>
                    </tbody>
                </table>
                
                <table class="table table-bordered table-condensed table-striped ">
                    <thead>
                        <th>Total Items</th>
                        <th>Grand Total</th>
                    </thead>
                    <tbody>
                        <?php
                        
                        if(isset($_SESSION['login_user']))
                        {
        
                            include ("include/conn.php");
        
                            $find_items = mysqli_query($conn, "SELECT * FROM cart WHERE buyer = '".$_SESSION['login_user']."' ");
                            
                            $totalItem = mysqli_num_rows($find_items);
                            
                            $result = mysqli_query($conn, "SELECT SUM(item_price) AS value_sum FROM cart WHERE buyer = '".$_SESSION['login_user']."'");
                            
                            $row = mysqli_fetch_assoc($result);
                            
                            $sum = $row['value_sum'];
                            
                            echo "<tr><td> $totalItem </td>";
                            echo "<td> $sum </td></tr>";
                            
    
                        }
                        ?>
                        
                    </tbody>
                </table>
                
                <button type="button" class="btn btn-success btn-lg">Checkout</button>
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