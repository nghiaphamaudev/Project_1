

<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
                <form data-toggle="validator" role="form" method="post" style="padding:20px 80px 0px 80px;">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputName"  required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Mật Khẩu</label>
                        <input type="text" name="pass" class="form-control" id="inputName"  required>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tên</label>
                        <input type="text" name="full_name" class="form-control" id="inputName"  required>
                    </div>     
                    <div class="form-group"> 
                         <label for="inputName" class="control-label">Quyền</label>
                        <select class="form-select" name="role" aria-label="Default select example">
                                     <option value="0">Khách</option>
                                     <option value="1">Admin</option>          
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Thêm Tài Khoản" class="btn btn-primary">
                    </div>
                    </form>
        </div>
    </div>
   
    
    
</div>