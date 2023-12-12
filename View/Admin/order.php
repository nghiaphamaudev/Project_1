<div class='dashboard-app'>
    <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
    <div class='dashboard-content'>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row ">
                        <div class="col-sm-6">
                            <b style="font-size:30px">QUẢN LÍ ĐƠN HÀNG</b>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID hóa đơn </th>
                            <th>Tài Khoản</th>
                            <th>Tổng sản phẩm </th>
                            <th>Tên người nhận</th>
                            <th>Địa chỉ người nhận </th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Phương thức
                            <th>
                            <th>Tổng tiền</th>
                            <th>Ngày tạo đơn </th>
                            <th>Hành động </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_bill as $value): extract($value)?>
                        <tr>
                            <td>
                                <?=$id_bill?>
                            </td>
                            <td>
                                <?=$id_user?>
                            </td>
                            <td>
                                <?=$total_name_product?>
                            </td>
                            <td>
                                <?=$name_receiver?>
                            </td>
                            <td>
                                <?=$address_delivery?>
                            </td>
                            <td>
                                <?=$phone_numnber?>
                            </td>
                            <td>
                                <?=$email?>
                            </td>
                            <td>
                                <?=$method?>
                            </td>
                            <td>
                            <?php echo currency_format($total_price, ' VND'); ?>
                            </td>
                            <td>
                                <?=$date_created?>
                            </td>

                           
                            <td> 
                                
                    <form data-toggle="validator" action="../../../Dự_án_1/Controller/index-admin.php?request=edit_order&&id=<?=$id_bill?>"  enctype="multipart/form-data" role="form" method="post" >
                    <div class="form-group"> 
                    <div class="form-group">
                        <select class="form-select" name="id_status" aria-label="Default select example">
                      
                            
                                     <option <?php if($status==0){ echo"selected";}?> value="0">Chờ xác nhận</option>
                                     <option <?php if($status==1){ echo"selected";}?> value="1">Đã xác nhận</option>
                            
                            
                        </select>
                    </div>
                            </td>
                            <td>
                            <div class="form-group">
                        <input type="submit" name="submit" value="Xác nhận" class="btn btn-primary">
                    </div>
                    </form>
                              
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


