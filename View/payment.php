<div class="card" style="margin-top: 30px; margin-bottom: 20px">
<form action="../../Dự_án_1/Controller/index-home.php?request=confirm-payment" method="post">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Đơn Hàng Của Bạn</b></h4></div>
                        </div>
                    </div>  
                    <div class="row  border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><h6><b>Ảnh</b></h6></div>
                            <div class="col">
                                <div class="row "><h6><b>Tên Sản Phẩm</b></h6></div>
                            </div>
                            <div class="col">
                               <h6><b>Số Lượng</b></h6>
                            </div>
 
                            <div class="col"><h6><b>Tạm Tính</b></h6></div>
                           
                        </div>
                    </div> 
                     <!-- content shopping-cart -->
                     <?php foreach($list_data_shopping_cart as $value): ?>
                            <?php extract($value)?>
                    <div class="row border-top border-bottom">
                        <input type="hidden" name="id_shopping_cart" value="<?=$id_cart?>">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="../../Dự_án_1/View/images/<?=$images?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?=$name_products?></div>
                                <div class="row"><?=$name_topping?></div>
                            </div>
                            <div class="col">
                               <h6>X<?=$quantity?></h6>
                            </div>
                            <div class="col">$<?=$total?></div>
                           
                        </div>
                    </div>
                     <?php endforeach; ?>
                </div>
                
                 <!-- summary -->
                <div class="col-md-4 summary">
                    <div><h5><b>Thông Tin</b></h5></div>
                         <input type="hidden" name="total_name_products" value="<?php echo implode(', ', $total_name); ?>">
                         <input type="hidden" name="total_price" value="<?=$total_cost?>">
                        <p>Tên người nhận</p>
                        <input type="text" name="name_receiver" placeholder="Nhập tên người nhận" required>
                        <p>Số điện thoại</p>
                        <input type="text" name="phone_receiver" required placeholder=" Nhập số điện thoại người nhận">
                        <p>Email</p>
                        <input type="email" name="email_receiver" required placeholder=" Nhập email người nhận">
                        <p>Địa chỉ</p>
                        <input type="text" name ="address_receiver" required placeholder="Nhập địa chỉ">
                        <p>Phương thức thanh toán</p>
                        <select name="method" id="">
                            <option value="Tiền mặt" selected >Tiền mặt</option>
                            <option value="Quét QR">Quét QR</option>
                        </select>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">Tổng</div>
                        <div class="col text-right">$<?=$total_cost?></div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-lg btn-primary mt-2" href="../../Dự_án_1/Controller/index-home.php?request=payment" value="Xác nhận đặt hàng">
                    
                </div>
            </div>
        </div>
    </form>
