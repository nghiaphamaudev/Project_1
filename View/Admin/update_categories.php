<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
        <form action="../../../Dự_án_1/Controller/index_admin.php?request=update" data-toggle="validator" role="form" method="post" style="padding:20px 80px 0px 80px;">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tên danh mục</label>
                        <?php 
                                if(is_array($list_one_category)){
                                    extract($list_one_category);
                                }
                        ?>
                        <input type="hidden" name="id_category" value ="<?=$id_categories?>">
                        <input type="text" name="name_category" class="form-control" value="<?=$name_categories?>" id="inputName" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Cập nhật danh mục" class="btn btn-primary">
                    </div>
                    </form>
        </div>
    </div>
    <script src="../js/alert.js"></script>
   
   <?php 
   if(isset($_SESSION['status']) && $_SESSION['status'] !=" "){
       ?>
           <script> 
           swal({
                   title: "Good job!",
                   text: "You clicked the button!",
                   icon: "success",
                   button: "Aww yiss!",
               });
           </script>
       <?php
       unset($_SESSION['status']);
   }
   ?>
</div>