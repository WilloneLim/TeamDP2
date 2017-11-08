<?php

include 'filter/config.php';

$data = json_decode(file_get_contents("php://input"));

$task = $data->task;

$response = array();
// get all products
if($task == 1){
    $query = 'SELECT * FROM product ORDER BY price ASC';
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result) ){
        $response[] = $row;
    }
}

// filter products by price
if($task == 2){
    $min = $data->min;
    $max = $data->max;

    $query = 'SELECT * FROM product WHERE price BETWEEN "'.$min.'" and "'.$max.'" ORDER BY price ASC';
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result) ){
        $response[] = $row;
    }
}

echo json_encode($response);