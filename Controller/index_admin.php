<?php
session_start();
include "../Model/pdo.php";
include "../Model/action_categories.php";
include "../View/Admin/sidebar.php";

if(isset($_GET['request']) && $_GET['request']){
        switch($_GET['request']){

            case "home":
                include "./index_home.php";
                break;
            
            case "categories":
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/categories.php";
                break;
            
            case "delete":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    Delete_Data_Categories($id);
                    $_SESSION['status'] = "Delete successfully";
                    // $_SESSION['status_code'] = "success";
                }
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/categories.php";
                break;
            
            case "create":
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name_category = $_POST['name_category'];
                    Add_Data_Categories($name_category);
                    $_SESSION['status'] = "Add successfully";
                    // $_SESSION['status_code'] = "success";
                }
                include "../View/Admin/add_categories.php";
                break;
            
            case "edit":
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    $list_one_category = Load_One_Data_Categories($id);
                }
                include "../View/Admin/update_categories.php";
                break;
            
            case "update":
                if(isset($_POST['submit']) && $_POST['submit']) {
                    $id = $_POST['id_category'];
                    $name_categories = $_POST['name_category'];
                    Update_Data_Categories($id, $name_categories);
                    $_SESSION['status'] = "Update successfully";
                    // $_SESSION['status_code'] = "success";
                }
                $list_categories = Load_All_Data_Categories();
                include "../View/Admin/categories.php";
                break;
            }
}else{
    include "../View/Admin/dashboard.php";
}

?>