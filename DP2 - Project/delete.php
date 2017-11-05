<?php

include ("include/conn.php");

$sql = "DELETE FROM cart WHERE id = '$_GET[id]'";

if(mysqli_query($conn, $sql))
{
    header("refresh:1, url=carts.php");
}else
{
    echo "Not Deleted";
}


?>