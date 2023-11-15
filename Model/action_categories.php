<?php
    function Load_All_Data_Categories(){
        $sql = "SELECT `id_categories`, `name_categories`, `date_created` FROM `categories`";
        $list_categories = pdo_query($sql);
        return $list_categories;
    }

    function Delete_Data_Categories($id){
        $sql = "DELETE FROM `categories` WHERE id_categories =".$id;
        pdo_query($sql);
    }

    function Add_Data_Categories($name_category){
        $sql = "INSERT INTO `categories`(`name_categories`) VALUES ('$name_category')";
        pdo_execute($sql);
    }
    
    function Load_One_Data_Categories($id){
        $sql = "SELECT `id_categories`, `name_categories` FROM `categories` WHERE `id_categories` = ".$id;
        $list_one_category = pdo_query_one($sql);
        return $list_one_category;
    }

    function Update_Data_Categories($id, $name_categories){
        $sql = "UPDATE `categories` SET `name_categories`= '$name_categories' WHERE `id_categories` = ".$id;
        pdo_query($sql);
    }
?>