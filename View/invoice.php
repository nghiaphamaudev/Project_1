<?php if(isset($message )){
  echo '<div class="card-header">
  <span class="float-right"> <strong> '.$message .'</strong></span>
</div>';
var_dump($list_one_data_statistical);
}
?>
<?php foreach ($list_data_bill as $value ): ?>
<?php extract($value);  ?>
  <div class="card" style="margin-top:40px; margin-bottom:40px;">
<div class="card-header">
  <br>

 <strong>Hóa Đơn: </strong>
<?=$date_created?> 
  <span class="float-right"> <strong>Trạng thái: <?php if($status === 0 ){
    echo "Chờ xác nhận";
  }else {
    echo "Đã xác nhận";
  } ?></strong></span>

</div>
<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3">Từ:</h6>
<div>
<strong>BTN FastFood</strong>
</div>
<div></div>
<div>Tòa nhà FPT Polytechnic, Nam Từ Liêm, Hà Nội</div>
<div>Email: btnfastfood@gmail.com</div>
<div>Phone: +48 444 666 3333</div>
</div>

<div class="col-sm-6">
<h6 class="mb-3">Đến:</h6>
<div>
<div><strong>Họ và Tên: </strong><?=$name_receiver?></div>
</div>
<div><strong>Địa chỉ: </strong><?=$address_delivery?></div>
<div><strong>Số điện thoại: </strong><?=$phone_numnber?></div>
<div><strong>Email: </strong><?=$email?></div>
</div>



</div>

<div class="table-responsive-sm">
<h5> <strong>Thông tin đơn đơn hàng</strong> </h5>
<span><?=$total_name_product?>
</span>
<h5> <strong>Phương thức thanh toán</strong> </h5>
<span>Tiền mặt</span>

<!-- <table class="table table-striped">
<thead>
<tr>
<th class="center">STT</th>
<th>Tên Sản Phẩm</th>
<th>Topping</th>

<th class="right">Unit Cost</th>
  <th class="center">Qty</th>
<th class="right">Total</th>
</tr>
</thead>
<tbody>
    <tr>
    <td class="center">1</td>
    <td class="left strong">Origin License</td>
    <td class="left">Extended License</td>
</tbody>
</table> -->
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto">
<table class="table table-clear">
<tbody>
<tr>
<td class="left">
 <strong>TẠM TÍNH</strong>
</td>
<td class="right">$<?=$sub_total?></td>
</tr>
<td class="left">
 <strong>VẬN CHUYỂN</strong>
</td>
<td class="right">+$10</td>
</tr>
<tr>
<td class="left">
<strong>TỔNG</strong>
</td>
<td class="right">
<strong>$<?=$total_price?></strong>
</td>
</tr>
</tbody>
</table>

</div>

</div>

</div>
</div>
<?php endforeach; ?>
