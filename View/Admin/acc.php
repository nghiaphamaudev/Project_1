<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class="container">
<div class="table-wrapper">
                <div class="table-title">
                <div class="row ">
                    <div class="col-sm-6">
                    <b style = "font-size:30px">QUẢN LÍ TÀI KHOẢN</b>
                    </div>
                </div>
                </div>
                <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>ID Tài Khoản</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Người Dùng</th>
                    <th>Quyền</th>
                    <th>Hành Động</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php foreach ($list_user as $value): extract($value)?>
                                <tr>
                                                    <td><?=$id_user?></td>
                                                    <td><?=$email?></td>
                                                    <td><?=$password?></td>
                                                    <td><?=$full_name?></td>
                                                    <td><?php 
                                                    if($role===0){
                                                        echo "Khách";
                                                    }else{
                                                        echo "Admin";
                                                    }
                                                    ?></td>
                                                    <td>
                                                        <a href="../../../Dự_án_1/Controller/index-admin.php?request=edit_acc&&id=<?=$id_user?>" class="edit" data-toggle="modal">
                                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                        </a>
                                                        
                                                        <a href="../../../Dự_án_1/Controller/index-admin.php?request=delete_acc&&id=<?=$id_user?>" onclick = "return confirm('Bạn có muốn xóa không?')" class="delete" data-toggle="modal">
                                                            <i class="material-icons"  data-toggle="tooltip" title="Delete">&#xE872;</i>
                                                        </a>
                                                    </td>
                                                </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
                <a href="../../../Dự_án_1/Controller/index-admin.php?request=create_acc" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm Tài Khoản Mới</span></a>
                    

            </div>
            </div>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
