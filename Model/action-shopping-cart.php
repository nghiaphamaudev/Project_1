<?php

    function Add_Product_Shopping_Cart($id_products, $quantity, $id_user, $total, $name_products, $price_product, $name_topping, $images){
        $sql = "INSERT INTO `shopping_cart`( `id_products`, `quantity`, `id_user`, `total`, `name_products`, `price_products`,`name_topping`,`images`) VALUES ('$id_products','$quantity','$id_user','$total', '$name_products', '$price_product', '$name_topping', '$images')";
        pdo_execute($sql);
    }

    function Load_All_Data_Shopping_Cart($id_user){
        $sql = "SELECT * FROM `shopping_cart` WHERE `id_user`=".$id_user;
        $list_data_shopping_cart = pdo_query($sql);
        return $list_data_shopping_cart;
    }

    function Total_Cost($totals){
        $total_cost = 0;
        foreach($totals as $value){
            $total_cost += $value;
        }
        return $total_cost;
    }

    function Cancel_Shopping_Cart($id_cart){
        $sql = "DELETE FROM `shopping_cart` WHERE `id_cart`=".$id_cart;
        pdo_query($sql);
    }

    function Update_Shopping_Cart($id_product, $quantity_new, $total,$name_topping){
        $sql = "UPDATE `shopping_cart` SET `quantity`= '$quantity_new', `total`='$total', `name_topping` = '$name_topping' WHERE `id_products` =".$id_product;
        pdo_query($sql);
    }

    function Load_Quantity_In_Shopping_Cart($id_product){
        $sql = "SELECT `quantity` FROM `shopping_cart` WHERE `id_products`=".$id_product;
        $quantity_product = pdo_query_one($sql);
        return $quantity_product;
    }

    function Add_Data_Bill($id_user, $total_name_products, $name_receiver, $address_receiver, $phone_receiver, $method, $total_price,$email){
        $sql = "INSERT INTO `bill`( `id_user`, `total_name_product`, `name_receiver`, `address_delivery`, `phone_numnber`, `method`, `total_price`, `email`) VALUES 
        ('$id_user', '$total_name_products', '$name_receiver', '$address_receiver', '$phone_receiver', '$method', '$total_price', '$email')";
        pdo_execute($sql);
    }
    function Load_All_Data_Bill($id_user){
        $sql = "SELECT * FROM `bill` WHERE `id_user` = ".$id_user;
        $list_data_bill = pdo_query($sql);
        return $list_data_bill;
    }

?>