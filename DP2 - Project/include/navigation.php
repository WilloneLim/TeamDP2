     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Deallo House Craft</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
                    <ul class="dropdown-menu">
					 <li><a href="product-list.php">All Products</a></li>
                        <li><a href="clothing.php">Clothing and Accesories</a></li>
                        <li><a href="jewelry.php">Jewelry</a></li>
                        <li><a href="crafts.php">Craft Supplies</a></li>
                        <li><a href="room.php">Room Decor</a></li>
                        <li><a href="toys.php">Soft Toys</a></li>
                        <li><a href="arts.php">Vintage arts</a></li>
                        <li><a href="wedding.php">Wedding Accesories</a></li>
                    </ul>
                </li>
                
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                <?php 
                
                if(!isset($_SESSION['login_user']))
                {
                    echo '<a href="sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign UP</a>';
                }
                else
                {
                    echo '<a href="#"><span class="glyphicon glyphicon-user"></span>' .$_SESSION["login_user"]. '</a>';
                }
                
                ?>
                </li>    
                
                <li>    
                <?php
                
                if(!isset($_SESSION['login_user']))
                {
                    echo '<a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a>';
                }
                else
                {
                    echo '<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a>';
                }
                
                ?>
                </li>
                
                <li>
                    <?php 
                    
                    if(!isset($_SESSION['login_user']))
                    {
                        
                    }
                    else
                    {
                        echo '<a href="Pro_regis.php">Sell On Deallo</a>';
                    }
                    
                    ?>
                       
                </li>
				   
                <li>
                    <?php 
                    
                    if(!isset($_SESSION['login_user']))
                    {
                        
                    }
                    else
                    {
                        echo '<a href="carts.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>';
                    }
                    
                    ?>
                       
                </li>
            </ul>
        </div>
    </nav>