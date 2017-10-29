<?php


include ("include/conn.php");

if(isset($_SESSION['login_user'])){
    $name = $_SESSION['login_user'];
    
    $modal_comment = $_POST['msg'];
    $productID = 2;

    $commsql = "INSERT INTO productcomments (user, prod_comment, prod_id) VALUES ('".$name."' ,'".$modal_comment."' ,'".$productID."')";

    mysqli_query($conn, $commsql);
    
    $find_comments = mysqli_query($conn, "SELECT * FROM productcomments WHERE prod_id =2");
    while($row = mysqli_fetch_assoc($find_comments))
    {
        $user = $row['user'];
        $userComment = $row['prod_comment'];
                                              
        echo "<p>$user: $userComment</p>";
    }

    
}else{
    
}




?>