<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Đăng Nhập</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form method="post" action ="../../Dự_án_1/Controller/index-home.php?request=login-user">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<label for="exampleInputEmail1">Email </label>
					<input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Mật Khẩu</label>
					<input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1" required>
					<!-- <br> -->
					<a href="#" style="float:right;font-size:12px;">Quên mật khẩu?</a>
					<br>
				</div>
				<?php
			   if (isset($_GET['check_err_login'])) {
				
				$check_err_login = $_GET['check_err_login'];
				echo "$check_err_login";
			
			} 
				?>
				
				<input type="submit" name="submit" value="Đăng Nhập" class="btn btn-primary btn-block">
				
				<div class="sign-up">
					Bạn chưa có tài khoản? <a href="../../Dự_án_1/Controller/index-home.php?request=create-user"><b>Tạo tài khoản</b></a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<?php if(isset($inform))
	echo $inform;
?>
