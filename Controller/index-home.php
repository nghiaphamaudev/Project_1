<?php
session_start();
ob_start();
include "../View/header.php";
include "../Model/pdo.php";
include "../Model/action-categories.php";
include "../Model/action-product.php";
include "../Model/action-account.php";
include "../Model/action-shopping-cart.php";


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

        case "login":
            include "../View/login.php";
            break;

        case "log-out":
                session_unset();
                header("Location:../../../../Dự_án_1/Controller/index-home.php?request=login");
                break;    
        
        case "add-data-user":  
            include "../View/Admin/sweetalert.php";
            include "../View/login.php";
            if(isset($_POST['submit']) && $_POST['submit']){
                $email = $_POST['email'];
                $fullName = $_POST['fullName'];
                $password = $_POST['password'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Email không hợp lệ
                    $err="Email không hợp lệ";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
                    exit();           
                }
                 if (strlen($password) < 6) {
                    // Mật khẩu quá ngắn
                    $err= "Mật khẩu quá ngắn. Phải có ít nhất 6 ký tự.";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
                    exit();
                }   
                 $fullName = trim($fullName);
                 if (preg_match('/^[a-zA-ZÀ-ỹ\s]+$/u', $fullName)) {
                  
                } else {
                    $err= "Họ tên không hợp lệ";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
                    exit();
                }
              
                Insert_Data_User($email, $fullName ,$password);
                $err= "Đăng Kí Thành Công";
                header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
            }


         
            break;

         case "login-user":
            
            $_SESSION['']="";
            if(isset($_POST['submit']) && $_POST['submit']){
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(isset($_SESSION["check_err_login"])){
                    unset($_SESSION['check_err_login']);
                }
                $_SESSION["check_err_login"] = "";
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Email không hợp lệ
                    $check_err_login=   $_SESSION["check_err_login"]="Email không hợp lệ";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=login&check_err_login=$check_err_login");
                    exit();           
                }else{

                    $list_one_data_user = Check_Data_User($email, $password);

                    if(is_array($list_one_data_user)){
                        $_SESSION['user'] = $list_one_data_user;
                        header("Location:../Controller/index-home.php");
                       
                    }else{
                        $check_err_login= $_SESSION["check_err_login"]="Tài khoản không tồn tại. Vui lòng kiểm tra lại";
                        header("Location:../../../../Dự_án_1/Controller/index-home.php?request=login&check_err_login=$check_err_login");
                        break; 
                    
                }
            }
            }
         
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
                        // echo $quantity;
                        $quantity_new = $quantity + $quantity_product;
                        $total = ($quantity_new * $price_product) + $price_topping;
                        Update_Shopping_Cart($id_product, $quantity_new, $total, $name_topping);
                        $message = "Thêm thành công";
                    } else {
                        // Nếu chưa thì tiến hành add sản phẩm mới vào giỏ hàng
                        $total = ($quantity_product * $price_product) + $price_topping ;
                        Add_Product_Shopping_Cart($id_product, $quantity_product, $id_user, $total, $name_products, $price_product, $name_topping, $images);
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
        
        case "promotion":
            if(isset($_POST['submit']) && $_POST['submit']){
                $promotion_code = $_POST['code_promotion'];
                if($promotion_code === "PHAMVANNGHIA"){
                    $price_promotion = "10%";
                }else{
                    $message ="Code không tồn tại";
                }
            }
            $id_user = $_SESSION['user']['id_user'];
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $totals = array(); 
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
            }
            $total_cost = Total_Cost($totals) - (Total_Cost($totals) * 10 / 100);
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
            $total_cost = $total_cost = Total_Cost($totals) - (Total_Cost($totals) * 10 / 100);
            include "../View/shopping-cart.php";
            break;

         case "payment":
            $id_user = $_SESSION['user']['id_user'];
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $total_name = array();
            $totals = array(); 
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
                $product_name = $value['name_products'];
                $quantity = $value['quantity'];
                $name_topping = $value['name_topping'];
                $total_name[] = "$product_name ($quantity)($name_topping)";
            }
            // var_dump($total_name);
            $total_cost = $total_cost = Total_Cost($totals) - (Total_Cost($totals) * 10 / 100); ;
            include "../View/payment.php";
            break;

        case "confirm-payment":
            $id_user = $_SESSION['user']['id_user'];
            if(isset($_POST['submit']) && $_POST['submit']){
                $name_receiver = $_POST['name_receiver'];
                $phone_receiver = $_POST['phone_receiver'];
                $address_receiver = $_POST['address_receiver'];
                $total_name_products = $_POST['total_name_products'];
                $total_price = $_POST['total_price'] + 10;
                $method = $_POST['method'];
                $email = $_POST['email_receiver'];
                Add_Data_Bill($id_user, $total_name_products, $name_receiver, $address_receiver, $phone_receiver, $method, $total_price, $email);
            }
            $message="Đặt hàng thành công";
            $list_data_bill = Load_All_Data_Bill($id_user);
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $totals = array(); 
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
            }
            $total_cost = Total_Cost($totals) - (Total_Cost($totals) * 10 / 100);
            include "../View/invoice.php";
            break;
        
        case "invoice":
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $totals = array(); 
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
            }
            $total_cost = Total_Cost($totals) - (Total_Cost($totals) * 10 / 100);
            $id_user = $_SESSION['user']['id_user'];
            $list_data_bill = Load_All_Data_Bill($id_user);
            if(!is_array($list_data_bill)){
                $message = "Bạn chưa có đơn hàng nào !!!";
            }else{
                include "../View/invoice.php";
            }
            break;

        default:
            include "../View/home.php";
            break;
    }
}else{
    include "../View/home.php";
}

include "../View/footer.php";
ob_end_flush();
?>