<!------ Include the above in your HEAD tag ---------->
<!-- ... (đoạn mã CSS trước) ... -->

<style>
    .rating-container {
        display: inline-block;
    }

    .star {
        font-size: 24px;
        cursor: pointer;
        color: #ccc;
        transition: color 0.3s ease-in-out;
    }

    .star:hover,
    .star.selected {
        color: #ffcc00;
    }
</style>

<!-- ... (đoạn mã CSS sau) ... -->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<div class="pd-wrap">
	<div class="container">
		<?php foreach ($list_one_data_product as $value): ?>
			<?php extract($value); ?>
			<div class="heading-section">
				<h2>Chi tiết sản phẩm</h2>
			</div>
			<div class="row">
				<div class="col-md-6 ">
					<div class="item ">
						<img src="../../Dự_án_1/View/images/<?= $images ?>" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="product-dtl">
						<div class="product-info">
							<?php // name product ?>
							<div class="product-name">
								<?= $name_products ?>
							</div>
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
							<div class="product-price-discount"><span>
									<?=currency_format($original_price, 'VND') ?>
								</span><span class="line-through"><?php echo currency_format(30000, 'VND'); ?></span></div>
						</div>
						<p>
							<?= $description ?>
						</p>
						<form action="../../Dự_án_1/Controller/index-home.php?request=select-option" method="post">
							<div class="row">
								<input type="hidden" name="id_product" value="<?= $id_products ?>">
								<input type="hidden" name="price_product" value="<?= $original_price ?>">
								<input type="hidden" name="name_product" value="<?= $name_products ?>">
								<input type="hidden" name="images" value="<?= $images ?>">


								<div class="col-md-6">
									<label for="color"><b>Thêm</b></label>
									<select id="color" name="id_topping" class="form-control">
										<?php foreach ($list_topping as $value) {
											extract($value);
											$selected = ($id_topping === 10) ? 'selected' : '';
											echo '<option value="' . $id_topping . '" ' . $selected . '>' . $name_topping . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<!-- <div class="product-price-discount"><span style="font: size 10px;">Vận Chuyển</span><span class="line-through">$30.00</span></div> -->
							<div class="product-count">
								<label for="size">Quantity</label>
								<div action="#" class="display-flex">
									<div class="qtyminus">-</div>
									<input type="number" name="quantity" value="1" class="qty">
									<div class="qtyplus">+</div>
								</div>
								<input type="submit" name="submit" class="round-black-btn" value="Thêm vào giỏ hàng">
								
							</div>
						</form>

					</div>
				</div>
			</div>
			<div class="product-info-tabs">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
							aria-controls="description" aria-selected="true">Mô Tả</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
							aria-controls="review" aria-selected="false">Đánh Giá (0)</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="description" role="tabpanel"
						aria-labelledby="description-tab">
						Đôi Nét Về Món Pizza Trong Văn Hoá Ẩm Thực Của Mỹ
						Chuyên mục hôm nay, Pizza Express xin được gửi đến các bạn đôi điều về món Pizza trong ẩm thực của
						nước Mỹ.
						Hãy cùng theo dõi bài viết để hiểu hơn về ẩm thực nước bạn nhé:
						Để được miễn phí giao hàng, gọi ngay Pizza Express tại đây
						Ẩm Thực Nước Mỹ. Đôi Nét Về Món Pizza Trong Văn Hoá Ẩm Thực Của Mỹ
						Chuyên mục hôm nay, Pizza Express xin được gửi đến các bạn đôi điều về món Pizza trong ẩm thực của
						nước Mỹ.
						Hãy cùng theo dõi bài viết để hiểu hơn về ẩm thực nước bạn nhé:
						Để được miễn phí giao hàng, gọi ngay Pizza Express tại đây
						Ẩm Thực Nước Mỹ
						<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
							<div class="review-heading">REVIEWS</div>
							<p class="mb-20">Không có đánh giá nào gần đây.</p>



							<form action="../Controller/index-home.php?request=detail&&id=<?= $id_products ?>" method="POST" class="review-form">
								<input hidden name="idproduct_rating" value="<?= $id_products ?>">
								<?php echo $id_products; ?>
								<div class="form-group">
									<label for="rating">Bình Chọn</label>
									<div class="reviews-counter">
										<div class="rating-container" id="ratingContainer">
											<span class="star" data-rating="1">&#9733;</span>
											<span class="star" data-rating="2">&#9733;</span>
											<span class="star" data-rating="3">&#9733;</span>
											<span class="star" data-rating="4">&#9733;</span>
											<span class="star" data-rating="5">&#9733;</span>
											<input type="hidden" name="rating" id="ratingInput" value="0">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Bình Luận</label>
									<textarea class="form-control" name="comment" rows="10"></textarea>
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
								<button type="submit" name="submit_comment">Đánh Giá</button>


							</form>
						</div>
					</div>
				</div>

			</div>
		<?php endforeach; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<script src="../View/js/detail-product.js"></script>

<!-- ... (đoạn mã JavaScript trước) ... -->

<script>
    // Đánh giá sao
    const ratingContainer = document.getElementById('ratingContainer');
    const ratingInput = document.getElementById('ratingInput');
    let currentRating = 0;

    const stars = ratingContainer.querySelectorAll('.star');
    stars.forEach((star) => {
        star.addEventListener('click', () => {
            const rating = parseInt(star.getAttribute('data-rating'));
            currentRating = rating;
            ratingInput.value = currentRating; // Cập nhật giá trị trong input hidden
            updateStars();
        });
    });

    function updateStars() {
        stars.forEach((star, index) => {
            if (index < currentRating) {
                star.classList.add('selected');
            } else {
                star.classList.remove('selected');
            }
        });
    }

    // ... (các hàm khác) ...
</script>

<!-- ... (đoạn mã JavaScript sau) ... -->
