<div class="global-container">
	<?php if(isset($message)) echo $message; ?>
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Đăng Kí</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form method="post" action = "../../Dự_án_1/Controller/index-home.php?request=add-data-user">
				<!-- to error: add class "has-danger" -->
				<div class="form-group"> 
					<label for="exampleInputEmail1">Email </label>
					<input type="email" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Họ và Tên </label>
					<input type="text" class="form-control form-control-sm" name="fullName" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Mật Khẩu</label>
					<input type="password" class="form-control form-control-sm" name="password" id="exampleInputPassword1">
				</div>
				<?php
			   if (isset($_GET['err'])) {
				
				$error = $_GET['err'];
				echo "$error";
			} 
				?>
				<input type="submit" name="submit" value="Đăng Kí" class="btn btn-primary btn-block">
				
				<div class="sign-up">
					Bạn đã có tài khoản? <a href="../../Dự_án_1/Controller/index-home.php?request=login"><b>Đăng nhập ngay</b></a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
