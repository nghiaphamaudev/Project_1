
<?php
session_start();
include_once "../Model/pdo.php";
include_once "../Model/action-categories.php";
include_once "../Model/action-product.php";
include_once "../Model/action-account.php";
include_once "../Model/action-shopping-cart.php";
include_once "../Model/action-order.php";
include_once "../Model/action-confirm.php";
include_once "../View/Admin/sidebar.php";
include_once "../Model/action-chart.php";
include_once "../Model/action-reviews.php";

if(isset($_GET['request']) && $_GET['request']){
        switch($_GET['request']){
            
            //trở về trang home
            case "home": 
                include "./index-home.php";
                break;
            // thông tin bình luận
            case "reviews":
                $list_reviews = Load_All_Data_Reviews();
                include "../View/Admin/reviews.php";
                break;
            //xóa bình luận
            case "delete_reviews":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    Delete_Data_Reviews($id);
                    $_SESSION['status'] = "Xóa thành công";
                    // $_SESSION['status_code'] = "success";
                }
                $list_reviews = Load_All_Data_Reviews();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/reviews.php";
                break;   
            
                //đén trang quản lí acc
            case "acc":
                $list_user = Load_All_Data_Acc();
                include "../View/Admin/acc.php";
                break;
                
                //xoác acc
            case "delete_acc":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    Delete_Data_Acc($id);
                    $_SESSION['status'] = "Xóa thành công";
                    // $_SESSION['status_code'] = "success";
                }
                $list_user = Load_All_Data_Acc();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/acc.php";
                break;   
            
                //chỉnh sửa thông tin acc
            case "edit_acc":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    $list_one_acc = Load_One_Data_Acc($id);
                }
                $list_user = Load_All_Data_Acc();
                include "../View/Admin/update-acc.php";
                break;
            
                //cập nhật thông tin người dùng
            case "update_acc":
                if(isset($_POST['submit']) && $_POST['submit']) {
                    $id = $_POST['id_user'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $full_name = $_POST['full_name'];
                    $role = $_POST['role'];
                    
                    Update_Data_Acc($id, $email,$password,$full_name, $role);
                    $_SESSION['status'] = "Cập nhật thành công";
                    // $_SESSION['status_code'] = "success";
             
                }
                
                $list_user = Load_All_Data_Acc();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/add-acc.php";
                break;
            
                //tạo acc mới trong admin
            case "create_acc":
                if(isset($_POST['submit']) && $_POST['submit']){
                    $email = $_POST['email'];
                    $password = $_POST['pass'];
                    $full_name = $_POST['full_name'];
                    $role = $_POST['role'];
                    Add_Data_Acc($email,$password,$full_name,$role);
                    $_SESSION['status'] = "Tạo thành công";  
                    $list_user = Load_All_Data_Acc();
                    include "../View/Admin/sweetalert.php";
                    include "../View/Admin/acc.php";      
                    break;    
                }
                $list_user = Load_All_Data_Acc();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/add-acc.php";
                break;
            
            //hiện danh mục tron admin
            case "categories":
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/categories.php";
                break;
            
                //xóa danh mục trong amdin
            case "delete":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    Delete_Data_Categories($id);
                    $_SESSION['status'] = "Xóa thành công";
                    // $_SESSION['status_code'] = "success";
                }
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/categories.php";
                break;
            
            //tạo danh mục
            case "create":
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name_category = $_POST['name_category'];
                    Add_Data_Categories($name_category);
                    $_SESSION['status'] = "Thêm thành công";
                }
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/add-categories.php";
                break;
            
                //cập nhật danh mục
            case "edit":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    $list_one_category = Load_One_Data_Categories($id);
                }
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/update-categories.php";
                break;
            //cấp nhật
            case "update":
                if(isset($_POST['submit']) && $_POST['submit']) {
                    $id = $_POST['id_category'];
                    $name_categories = $_POST['name_category'];
                    Update_Data_Categories($id, $name_categories);
                    $_SESSION['status'] = "Cập nhật thành công";
                    // $_SESSION['status_code'] = "success";
                }
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/categories.php";
                break;

            //load thông tin sản phẩm
            case "product":
                $list_products = Load_All_Data_Products();
                include "../View/Admin/products.php";
                break;
            //xóa sản phẩm
            case "delete-product":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    Delete_Data_Products($id);
                    $_SESSION['status'] = "Xóa thành công";
                    // $_SESSION['status_code'] = "success";
                }
                $list_products = Load_All_Data_Products();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/products.php";
                break;
            
            //tạo sản phẩm
            case "create-product":
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name_products = $_POST['name_product'];
                    $file_name = $_FILES['images']['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $id_categories = $_POST['id_categories'];
                    $_SESSION['status'] = "Thêm thành công";
                    Upload_Images($file_name);
                    Add_Data_Products($id_categories,$name_products,$file_name, $price, $description);
                }
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/add-products.php";
                break;
            
            case "edit-product":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    $list_one_data_product = Load_One_Data_Products($id);
                }
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/update-products.php";
                break;

            case "update-product":
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name_products = $_POST['name_product'];
                    $file_name = $_FILES['images']['name'];
                    $price = $_POST['price'];
                    $id_categories = $_POST['id_categories'];
                    $description =$_POST['description'];
                    $id = $_POST['id_product'];
                    $_SESSION['status'] = "Cập nhật thành công";
                    Upload_Images($file_name);
                    Update_Data_Products($id_categories,$name_products,$file_name,$price,$id,$description);
                }
                $list_products = Load_All_Data_Products();
                include "../View/Admin/sweetalert.php";
                include "../View/Admin/products.php";
                break;
            //thông tin về các lựa chọn đi kèm
            case "topping":
                $list_topping = Load_All_Data_Topping();
                include "../View/Admin/topping.php";
                break;

            case "edit-topping":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    $list_one_data_topping = Load_One_Data_Topping($id);
                }

                include "../View/Admin/update-topping.php";
                break;

            case "update-topping":
                if(isset($_POST['submit']) && $_POST['submit']) {
                    $id = $_POST['id_topping'];
                    $name_topping = $_POST['name_topping'];
                    $price_topping =$_POST['price_topping'];
                    Update_Data_Topping($id, $name_topping,$price_topping);
                    $_SESSION['status'] = "Cập nhật thành công";
                    // $_SESSION['status_code'] = "success";
                }
                include "../View/Admin/sweetalert.php";
                $list_topping = Load_All_Data_Topping();
                include "../View/Admin/topping.php";
                break;

            case "create-topping":
                    if(isset($_POST['submit']) && $_POST['submit']){
                        $name_topping = $_POST['name_topping'];
                        $price_topping =$_POST['price_topping'];
                        Add_Data_Topping($name_topping,$price_topping);
                        $_SESSION['status'] = "Thêm thành công";
                    }
                    $list_topping = Load_All_Data_Topping();
                    include "../View/Admin/sweetalert.php";
                    include "../View/Admin/add-topping.php";
                    break;

            case "delete-topping":
                    if(isset($_GET['id']) && $_GET['id']){
                            $id = $_GET['id'];
                            Delete_Data_Topping($id);
                            $_SESSION['status'] = "Xóa thành công";
                            // $_SESSION['status_code'] = "success";
                    }
                        $list_topping = Load_All_Data_Topping();
                        include "../View/Admin/sweetalert.php";
                        include "../View/Admin/topping.php";
                        break;
            
            // thông kê
            case "statistic":
                $list_categories = Display_Categories_Circle_Diagram();
                $total_user = Count_User();
                $total_products = Count_Products();
                $total_bill = Count_Completed_Invoice();
                $total_new_user = Count_New_User();
                $total_revenue = Total_Revenue();
                $list_data_revenue_day = Display_Diagram_Revenue_Days();
                $list_data_revenue_weeks = Display_Diagram_Revenue_Weeks();
                $list_data_revenue_months = Display_Diagram_Revenue_Months();
                $list_data_top_user= Display_Diagram_Top_User();
                $list_days_in_day_diagram = [];
                $list_value_in_day_diagram = [];
                $list_name_categories = [];
                $list_count_categories = [];
                $list_weeks_in_weeks_diagram = [];
                $list_value_in_weeks_diagram = [];
                $list_months_in_months_diagram = [];
                $list_value_in_months_diagram = [];


                foreach($list_categories as $value){
                    $list_name_categories[] = $value['name_categories'];
                    $list_count_categories[] = $value['number_cate'];
                }

                foreach($list_data_revenue_day as $value){
                    $list_days_in_day_diagram[] = $value['date_created'];
                    $list_value_in_day_diagram[] = $value['revenue'];
                }

                foreach($list_data_revenue_weeks as $value){
                    $list_weeks_in_weeks_diagram[]= $value['week_label'];
                    $list_value_in_weeks_diagram[]= $value['weekly_revenue'];
                }

                foreach($list_data_revenue_months as $value){
                    $list_months_in_months_diagram[]= $value['month_label'];
                    $list_value_in_months_diagram[]= $value['monthly_revenue'];
                }

                include "../View/Admin/chart.php";
                break;
            
            //quản lí đơn hàng
            case "order":
                 $list_bill = Load_All_Data_order();
                 include "../View/Admin/order.php";
                 break; 
            //sửa trạng thái đơn hàng : đã xác nhận  / Chưa xác nhận
            case "edit_order": 
                         if(isset($_POST['submit']) && $_POST['submit']){
                            $id_status= $_POST['id_status'];
                        if(isset($_GET['id']) && $_GET['id']){
                            $id = $_GET['id'];
                     
                            Update_Data_Order($id,$id_status);
                            $_SESSION['status'] = "Cập nhật thành công";
                            // $_SESSION['status_code'] = "success";
                        }}
                        include "../View/Admin/sweetalert.php";
                        $list_bill = Load_All_Data_order();
                        include "../View/Admin/order.php";
                        break;
            // đơn hàng đã đc xác nhận
            case "confirm":
                            $list_bill = Load_All_Data_confirm();
                            include "../View/Admin/confirm.php";
                            break;
            // đã nhận đc hàng ('KHách hàng) 
            case "edit_confirm": 
                if(isset($_POST['submit']) && $_POST['submit']){
                    $id_state= $_POST['id_state'];
                    if(isset($_GET['id']) && $_GET['id']){
                        $id = $_GET['id'];
                        Update_Data_confirm($id,$id_state);
                        $_SESSION['state'] = "Cập nhật thành công";
                    }
                }
                $list_bill = Load_All_Data_confirm();
                include "../View/Admin/confirm.php";
                break;          
        }
}else{
    // $list_data = Load_all();
    include "../View/Admin/dashboard.php";
}

?>