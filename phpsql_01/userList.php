
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
		<div class="card">
			<a href="index.php" class="btn btn-danger">THÊM THÀNH VIÊN</a>
			<div class="card-body">

				<?php 
				include "database.php";
				$sql = "SELECT fullname,email,phone FROM users";
				$result = mysqli_query($con,$sql);
				if (mysqli_num_rows($result) > 0) 
				{
					while($row = mysqli_fetch_assoc($result)) {
						 echo	"Tên: " . $row["fullname"]. " - Email: " . $row["email"]. "- Điện Thoại : " . $row["phone"]."<br>";
					}
				} 
				else {
					echo "Không có record nào";
				}
				?>
			</div>
		</div>
	</div>


	<!-- js -->
	<script src="vendor/js/jquery.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>