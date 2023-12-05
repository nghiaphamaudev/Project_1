<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
        <form action="../../../Dự_án_1/Controller/index-admin.php?request=update-topping" data-toggle="validator" role="form" method="post" style="padding:20px 80px 0px 80px;">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tên Topping</label>
                        <?php 
                                if(is_array($list_one_data_topping)){
                                    extract($list_one_data_topping);
                                }
                        ?>
                         <input type="hidden" value="<?=$id_topping?>" name="id_topping" >
                        <input type="text" name="name_topping" class="form-control" value="<?=$name_topping?>" id="inputName" required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Giá</label>
                        <input type="number" name="price_topping" value="<?=$price_topping?>" class="form-control" id="inputName"  required>
                    </div>
                    <div class="form-group">
                       <input type="submit" name="submit" value="Cập nhật Topping" class="btn btn-primary">
                    </div>
                    </form>
        </div>
    </div>
    <script src="../js/alert.js"></script>
</div>