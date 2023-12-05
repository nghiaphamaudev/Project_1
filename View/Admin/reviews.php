<div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class="container">
<div class="table-wrapper">
                <div class="table-title">
                <div class="row ">
                    <div class="col-sm-6">
                    <b style = "font-size:30px">QUẢN LÍ BÌNH LUẬN</b>
                    </div>
                </div>
                </div>
                <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>ID Bình Luận</th>
                    <th>Sản Phẩm</th>
                    <th>Người Dùng</th>
                    <th>Bình Luận</th>
                    <th>Đánh Giá</th>
                    <th>Ngày Bình Luận</th>
                    <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_reviews as $value): extract($value)?>
                                <tr>
                                                    <td><?=$id_review?></td>
                                                    <td><?=$name_products?></td>
                                                    <td><?=$full_name?></td>
                                                    <td><?=$comment?></td>
                                                    <td><?=$rating?> <span style="display: inline-block; width: 20px; height: 20px; background-color: #ffd700; clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
   "></span></td>
                                                    <td><?=$Created_at?></td>
                                                    <td>                                                                         
                                                        <a href="../../../Dự_án_1/Controller/index-admin.php?request=delete_reviews&&id=<?=$id_review?>" onclick = "return confirm('Bạn có muốn xóa không?')" class="delete" data-toggle="modal">
                                                            <i class="material-icons"  data-toggle="tooltip" title="Delete">&#xE872;</i>
                                                        </a>
                                                    </td>
                                                </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
                   

            </div>
            </div>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
