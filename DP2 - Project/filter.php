<?php  

if($product['price']>100 and $product['price']<150)
{
    echo "fl1";
}
elseif($product['price']>150 and $product['price']<200)
{
    echo "fl2";
}
elseif($product['price']>200 and $product['price']<150)
{
    echo "fl3";
}
else
{
    
}

?>