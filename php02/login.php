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
			<div class="text-center"> ĐĂNG NHẬP</div>
		<form action="login.php" method="POST" enctype="multidata/form-data">
			<div class="form-group">
				<label >Email :</label>
				<input type="text" class="form-control" name="email1">
			</div>
			<!-- / -->
			<div class="form-group">
				<label >Mật Khẩu : </label>
				<input type="password" class="form-control" name="password1">
			</div>
			<!-- / -->
			<div class="form-group">
				<input type="submit" class="btn btn-warning" value="Thêm Thành Viên">
			</div>
			<!-- / -->
		</form>


		</div>
			<?php 

			$path = '../php02/filetxt/'.'user.txt';
		$readTxt = file_get_contents($path);
		
		$strReplace = explode("-", $readTxt);
				//echo "Tên của thầy :".$strReplace[1];
				//echo "Số điện thoại  :".$strReplace[2];	
		if (isset($_POST['email1']) && isset($_POST['password1']) ) {
			$email = $_POST['email1'];
			$password = $_POST['password1'];
			if ($email == $strReplace[1] && $password == $strReplace[2]) {
				echo "<h3>Thầy đã đăng nhập được rồi ! </h3>";
				echo "Tên của thầy :".$strReplace[0];
				echo "Số điện thoại  :".$strReplace[3];
			}
		}


		
		//var_dump($strReplace[0]);
		
		

	 ?>
	</div>
	




	<!-- js -->
	<script src="vendor/js/jquery.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>