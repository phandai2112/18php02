<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<meta name="description" content="Mo ta website..">
	<meta name="keywords" content="tukhoa1,tukhoa2...">
	<link rel="Shortcut icon" href="favicon.ico">
	<!-- css -->
	<link rel="stylesheet" href="vendor/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/fonts/Roboto.css">
	<!-- myCss -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="col-md-5 offset-md-3">
			<div class="main-login">
				<div class="box-login">
				<h3 class="text-center">Đăng Nhập</h3>
				<form action="control.php" method="POST">
					<div class="form-group">
						<label for="">Email:</label>
						<input type="text" class="form-control" name="email">
					</div>
					<!-- /form-group -->
					<div class="form-group">
						<label for="">Mật Khẩu :</label>
						<input type="text" class="form-control" name="password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-warning" value="Đăng Nhập">
						
					</div>
					<!-- /form-group -->
				</form>
				<hr>
				<button class="btn btn-primary float-right" id="register">Đăng Ký</button>
			</div>
			<!-- /box-login -->
			<div class="box-register">
				<h3 class="text-center">THÊM THÀNH VIÊN</h3>
				<form action="login.php" method="POST" enctype="multidata/data-form">
					<div class="form-group">
						<label for="">Họ Tên :</label>
						<input type="text" class="form-control" name="rfullname">
					</div>
					<!-- /form-group -->
					<div class="form-group">
						<label for="">Email:</label>
						<input type="text" class="form-control" name="remail">
					</div>
					<!-- /form-group -->
					<div class="form-group">
						<label for="">Mật Khẩu :</label>
						<input type="text" class="form-control" name="rpassword">
					</div>
					<!-- /form-group -->
					<div class="form-group">
						<label for="">Số Điện Thoại :</label>
						<input type="text" class="form-control" name="rphone">
					</div>
					<!-- /form-group -->
					<div class="form-group">
						<input type="submit" class="btn btn-warning" value="Đăng Ký">
					</div>
					<!-- /form-group -->
				</form>
				<hr>
				<button class="btn btn-primary float-right" id="login">Đăng Nhập</button>
			</div>
			<!-- /box-login -->
			</div>
			<!-- /main-login -->
		</div>
		<!-- /container -->
	</div>

<?php 
if (isset($_POST['rfullname']) && isset($_POST['remail']) && isset($_POST['rpassword']) && isset($_POST['rphone'])) {
	# code...
	 $data = $_POST['remail']."-".$_POST['rfullname']."-".md5($_POST['rpassword'])."-".$_POST['rphone']."|";
	 // Tạo file txt và đọc file txt
 $createTxt = fopen("txtfile/user.txt","a");
//fwrite($createTxt,$data);
 fwrite($createTxt, $data);
}
 // $rfullname = $_POST['rfullname'];
 // $remail = $_POST['remail'];
 // $rpassword = $_POST['rpassword'];
 // $rphone = $_POST['rphone'];
 // $data = $remail."-".$rfullname."-".md5($rpassword)."-".$rphone."|";

  ?>






	<!-- js -->
	<script src="vendor/js/jquery.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>