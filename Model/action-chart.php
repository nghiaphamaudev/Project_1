<?php
    function Add_Data_Statiscal($date_created, $revenue){
        $sql = "INSERT INTO `statistical`(`date_created`, `revenue`) 
        VALUES ('$date_created','$revenue')";
        pdo_execute($sql);
    }
    function Update_Data_Statiscal($currentDateTime, $revenue){
        $sql = "UPDATE `statistical` SET `revenue`= '$revenue'
        WHERE `date_created` = '$currentDateTime'";
        pdo_query_one($sql);
    }

     function Load_All_Data_Statiscal(){
        $sql = "SELECT * FROM `statistical`";
        $data_statistical =  pdo_query($sql);
        return $data_statistical;
        }
    
     function Load_One_Data_Statistical($date){
            $sql = "SELECT  `revenue`
                FROM `statistical` WHERE `date_created` = '".$date."'";
            $list_one_data_statistical = pdo_query_one($sql);
            return $list_one_data_statistical;
    }
        










    function Display_Categories_Circle_Diagram(){
        $sql = "SELECT `categories` .*, COUNT(products.id_categories) AS 'number_cate' FROM `products` 
        INNER JOIN `categories` ON products.id_categories = categories.id_categories GROUP BY products.id_categories";
        $data_categories = pdo_query($sql);
        return $data_categories;
    }

    function Count_User(){
        $sql = "SELECT COUNT(`id_user`) AS `user_count` FROM `user`";
        $count_user = pdo_query($sql);
        $total_user;
        foreach($count_user as $value){
            $total_user = $value['user_count'];
        }
        return $total_user;
    }

    function Count_Products(){
        $sql = "SELECT COUNT(`id_products`) AS `products_count` FROM products";
        $count_products = pdo_query($sql);
        $total_products;
        foreach($count_products as $value){
            $total_products = $value['products_count'];
        }
        return $total_products;
    }

    function Count_Completed_Invoice(){
        $sql = "SELECT COUNT(`id_bill`) AS `bill_count` FROM bill WHERE `status` = 1 ";
        $count_bill = pdo_query($sql);
        $total_bill;
        foreach($count_bill as $value){
            $total_bill = $value['bill_count'];
        }
        return $total_bill;
    }

    function Count_New_User(){
        $sql = "SELECT COUNT(`id_user`) AS `user_count`
        FROM `user`
        WHERE `date_created` > '2023-11-01' ";
        $count_user = pdo_query($sql);
        $total_new_user;
        foreach($count_user as $value){
            $total_new_user = $value['user_count'];
        }
        return $total_new_user;
    }

    function Total_Revenue(){
        $sql = "SELECT `total_price` FROM `bill`";
        $total = pdo_query($sql);
        $total_revenue = 0;
        foreach($total as $value){
            $total_revenue += $value['total_price'];
        }

        return $total_revenue;
    }

    function Display_Diagram_Revenue_Days(){
        $sql = "SELECT  `date_created`, `revenue` FROM `statistical` ";
        $list_data_revenue_day = pdo_query($sql);
        return $list_data_revenue_day;
    }
    



?>