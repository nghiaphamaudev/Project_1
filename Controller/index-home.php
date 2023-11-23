<?php
session_start();
include "../Model/pdo.php";
include "../Model/action-categories.php";
include "../Model/action-product.php";
include "../Model/action-account.php";
include "../Model/action-shopping-cart.php";
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

        case "user" :
        case "login":
            include "../View/login.php";
            break;

        case "log-out":
            unset($_SESSION['user']);
            include "../View/login.php";
            break;
        
        case "add-data-user":
            if(isset($_POST['submit']) && $_POST['submit']){
                $email = $_POST['email'];
                $fullName = $_POST['fullName'];
                $password = $_POST['password'];
                Insert_Data_User($email, $fullName ,$password);
                $_SESSION['status'] = "Đăng Kí Thành Công";
            }
            include "../View/Admin/sweetalert.php";
            include "../View/login.php";
            break;

         case "login-user":
            if(isset($_POST['submit']) && $_POST['submit']){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $list_one_data_user = Check_Data_User($email, $password);

                if(is_array($list_one_data_user)){
                    $_SESSION['user'] = $list_one_data_user;
                    include "../View/home.php";
                    break;
                }else{
                    $inform = "Tài khoản không tồn tại. Vui lòng kiểm tra lại";
                }
            }
            include "../View/login.php";
            break;
    
        case "create-user":
            include "../View/register.php";
            break;

        case "about":
            include "../View/infor.php";
            break;
            case "select-option":
                $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
                if (isset($_POST['submit']) && $_POST['submit']) {
                    $id_product = $_POST['id_product'];
                    $price_delivery = (int)($_POST['price_delivery']);
                    $name_products = $_POST['name_product'];
                    $id_topping = $_POST['id_topping'];
                    $price_product = (int)($_POST['price_product']);
                    $price_topping = Load_Price_Topping($id_topping)['price_topping'];
                    $name_topping = Load_Price_Topping($id_topping)['name_topping'];
                    $images = $_POST['images'];
                    $quantity_product = (int)($_POST['quantity']);
            
                    // kiểm tra xem id_product này đã tồn tại trong db chưa
                    $id_products = array();
                    foreach ($list_data_shopping_cart as $value) {
                        $id_products[] = $value['id_products'];
                    }
            
                    // Nếu id_product đã tồn tại trong mảng id_products
                    if (in_array($id_product, $id_products)) {
                        $quantity = (int)(Load_Quantity_In_Shopping_Cart($id_product));
                        $quantity_new = $quantity + $quantity_product;
                        $total = ($quantity_new * $price_product) + $price_topping + $price_delivery;
                        Update_Shopping_Cart($id_product, $quantity_new, $total, $name_topping);
                        $message = "Thêm thành công";
                    } else {
                        // Nếu chưa thì tiến hành add sản phẩm mới vào giỏ hàng
                        $total = ($quantity_product * $price_product) + $price_topping + $price_delivery;
                        Add_Product_Shopping_Cart($id_product, $quantity_product, $id_user, $total, $name_products, $price_product, $price_delivery, $name_topping, $images);
                        $message = "Thêm giỏ hàng thành công";
                    }
                }
            
                $list_one_data_product = Load_One_Data_Products($id_product);
                include "../View/detail-product.php";
                break;
            

        case "shopping-cart":
            $id_user = $_SESSION['user']['id_user'];
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $totals = array(); 
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
            }
            $total_cost = Total_Cost($totals);
            include "../View/shopping-cart.php";
            break;

        case "cancel-shopping-cart":
            $id_user = $_SESSION['user']['id_user'];
            $id_cart = $_GET['id_cart'];
            Cancel_Shopping_Cart($id_cart);
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $totals = array(); 
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
            }
            $total_cost = Total_Cost($totals);
            include "../View/shopping-cart.php";
            break;

         case "payment":
            $id_user = $_SESSION['user']['id_user'];
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $totals = array(); 
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
            }
            $total_cost = Total_Cost($totals);
            include "../View/payment.php";
            break;

        case "confirm-payment":
            // $id_user = $_SESSION['user']['id_user'];
            // if(isset($_POST['submit']) && $_POST['submit']){
            //     $id_cart = $_POST['id_shopping_cart'];
            //     $name_receiver = $_POST['name_receiver'];
            //     $phone_receiver = $_POST['phone_receiver'];
            //     $address_receiver = $_POST['address_receiver'];
            //     Add_Data_Bill($id_cart, $name_receiver, $id_user, $phone_receiver, $address_receiver);
            // }
            $list_data_bill = Load_All_Data_Bill();
            // var_dump($list_data_bill);
            // Cancel_Shopping_Cart($id_cart);
            include "../View/invoice.php";
            break;
        
        case "invoice":
            $list_data_bill = Load_All_Data_Bill();
            include "../View/invoice.php";
            break;
        default:
            include "../View/home.php";
            break;
    }
}else{
    include "../View/home.php";
    // include "../View/login.php";
    // include "../View/register.php";
    // include "../View/detail-product.php";
}

include "../View/footer.php";