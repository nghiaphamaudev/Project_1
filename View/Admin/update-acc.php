<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
        <form action="../../../Dự_án_1/Controller/index-admin.php?request=update_acc" data-toggle="validator" role="form" method="post" style="padding:20px 80px 0px 80px;">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tài Khoản</label>
                        <?php 
                                if(is_array($list_one_acc)){
                                    extract($list_one_acc);
                                } 
                        ?>
                         <input type="hidden" value="<?=$id_user?>" name="id_user" >
                        <input type="text" name="email" class="form-control" value="<?=$email?>" id="inputName" required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Mật Khẩu</label>
                        <input type="text" name="password" class="form-control" value="<?=$password?>"  id="inputName"  required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tên</label>
                        <input type="text" name="full_name" class="form-control" value="<?=$full_name?>"  id="inputName"  required>
                    </div>  
                    <label for="inputName" class="control-label">Quyền truy cập </label> <br>
                    <select name="role" class="form-select" aria-label="Default select example">
                        
                        <option <?php if($role === 0){echo "selected";}else{}?> value="0">Khách</option>
                        <option <?php if($role === 1){echo "selected";}else{} ?> value="1">Admin</option>
                        
</select>
                    <div class="form-group">
                       <input type="submit" style="margin-top:20px" name="submit" value="Cập nhật Tài Khoản" class="btn btn-primary">
                    </div>
                    </form>
        </div>
    </div>
    <script src="../js/alert.js"></script>
</div>