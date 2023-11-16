<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
                <form data-toggle="validator" action="../../../Dự_án_1/Controller/index-admin.php?request=create-product"  enctype="multipart/form-data" role="form" method="post" style="padding:20px 80px 0px 80px;">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tên Sản Phẩm</label>
                        <input type="text" name="name_product" class="form-control" id="inputName"  required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Ảnh</label>
                        <input type="file" name="images" class="form-control" id="inputName" >
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Giá</label>
                        <input type="number" name="price" class="form-control" id="inputName"  required>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="control-label">Danh mục</label><br>
                        <select class="form-select" name="id_categories" aria-label="Default select example">
                            <option selected>Chọn danh mục</option>
                            <?php
                                foreach ($list_categories as $value) {
                                    extract($value);
                                    echo '<option value="'.$id_categories.'">'.$name_categories.'</option>';
                                }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Thêm sản phẩm" class="btn btn-primary">
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
                    title: "Hoàn thành!",
                    text: "You clicked the button!",
                    icon: "success",
                    button: "Aww yiss!",
                });
            </script>
        <?php
        unset($_SESSION['status']);
    }
    ?> -->
    
</div>