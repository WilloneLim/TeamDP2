<?php

include ("include/conn.php");

if(isset($_SESSION['login_user']))
{
    $buyername = $_SESSION['login_user'];
    
    $pName = "Men formal shirt";
    $pPrice = 120;
    
    $sql = "INSERT INTO cart (item_name, item_price, buyer) VALUES ('".$pName."' ,'".$pPrice."' ,'".$buyername."')";
    mysqli_query($conn, $sql);
    
    
}
else
{
    
}



?>