<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
                <?php 
                       foreach ($list_one_data_product as $value) {
                        $id = $value['id_categories'];
                       }
                
                ?>
                <form data-toggle="validator" action="../../../Dự_án_1/Controller/index-admin.php?request=update-product"  enctype="multipart/form-data" role="form" method="post" style="padding:20px 80px 0px 80px;">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tên Sản Phẩm</label>
                        <input type="hidden" name="id_product" value="<?=$value['id_products']?>">
                        <input type="text" name="name_product" value="<?=$value['name_products']?>" class="form-control" id="inputName"  required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Ảnh</label>
                        <input type="file" name="images" class="form-control" id="inputName" >
                        <img src="../../../Dự_án_1/View/images/<?=$value['images']?>" width="12%" alt="">
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Giá</label>
                        <input type="number" name="price" value="<?=$value['original_price']?>" class="form-control" id="inputName"  required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Mô Tả</label>
                        <input type="text" name="description" value="<?=$value['description']?>" class="form-control" id="inputName"  required>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="control-label">Danh mục</label><br>
                        <select class="form-select" name="id_categories" aria-label="Default select example">
                            <?php
                                foreach ($list_categories as $value) {
                                    extract($value);
                                    $selected = ($id_categories === $id) ? 'selected' : '';
                                    echo '<option value="'.$id_categories.'" '.$selected.' >'.$name_categories.'</option>';
                                }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Cập nhật sản phẩm" class="btn btn-primary">
                    </div>
                </form>
        </div>
    </div>
    <!-- <script src="../js/alert.js"></script>
   
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
    ?> -->
    
</div>