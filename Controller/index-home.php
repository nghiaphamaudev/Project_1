<?php
include "../Model/pdo.php";
include "../Model/action-categories.php";
include "../Model/action-product.php";
include "../View/header.php";

$list_categories = Load_All_Data_Categories();
$list_products = Load_All_Data_Products();
$list_topping = Load_All_Data_Topping();


if(isset($_GET['request']) && $_GET['request']){

    switch($_GET['request']){
        case "detail":
            if(isset($_GET['id']) && $_GET['id']){
                $id = $_GET['id'];
                $list_one_data_product = Load_One_Data_Products($id);
            }
            include "../View/detail-product.php";
            break;

        case "about":
            include "../View/infor.php";
            break;
            
        default:
            include "../View/home.php";
            break;
    }
}else{
    include "../View/home.php";
    // include "../View/detail-product.php";
}

include "../View/footer.php";
?>