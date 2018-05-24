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
		<div class="col-md-6 offset-md-3">
			<div class="text-center"> THÊM THÀNH VIÊN</div>
		<form action="index.php" method="POST" enctype="multidata/form-data">
			<div class="form-group">
				<label >Họ Tên :</label>
				<input type="text" class="form-control" name="fullname">
			</div>
			<!-- / -->
			<div class="form-group">
				<label >Email :</label>
				<input type="text" class="form-control" name="email">
			</div>
			<!-- / -->
			<div class="form-group">
				<label >Mật Khẩu : </label>
				<input type="password" class="form-control" name="password">
			</div>
			<!-- / -->
			<div class="form-group">
				<label >Số điện thoại :</label>
				<input type="text" class="form-control" name="phone">
			</div>
			<!-- / -->
			<div class="form-group">
				<input type="submit" class="btn btn-warning" value="Thêm Thành Viên">
			</div>
			<!-- / -->
		</form>


		</div>
		
	</div>
	<?php 
		// Lấy thông tin lưu vào txt
		if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone'])) {
			$username = $_POST['fullname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone = $_POST['phone'];
			//$data = ['username' => $username,'email' => $email,'password' => $password,'phone' => $phone];
			$data = $username."-".$email."-".$password."-".$phone;
			$path = '../php02/filetxt/'.'user.txt';
			$createTxt = fopen($path, "w");
			fwrite($createTxt, $data);
		}



	 ?>
	





	<!-- js -->
	<script src="vendor/js/jquery.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>