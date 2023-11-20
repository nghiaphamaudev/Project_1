<?php
session_start();
include "../Model/pdo.php";
include "../Model/action-categories.php";
include "../Model/action-product.php";
include "../Model/action-account.php";
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
?>