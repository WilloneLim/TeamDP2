<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'deallo');

if(mysqli_connect_errno())
{
    echo "Database connection has failed with the following errors: ".mysqli_connect_error();
    die();
}

if(!mysqli_select_db($conn, 'deallo'))
{
    die("Uh oh couldnt select database --> deallo" .$conn->connect_error. ">");
}


?>