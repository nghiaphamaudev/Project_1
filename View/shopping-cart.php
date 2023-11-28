<div class="container px-3 my-5 clearfix" >
    <!-- Shopping cart table -->
    <div class="card" style="margin-top: 20px">
        <div class="card-header">
            <h2 style="font-family:Arial">Đơn Hàng</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-3" style="min-width: 300px;">Tên Sản Phẩm &amp; Khác</th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Giá</th>
                    <th class="text-center py-3 px-4" style="width: 150px;">Số Lượng</th>
                    <th class="text-center py-3 px-4" style="width: 150px;">Tạm Tính</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 50px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
        
                <?php foreach($list_data_shopping_cart as $value): ?>
                  <?php extract($value); ?>
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="../../Dự_án_1/View/images/<?=$images?>" style="height: 100px" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark"><?=$name_products?></a>
                          <small>
                            <span class="text-muted">Topping: <?=$name_topping?></span>
                            <!-- <span class="text-muted">, </span> Vận chuyển: <?=$price_delivery?>$ -->
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-center font-weight-semibold align-middle p-4"><?=$price_products?>$</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="<?=$quantity?>"></td>
                    <td class="text-center font-weight-semibold align-middle p-4">$<?=$total?></td>
                    <td class="text-center align-middle px-0">
                      <a href="../../Dự_án_1/Controller/index-home.php?request=cancel-shopping-cart&&id_cart=<?=$id_cart?>" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">
                        <i class="fa-solid fa-rectangle-xmark" style="color: #ff3050; font-size:25px"></i>
                      </a>
                  </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                <form action="../../Dự_án_1/Controller/index-home.php?request=promotion" method="post">
                <label class="text-muted font-weight-normal">Nhập mã khuyến mãi</label>
                <input type="text" placeholder="<?php if(isset($message)){
                                                        echo $message;
                                                      }else {
                                                        echo "Nhập code khuyến mãi";
                                                      }
                ?>" name="code_promotion" class="form-control">
                <div class="float-left">
                  <input type="submit" name="submit_promotion" class="btn btn-lg btn-primary mt-2" href="../../Dự_án_1/Controller/index-home.php?request=promotion" value="Cập nhật">
                  </div>
                </form>
              </div>
              <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  <label class="text-muted font-weight-normal m-0">Giảm giá</label>
                  <div class="text-large"><strong>
                    <?php if(isset($price_promotion)){
                              echo $price_promotion.'%';
                          }else{
                            echo "0%";
                          }
                  ?>
                  </strong></div>
                </div>
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Tổng</label>
                  <div class="text-large"><strong>$<?=$total_cost?></strong></div>
                </div>
              </div>
            </div>
            
            <div class="display">
                  <div class="float-left">
                  <!-- <input type="submit" name="submit" class="btn btn-lg btn-primary mt-2" href="../../Dự_án_1/Controller/index-home.php?request=promotion" value="Cập nhật"> -->
                  </div>
                  <div class="float-right">
                  <a type="button" class="btn btn-lg btn-primary mt-2" href="../../Dự_án_1/Controller/index-home.php?request=menu">&#8592;Tiếp tục mua hàng</a>
                  <form action="../../Dự_án_1/Controller/index-home.php?request=payment" method="post">
                    <input type="hidden" name="sub_total" value="<?=$total_cost?>">
                    <input type="submit" value="Thanh toán" name="submit" class="btn btn-lg btn-primary mt-2" href="../../Dự_án_1/Controller/index-home.php?request=payment">
                  </form>
                  </div>
            </div>
           
        
          </div>
      </div>
  </div>