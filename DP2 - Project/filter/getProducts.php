<?php
if(isset($_POST['price_range'])){
    
    //Include database configuration file
    include('filter/config.php');
    
    //set conditions for filter by price range
    $whereSQL = $orderSQL = '';
    $priceRange = $_POST['price_range'];
    if(!empty($priceRange)){
        $priceRangeArr = explode(',', $priceRange);
        $whereSQL = "WHERE price BETWEEN '".$priceRangeArr[0]."' AND '".$priceRangeArr[1]."'";
        $orderSQL = " ORDER BY price ASC ";
    }else{
        $orderSQL = " ORDER BY categories DESC ";
    }
    
    //get product rows
    $query = $con->query("SELECT * FROM product $whereSQL $orderSQL");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
    ?>
    <?php }
    }else{
        echo 'Product(s) not found';
    }
}
?>