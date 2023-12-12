<div class='dashboard-app'>
    <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
    <div class='dashboard-content'>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row ">
                        <div class="col-sm-6">
                            <b style="font-size:30px">Cập nhật đơn hàng</b>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID hóa đơn </th>
                            <th>Tổng sản phẩm </th>
                            <th>Tên người nhận</th>
                            <th>Địa chỉ người nhận </th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Phương thức
                            <th>Tổng tiền</th>
                            <th>Ngày tạo đơn </th>
                            <th>Trạng thái </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_bill as $value): extract($value)?>
                        <tr>
                            <td>
                                <?=$id_bill?>
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
                                <?php if($state==0){
                                                        echo "Chưa nhận được hàng";

                                                    }else{
                                                        echo" Đã nhận được hàng";
                                                    }
                                                    ?>
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


