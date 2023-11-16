<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class="container">
<div class="table-wrapper">
                <div class="table-title">
                <div class="row ">
                    <div class="col-sm-6">
                    <b style = "font-size:30px">QUẢN LÍ DANH MỤC</b>
                    </div>
                </div>
                </div>
                <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>ID Danh Mục</th>
                    <th>Tên Danh Mục</th>
                    <th>Ngày Tạo</th>
                    <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_categories as $value): extract($value) ?>
                                <tr>
                                                    <td><?=$id_categories?></td>
                                                    <td><?=$name_categories?></td>
                                                    <td><?=$date_created?></td>
                                                    <td>
                                                        <a href="../../../Dự_án_1/Controller/index-admin.php?request=edit&&id=<?=$id_categories?>" class="edit" data-toggle="modal">
                                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                        </a>
                                                        
                                                        <a href="../../../Dự_án_1/Controller/index-admin.php?request=delete&&id=<?=$id_categories?>" onclick = "return confirm('Bạn có muốn xóa không?')" class="delete" data-toggle="modal">
                                                            <i class="material-icons"  data-toggle="tooltip" title="Delete">&#xE872;</i>
                                                        </a>
                                                    </td>
                                                </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
                <a href="../../../Dự_án_1/Controller/index-admin.php?request=create" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm Danh Mục Mới</span></a>
                    

            </div>
            </div>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
