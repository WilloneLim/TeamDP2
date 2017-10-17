<?php

session_start();

$commentConn = mysqli_connect('127.0.0.1', 'root', '', 'deallo');

if(mysqli_connect_errno())
{
    echo "Database connection has failed with the following errors: ".mysqli_connect_error();
    die();
}

if(!mysqli_select_db($commentConn, 'deallo'))
{
    die("Uh oh couldnt select database --> deallo" .$commentConn->connect_error. ">");
}

if(isset($_SESSION['login_user'])){
    $name = $_SESSION['login_user'];
}else{
    $name = "Anonymous";
}

$modal_comment = $_POST['msg'];
$productID = 6;

$commsql = "INSERT INTO productcomments (user, prod_comment, prod_id) VALUES ('".$name."' ,'".$modal_comment."' ,'".$productID."')";

mysqli_query($commentConn, $commsql);
header("location: ../clothing.php");


?>