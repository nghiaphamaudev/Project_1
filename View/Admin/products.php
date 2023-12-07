<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class="container">
               <div class="table-wrapper">
                    <div class="table-title">
                            <div class="row ">
                                <div class="col-sm-6">
                                    <b style = "font-size:30px">QUẢN LÍ SẢN PHẨM</b>
                                </div>
                            </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Ảnh</th>
                                <th>Giá</th>
                                <th>Danh Mục</th>
                                <th>Ngày Tạo</th>
                                <th>Mô tả</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_products as $value): extract($value)  ?>
                            
                                        <tr>
                                                            <td><?=$id_products?></td>
                                                            <td><?=$name_products?></td>
                                                            <td><img src="../../../Dự_án_1/View/images/<?=$images?>" width="80px" alt=""></td>
                                                            <td><?php echo currency_format($original_price, 'VND'); ?></td>
                                                            <td><?=$name_categories?></td>
                                                            <td><?=$date_created?></td>
                                                            <td><?=$description?></td>
                                                            <td>
                                                                <a href="../../../Dự_án_1/Controller/index-admin.php?request=edit-product&&id=<?=$id_products?>" class="edit" data-toggle="modal">
                                                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                                </a>
                                                                
                                                                <a href="../../../Dự_án_1/Controller/index-admin.php?request=delete-product&&id=<?=$id_products?>" onclick = "return confirm('Bạn có muốn xóa không?')" class="delete" data-toggle="modal">
                                                                    <i class="material-icons"  data-toggle="tooltip" title="Delete">&#xE872;</i>
                                                                </a>
                                                            </td>
                                                        </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <a href="../../../Dự_án_1/Controller/index-admin.php?request=create-product" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm Sản Phẩm</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>