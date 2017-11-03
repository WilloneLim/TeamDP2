<?php

if(isset($_SESSION['login_user'])){
    $name = $_SESSION['login_user'];
    
    $modal_comment = $_POST['msg'];
    $productID = $product['id'];

    $commsql = "INSERT INTO productcomments (user, prod_comment, prod_id) VALUES ('".$name."' ,'".$modal_comment."' ,'".$productID."')";

    mysqli_query($conn, $commsql);
    
    
    
}else{
    
}

?>