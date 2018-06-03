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

		<div class="col-lg-6 offset-lg-3">
			<a href="userList.php" class="btn btn-block btn-danger">XEM DANH SÁCH</a>
			<div class="card">
				<div class="card-body">
					<h3 class="text-center">Đăng ký thành viên</h3>
					<form action="userAdd.php" method="POST" enctype="multidata/form-data">
						<div class="form-group">
							<label for="">Tên đầy đủ :</label>
							<input type="text" class="form-control" name="fullname">
						</div>
						<div class="form-group">
							<label for="">Email :</label>
							<input type="text" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="">Điện thoại :</label>
							<input type="text" class="form-control" name="phone">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-warning" value="Thêm mới">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendor/js/jquery.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>