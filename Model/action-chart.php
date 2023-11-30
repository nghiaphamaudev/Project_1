<?php
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

    function Revenue_Month(){
        // Ngày bắt đầu và kết thúc từ người dùng
            $startDate = '2023-11-28';
            $endDate = '2023-11-29';

            // Câu truy vấn để lấy tổng doanh thu từng ngày trong khoảng thời gian
            $sql = "SELECT DATE(`date_created`) AS `ngay`,
                        SUM(`total_price`) AS `tong_doanh_thu`
                    FROM `bill`
                    WHERE `date_created` BETWEEN :start_date AND :end_date
                    GROUP BY `ngay`
                    ORDER BY `ngay`";

            // Sử dụng PDO để thực hiện truy vấn
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':start_date', $startDate);
            $stmt->bindParam(':end_date', $endDate);
            $stmt->execute();

            // Lấy kết quả
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Lưu kết quả vào bảng lưu trữ tổng doanh thu hàng ngày
            foreach ($results as $result) {
                $dailyRevenue = $result['tong_doanh_thu'];
                $dailyDate = $result['ngay'];

                // Thực hiện truy vấn để lưu trữ vào bảng riêng
                $insertSql = "INSERT INTO `tong_doanh_thu_ngay` (`ngay`, `doanh_thu`)
                            VALUES (:ngay, :doanh_thu)";
                $insertStmt = $pdo->prepare($insertSql);
                $insertStmt->bindParam(':ngay', $dailyDate);
                $insertStmt->bindParam(':doanh_thu', $dailyRevenue);
                $insertStmt->execute();
}

}
    



?>