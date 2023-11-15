<?php
    function Load_All_Data_Categories(){
        $sql = "SELECT `id_categories`, `name_categories`, `date_created` FROM `categories`";
        $list_categories = pdo_query($sql);
        return $list_categories;
    }
?>