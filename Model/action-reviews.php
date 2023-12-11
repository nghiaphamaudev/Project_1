<?php 
    function Insert_Reviews($id_products,$user, $comment, $rating){
        
        $sql = "
        INSERT INTO reviews (id_products,id_user, comment, rating) VALUES ($id_products,$user, '$comment', $rating)
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }
    function Load_All_Data_Reviews(){
        $sql = "SELECT reviews.id_review,products.name_products, user.full_name ,reviews.comment, reviews.rating , reviews.Created_at FROM `reviews` LEFT JOIN user ON reviews.id_user = user.id_user LEFT JOIN products ON reviews.id_products = products.id_products ";
        $list_comment = pdo_query($sql);
        return $list_comment;
    }
    function Load_All_Data_Reviews_User($id=0){
      $sql = "SELECT reviews.id_review,reviews.id_user,products.name_products, user.full_name ,reviews.comment, reviews.rating , reviews.Created_at FROM `reviews` LEFT JOIN user ON reviews.id_user = user.id_user LEFT JOIN products ON reviews.id_products = products.id_products WHERE reviews.id_products = $id";
      $list_comment = pdo_query($sql);
      return $list_comment;
  }
    function Delete_Data_Reviews($id){
        $sql = "DELETE FROM `reviews` WHERE id_review =".$id;
        pdo_query($sql);
      }
      function Load_One_Data_Reviews($id){  
        $sql = "SELECT p.id_products, p.name_products, AVG(c.rating) AS avg_rating, COUNT(c.id_review) AS total_comments FROM products p LEFT JOIN reviews c ON p.id_products = c.id_products WHERE p.id_products=$id;";
        $list_comment = pdo_query_one($sql);
        return $list_comment;
      }

?>