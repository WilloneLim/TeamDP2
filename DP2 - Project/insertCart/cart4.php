<?php

include ("include/conn.php");

if(isset($_SESSION['login_user']))
{
    $buyername = $_SESSION['login_user'];
    
    $pName = "Ladies purple party dress";
    $pPrice = 160;
    
    $sql = "INSERT INTO cart (item_name, item_price, buyer) VALUES ('".$pName."' ,'".$pPrice."' ,'".$buyername."')";
    mysqli_query($conn, $sql);
    
    
}
else
{
    
}



?>