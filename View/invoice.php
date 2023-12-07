<?php if(isset($message )){
  echo '<div class="card-header">
  <span class="float-right"> <strong> '.$message .'</strong></span>
</div>';
// var_dump($list_one_data_statistical);
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
</table> 
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
<td class="right"><?=currency_format($sub_total, 'VND')?></td>
</tr>
<td class="left">
 <strong>VẬN CHUYỂN</strong>
</td>
<td class="right">+<?=currency_format(10000, 'VND') ?></td>
</tr>
<tr>
<td class="left">
<strong>TỔNG</strong>
</td>
<td class="right">
<strong><?=currency_format($total_price, 'VND')?></strong>
</td>
</tr>
</tbody>
</table>
<form action="../../Dự_án_1/Controller/index-home.php?request=confirm-delivery&&id_invoice=<?=$id_bill?>" method="post">
  <?php
    if($state === 1){
      echo '<submit type="submit" id="myButton" class="unnormal"  disabled style="margin-right: 20px;cursor: not-allowed;">Đã nhận được hàng</button>';
    }else{
      echo '<button type="submit" id="myButton" class="normal" style="margin-right: 20px">Đã nhận được hàng</button>';
    }
   ?>
  
</form>



</div>

</div>

</div>
</div>

<?php endforeach; ?>


<!-- <script>
    function disableButton(status) {
        var button = document.getElementById("myButton");
        if (status === 1) {
            button.disabled = true; // Vô hiệu hóa nút
            button.style.opacity = 0.5; // Đặt mức độ đục màu
        }else{
          button.disabled = false; // Vô hiệu hóa nút
          button.style.opacity = 0; 
        }
    }
</script> -->
