<?php
include_once('model/product.php');
$gender='woman';
if(isset($_GET['gender'])){
    $gender=$_GET['gender'];
}
switch($gender){
    case 'woman':
        $womantrend1=getProductWomanTrend1();
        $womantrend2=getProductWomanTrend2();
        include('view/woman.php');
    break;
    case 'men':
        $mentrend1=getProductWomanTrend1();
        $mentrend2=getProductWomanTrend2();
        include ('view/men.php');
    break;

}

?>