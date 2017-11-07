<?php

include ('conn.php');

sql = "DELETE * FROM cart WHERE buyer =" .$_SESSION['login_user']. "";

if(mysqli_query($conn, $sql))
{
    header('Location:index.php');
    
}
else
{
    
}

   

?>