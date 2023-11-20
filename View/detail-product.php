
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"><div class="pd-wrap">
		<div class="container">
            <?php  foreach($list_one_data_product as $value): ?>
                <?php extract($value); ?>
	        <div class="heading-section">
	            <h2>Chi tiết sản phẩm</h2>
	        </div>
	        <div class="row">
	        	<div class="col-md-6 ">
						<div class="item ">
						  	<img src="../../Dự_án_1/View/images/<?=$images?>" />
						</div>
	        	</div>
	        	<div class="col-md-6">
	        		<div class="product-dtl">
        				<div class="product-info">
                            <?php// name product ?>
		        			<div class="product-name"><?=$name_products?></div>
		        			<div class="reviews-counter">
								<div class="rate">
								    <input type="radio" id="star5" name="rate" value="5" checked />
								    <label for="star5" title="text">5 stars</label>
								    <input type="radio" id="star4" name="rate" value="4" checked />
								    <label for="star4" title="text">4 stars</label>
								    <input type="radio" id="star3" name="rate" value="3" checked />
								    <label for="star3" title="text">3 stars</label>
								    <input type="radio" id="star2" name="rate" value="2" />
								    <label for="star2" title="text">2 stars</label>
								    <input type="radio" id="star1" name="rate" value="1" />
								    <label for="star1" title="text">1 star</label>
								  </div>
								<span>3 Reviews</span>
							</div>
		        			<div class="product-price-discount"><span>$<?=$original_price?>.00</span><span class="line-through">$30.00</span></div>
		        		</div>
	        			<p><?=$description?></p>
	        			<div class="row">
	        				<div class="col-md-6">
	        					<label for="size"><b>Kích Cỡ</b></label>
								<select id="size" name="size" class="form-control">
									<option value="1">S</option>
									<option value="">M</option>
									<option value="">L</option>
									<option value="">XL</option>
								</select>
	        				</div>
	        				<div class="col-md-6">
	        					<label for="color"><b>Thêm</b></label>
								<select id="color" name="name_topping" class="form-control">
									<?php foreach ($list_topping  as $value ) {
										extract($value);
										echo '<option value="'.$id_topping.'">'.$name_topping.'</option>';
									}
									 ?>
								</select>
	        				</div>
	        			</div>
						<!-- <div class="product-price-discount"><span style="font: size 10px;">Vận Chuyển</span><span class="line-through">$30.00</span></div> -->
						<div class="product-count">
						    <label for="size">Vận Chuyển</label>
						</div>
	        			<div class="product-count">	
	        				<label for="size">Quantity</label>
	        				<form action="#" class="display-flex">
							    <div class="qtyminus">-</div>
							    <input type="text" name="quantity" value="1" class="qty">
							    <div class="qtyplus">+</div>
							</form>
							<a href="#" class="round-black-btn">Thêm vào giỏ hàng</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	        <div class="product-info-tabs">
		        <ul class="nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Mô Tả</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Đánh Giá (0)</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
					  Đôi Nét Về Món Pizza Trong Văn Hoá Ẩm Thực Của Mỹ
					  Chuyên mục hôm nay, Pizza Express xin được gửi đến các bạn đôi điều về món Pizza trong ẩm thực của nước Mỹ. 
						Hãy cùng theo dõi bài viết để hiểu hơn về ẩm thực nước bạn nhé:
						Để được miễn phí giao hàng, gọi ngay Pizza Express tại đây
						Ẩm Thực Nước Mỹ. Đôi Nét Về Món Pizza Trong Văn Hoá Ẩm Thực Của Mỹ
					  Chuyên mục hôm nay, Pizza Express xin được gửi đến các bạn đôi điều về món Pizza trong ẩm thực của nước Mỹ. 
						Hãy cùng theo dõi bài viết để hiểu hơn về ẩm thực nước bạn nhé:
						Để được miễn phí giao hàng, gọi ngay Pizza Express tại đây
						Ẩm Thực Nước Mỹ
				  	<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
				  		<div class="review-heading">REVIEWS</div>
				  		<p class="mb-20">Không có đánh giá nào gần đây.</p>
				  		<form class="review-form">
		        			<div class="form-group">
			        			<label>Bình Chọn</label>
			        			<div class="reviews-counter">
									<div class="rate">
									    <input type="radio" id="star5" name="rate" value="5" />
									    <label for="star5" title="text">5 stars</label>
									    <input type="radio" id="star4" name="rate" value="4" />
									    <label for="star4" title="text">4 stars</label>
									    <input type="radio" id="star3" name="rate" value="3" />
									    <label for="star3" title="text">3 stars</label>
									    <input type="radio" id="star2" name="rate" value="2" />
									    <label for="star2" title="text">2 stars</label>
									    <input type="radio" id="star1" name="rate" value="1" />
									    <label for="star1" title="text">1 star</label>
									</div>
								</div>
							</div>
		        			<div class="form-group">
			        			<label>Bình Luận</label>
			        			<textarea class="form-control" rows="10"></textarea>
			        		</div>
			        		<div class="row">
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Tên*">
					        		</div>
					        	</div>
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="" class="form-control" placeholder="Email*">
					        		</div>
					        	</div>
					        </div>
					        <button class="round-black-btn">Đánh Giá</button>
			        	</form>
				  	</div>
				</div>
			</div>

		</div>
        <?php endforeach;?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>