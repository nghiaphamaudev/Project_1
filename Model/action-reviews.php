<?php 
    function loadall_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function Insert_Reviews($id_products,$user, $comment, $rating){
        
        $sql = "
        INSERT INTO reviews (id_products,id_user, comment, rating) VALUES ($id_products,$user, '$comment', $rating)
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }

?>