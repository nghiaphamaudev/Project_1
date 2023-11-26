<?php
    // session_start();
    function Load_All_Data_Products(){
        $sql = "SELECT 
        products.id_products, 
        products.id_categories, 
        products.name_products,
        products.description, 
        products.images, 
        products.original_price, 
        products.date_created, 
        categories.name_categories 
    FROM 
        categories, products WHERE products.id_categories = categories.id_categories;
    ";
        $list_products = pdo_query($sql);
        return $list_products; 
    }   


    function Add_Data_Products($id_categories,$name_products,$images, $price){
        $sql = "INSERT INTO `products`(`id_categories`, `name_products`, `images`, `original_price`) VALUES ('$id_categories','$name_products','$images','$price')";
        pdo_execute($sql);
    }

    function Delete_Data_Products($id){
        $sql = "DELETE FROM `products` WHERE `id_products` =".$id;
        pdo_query($sql);
    }

    function Update_Data_Products($id_categories,$name_products,$images, $price, $id,$description){
        if($images != ""){
            $sql = "UPDATE `products` SET `id_categories`='$id_categories',`name_products`='$name_products',`images`='$images',`original_price`='$price', `description` = '$description' WHERE `id_products` = '$id' ";
        }else{
            $sql = "UPDATE `products` SET `id_categories`='$id_categories',`name_products`='$name_products',`original_price`='$price', `description` = '$description' WHERE `id_products` = '$id' ";
        }
        pdo_query($sql);
    }

    function Upload_Images($file_name){
        $target_dir = "../../Dự_án_1/View/images/";
        $target_file = $target_dir. basename($file_name);
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
   }

   function Load_One_Data_Products($id){
        $sql = "SELECT `id_products`, `description` ,`id_categories`, `name_products`, `images`, `original_price`, `date_created` FROM `products` WHERE `id_products`=".$id;
        $list_one_data_product = pdo_query($sql);
        return $list_one_data_product;
   }
    
   function Load_All_Data_Topping(){
    $sql = "SELECT * FROM `topping`";
    $list_topping = pdo_query($sql);
    return $list_topping;
  }

  function Load_One_Data_Topping($id){
    $sql = "SELECT `id_topping`, `name_topping` , `price_topping` FROM `topping` WHERE `id_topping` = ".$id;
    $list_one_data_topping = pdo_query_one($sql);
    return $list_one_data_topping;
  }
  
  function Update_Data_Topping($id, $name_topping, $price_topping){
    $sql = "UPDATE `topping` SET `name_topping`='$name_topping',`price_topping`='$price_topping' WHERE `id_topping` =".$id;
    pdo_query($sql);
  }

  function Add_Data_Topping($name_topping,$price_topping){
    $sql = "INSERT INTO `topping`( `name_topping`, `price_topping`) VALUES ('$name_topping','$price_topping')";
    pdo_execute($sql);
  }

    function Delete_Data_Topping($id){
        $sql = "DELETE FROM `topping` WHERE `id_topping` =".$id;
        pdo_query($sql);
    }

    function Load_Price_Topping($id_topping){
        $sql = "SELECT `price_topping`, `name_topping` FROM `topping` WHERE `id_topping` =".$id_topping;
        $price_topping = pdo_query_one($sql);
        return $price_topping;
    }

    

 

?>