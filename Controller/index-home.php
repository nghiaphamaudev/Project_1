<?php
session_start();
ob_start();
include_once "../View/header.php";
include_once "../Model/pdo.php";
include_once "../Model/action-categories.php";
include_once "../Model/action-product.php";
include_once "../Model/action-account.php";
include_once "../Model/action-shopping-cart.php";
include_once "../Model/action-chart.php";
include_once "../Model/action-reviews.php";


$list_categories = Load_All_Data_Categories();
$list_products = Load_All_Data_Products();
$list_topping = Load_All_Data_Topping();


if (isset($_GET['request']) && $_GET['request']) {

    switch ($_GET['request']) {
        //load thông tin chi tiết sp, bình luận
        case "detail":
            if (isset($_GET['idd']) && $_GET['idd']) {
                $id = $_GET['idd'];
                Delete_Data_Reviews($id);
            }
              if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    $user = $id_user;
                } else {
                    $user = 0;
                }
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Lấy dữ liệu từ form
             
               if (isset($_POST['submit_comment'])) {
                    $id_products = $_POST['idproduct_rating'];
                    $comment = $_POST["comment"];
                    $rating = $_POST["rating"];
                    Insert_Reviews($id_products, $user, $comment, $rating);
                }
            } 
            
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $list_one_data_reviews=Load_One_Data_Reviews($id);
                $list_one_data_product = Load_One_Data_Products($id);
                $list_one_data_reviews=Load_One_Data_Reviews($id); 
                $list_reviews = Load_All_Data_Reviews_User($id);
            }
           
            include "../View/detail-product.php";
            break;

        // chuyển đến phần đăng nhập
        case "login":
            include "../View/login.php";
            break;

        // chuyển đến trang menu
        case "menu":
            unset($_SESSION['code']);
            include "../View/menu.php";
            break;

        // đăng xuất
        case "log-out":
            session_unset();
            header("Location:../../../../Dự_án_1/Controller/index-home.php?request=login");
            break;
        // lấy dữ liệu từ form đăng kí
        case "add-data-user":
            include "../View/login.php";
            if (isset($_POST['submit']) && $_POST['submit']) {
                $email = $_POST['email'];
                $fullName = $_POST['fullName'];
                $password = $_POST['password'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Email không hợp lệ
                    $err = "Email không hợp lệ";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
                    exit();
                }
                if (strlen($password) < 6) {
                    // Mật khẩu quá ngắn
                    $err = "Mật khẩu quá ngắn. Phải có ít nhất 6 ký tự.";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
                    exit();
                }
                $fullName = trim($fullName);
                if (preg_match('/^[a-zA-ZÀ-ỹ\s]+$/u', $fullName)) {

                } else {
                    $err = "Họ tên không hợp lệ";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
                    exit();
                }

                Insert_Data_User($email, $fullName, $password);
                $err = "Đăng Kí Thành Công";
                header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user&err=$err");
            }
            break;
        
            //check thông tin đăng nhập
        case "login-user":

            $_SESSION[''] = "";
            if (isset($_POST['submit']) && $_POST['submit']) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                if (isset($_SESSION["check_err_login"])) {
                    unset($_SESSION['check_err_login']);
                }
                $_SESSION["check_err_login"] = "";
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // Email không hợp lệ
                    $check_err_login = $_SESSION["check_err_login"] = "Email không hợp lệ";
                    header("Location:../../../../Dự_án_1/Controller/index-home.php?request=login&check_err_login=$check_err_login");
                    exit();
                } else {

                    $list_one_data_user = Check_Data_User($email, $password);

                    if (is_array($list_one_data_user)) {
                        $_SESSION['user'] = $list_one_data_user;
                        header("Location:../Controller/index-home.php");

                    } else {
                        $check_err_login = $_SESSION["check_err_login"] = "Tài khoản không tồn tại. Vui lòng kiểm tra lại";
                        header("Location:../../../../Dự_án_1/Controller/index-home.php?request=login&check_err_login=$check_err_login");
                        break;

                    }
                }
            }

            break;
        
        //chuyển đến trang đăng kí
        case "create-user":
            if (isset($_SESSION['user'])) {
                session_unset();
                header("Location:../../../../Dự_án_1/Controller/index-home.php?request=create-user");
                break;
            }
            include "../View/register.php";
            break;
        
        //trang thông tin 
        case "about":
            include "../View/infor.php";
            break;

        // lựa chọn số lượng, toping thêm vào giỏ hàng
        case "select-option":
            if(isset($_SESSION['user'])){
                $id_user = $_SESSION['user']['id_user'];
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            if (isset($_POST['submit']) && $_POST['submit']) {
                $id_product = $_POST['id_product'];
                $name_products = $_POST['name_product'];
                $id_topping = $_POST['id_topping'];
                $price_product = (int) ($_POST['price_product']);
                $price_topping = Load_Price_Topping($id_topping)['price_topping'];
                $name_topping = Load_Price_Topping($id_topping)['name_topping'];
                $images = $_POST['images'];
                $quantity_product = (int) ($_POST['quantity']);

                // kiểm tra xem id_product này đã tồn tại trong db chưa
                $id_products = array();
                foreach ($list_data_shopping_cart as $value) {
                    $id_products[] = $value['id_products'];
                }

                // Nếu id_product đã tồn tại trong mảng id_products
                if (in_array($id_product, $id_products)) {
                    $quantity = (int) (Load_Quantity_In_Shopping_Cart($id_product));
                    $quantity_new = $quantity + $quantity_product;
                    $total = ($quantity_new * $price_product) + $price_topping;
                    Update_Shopping_Cart($id_product, $quantity_new, $total, $name_topping, $price_topping);
                    $_SESSION['status'] = "Thêm giỏ hàng thành công";
                } else {
                    // Nếu chưa thì tiến hành add sản phẩm mới vào giỏ hàng
                    $total = ($quantity_product * $price_product) + $price_topping;
                    Add_Product_Shopping_Cart($id_product, $quantity_product, $id_user, $total, $name_products, $price_product, $name_topping, $price_topping, $images);
                    $_SESSION['status'] = "Thêm giỏ hàng thành công";
                }
            }
            include "../View/Admin/sweetalert.php";
                $list_one_data_product = Load_One_Data_Products($id_product);
                $list_one_data_reviews=Load_One_Data_Reviews($id_product);
                $list_one_data_reviews=Load_One_Data_Reviews($id_product); 
                $list_reviews = Load_All_Data_Reviews($id_product);
            include "../View/detail-product.php";
            }else{
                include "../View/login.php";
            }
            
            break;

        // hiện thông tin giỏ hàng theo người dùng
        case "shopping-cart":
            if(isset($_SESSION['code'])) unset($_SESSION['code']);
            if (isset($_SESSION['user'])) {
                $id_user = $_SESSION['user']['id_user'];
                $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
                $totals = array();
                foreach ($list_data_shopping_cart as $value) {
                    $totals[] = $value['total'];
                }
                $total_cost = Total_Cost($totals);
                include "../View/shopping-cart.php";
                break;
            } else {
                $message_shopping_cart = "Bạn phải đăng nhập để sử dụng tính năng này";
                include "../View/login.php";
                break;
            }
        
        // áp mã giảm giá
        case "promotion":
            if (isset($_POST['submit_promotion']) && $_POST['submit_promotion']) {
                $promotion_code = $_POST['code_promotion'];
                if ($promotion_code === "PHAMVANNGHIA") {
                    $price_promotion = 10;
                    $_SESSION['code'] = '10%';
                    $_SESSION['status'] = "Áp mã giảm giá thành công";
                } else {
                    $price_promotion = 0;
                    $message = "Code không tồn tại";
                }
            }
            $id_user = $_SESSION['user']['id_user'];
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $totals = array();
            foreach ($list_data_shopping_cart as $value) {
                $totals[] = $value['total'];
            }
            $total_cost = Total_Cost($totals) - ((Total_Cost($totals) * $price_promotion) / 100);
            include "../View/Admin/sweetalert.php";
            include "../View/shopping-cart.php";
            break;
        
        // xóa 1 sp ra khoải giỏ hàng
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
        
        //điền mẫu nhận hàng
        case "payment":
            $id_user = $_SESSION['user']['id_user'];
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            if (empty($list_data_shopping_cart)) {
                header("Location:../../../../Dự_án_1/Controller/index-home.php?request=");
                break;
            }
            ;
            $total_name = array();
            foreach ($list_data_shopping_cart as $value) {
                $product_name = $value['name_products'];
                $quantity = $value['quantity'];
                $name_topping = $value['name_topping'];
                $total_name[] = "$product_name ($quantity)($name_topping)";
            }
            // var_dump($total_name);
            $total_cost = $_POST['sub_total'];
            include "../View/payment.php";
            break;
        
        //xác nhận đặt hàng
        case "confirm-payment":
            unset($_SESSION['code']);
            $id_user = $_SESSION['user']['id_user'];
            if (isset($_POST['submit']) && $_POST['submit']) {
                $name_receiver = $_POST['name_receiver'];
                $phone_receiver = $_POST['phone_receiver'];
                $address_receiver = $_POST['address_receiver'];
                $total_name_products = $_POST['total_name_products'];
                $sub_total = $_POST['total_price'];
                $total_all = (float) ($sub_total + 10000);
                $method = $_POST['method'];
                $email = $_POST['email_receiver'];
                $currentDateTime = date("Y/m/d");
                $data_statistical = Load_All_Data_Statiscal();
                $_SESSION['status'] = "Thanh toán thành công";
                $exists = false;
                foreach ($data_statistical as $value) {
                    if (strtotime($currentDateTime) == strtotime($value['date_created'])) {
                        $exists = true;
                        break;
                    }
                }
                if ($exists) {
                    // Dữ liệu thống kê đã tồn tại cho ngày hiện tại.
                    // Thực hiện các bước cập nhật dữ liệu thống kê.
                    $list_one_data_statistical = Load_One_Data_Statistical($currentDateTime);
                    $revenue = $list_one_data_statistical['revenue'];
                    $total = $total_all + $revenue;
                    Update_Data_Statiscal($currentDateTime, $total);
                } else {
                    // Dữ liệu thống kê chưa tồn tại cho ngày hiện tại.
                    // Thực hiện các bước thêm mới dữ liệu thống kê.
                    Add_Data_Statiscal($currentDateTime, $total_all);
                }
                Add_Data_Bill($id_user, $total_name_products, $name_receiver, $address_receiver, $phone_receiver, $method, $total_all, $email, $sub_total);

            }
            $message = "Đặt hàng thành công";
            $list_one_data_statistical = Load_One_Data_Statistical($currentDateTime);
            // foreach($list_one_data_statistical as $value){}
            $list_data_bill = Load_All_Data_Bill($id_user);
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            Delete_shopping_Cart($id_user);
            include "../View/Admin/sweetalert.php";
            include "../View/invoice.php";
            break;
        
        // hiện ra hóa đơn và lịch sử  hóa đơn
        case "invoice":
            $list_data_shopping_cart = Load_All_Data_Shopping_Cart($id_user);
            $id_user = $_SESSION['user']['id_user'];
            $list_data_bill = Load_All_Data_Bill($id_user);
            if (!is_array($list_data_bill)) {
                $message = "Bạn chưa có đơn hàng nào !!!";
            } else {
                include "../View/invoice.php";
            }
            break;
        
        //đã nhận được hàng
        case "confirm-delivery":
            $id_bill = $_GET['id_invoice'];
            Update_State_Invoice($id_bill);
            $id_user = $_SESSION['user']['id_user'];
            $list_data_bill = Load_All_Data_Bill($id_user);
            $_SESSION['status'] = "Xác nhận thành công";
            include "../View/Admin/sweetalert.php";
            include "../View/invoice.php";
            break;

        default:
            include "../View/home.php";
            break;
    }
} else {
    unset($_SESSION['code']);
    include "../View/home.php";
}

include "../View/footer.php";
ob_end_flush();
/*ob_start(): Hàm này bắt đầu bộ đệm đầu ra (output buffering). Tất cả đầu ra từ mã nguồn PHP sau dòng này sẽ được giữ lại trong bộ đệm thay vì được gửi trực tiếp đến trình duyệt.

ob_end_flush(): Hàm này kết thúc và gửi đầu ra từ bộ đệm đến trình duyệt. Nó cũng có thể xóa bộ đệm nếu bạn không muốn giữ lại nó.

Trong trường hợp của bạn, ob_start() được sử dụng để bắt đầu output buffering trước khi thực hiện các thao tác khác trong case "log-out". Output buffering giúp kiểm soát đầu ra và giữ nó lại cho đến khi bạn quyết định gửi nó đến trình duyệt.

Sau khi bạn đã thực hiện các thao tác trong case "log-out", ob_end_flush() được gọi để kết thúc output buffering và gửi đầu ra đã được giữ lại đến trình duyệt. Cụ thể, sau khi ob_end_flush() được gọi, mọi đầu ra sau đó từ các hàm echo, print, hoặc bất kỳ hàm xuất nào khác sẽ được gửi đến trình duyệt.*/
?>

