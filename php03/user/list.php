
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Danh Sách</title>
	<meta name="description" content="Mo ta website..">
	<meta name="keywords" content="tukhoa1,tukhoa2...">
	<link rel="Shortcut icon" href="favicon.ico">
	<!-- css -->
	<link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
	<link rel="stylesheet" href="../vendor/css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendor/fonts/Roboto.css">
	<!-- myCss -->
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

	<?php 
	// Lấy dữ liệu
	$opFile = file_get_contents("../txtfile/user.txt", "r");
	//echo $opFile;
	$data = [];
	array_push($data, $opFile);
	// Tách mảng cha
	$arrParent = explode("|", $opFile);
	//echo "<pre>";
	//var_dump($arrParent);
	//  Tách lấy dữ liệu con
	// $arrCont = explode("-", $opFile);
	// echo "<pre>";
	// var_dump($arrCont);
	 foreach ($arrParent as $value) {
		
		if (isset($_POST['del'])) {
			$id = $_POST['del'];
			unset($arrParent[$id]);
			//echo $id;
		}
		// echo "<pre>";
	 // 	var_dump($arrParent);
	 }
	 $dataDel = implode("|", $arrParent);
	 $opFlie = fopen("../txtfile/user.txt", "w");
	 fwrite($opFlie, $dataDel);



	?>
	<div class="container">
		<table>
			<tr>
				<th>STT :</th>
				<th>Dữ Liệu:</th>
			</tr>
			<?php foreach ($arrParent as $key =>$value): ?>
				<tr>
					<td><?php echo $key ?></td>
					<td><?php echo $value ?></td>
				</tr>
			<?php endforeach ?>

		</table>

	</div>
	<!-- / table -->
	<div class="container">		
		<form action="list.php" method="POST" enctype="multidata/form-data">
			<div class="form-group">
				<label>Xóa Tài Khoản :</label>
				<select name="del" class="form-control">
					<?php foreach ($arrParent as $key => $value): ?>
						<option value="<?php echo $key ?>">Thông Tin Tài Khoản <?php echo $key ?></option>
					<?php endforeach ?>
				</select>
			</div>

			<button class="btn btn-danger">Xóa Tài Khoản</button>
		</form>
	</div>
	<!-- /form -->

	<!-- js -->
	<script src="../vendor/js/jquery.js"></script>
	<script src="../vendor/js/bootstrap.min.js"></script>
	<script src="../assets/js/main.js"></script>
</body>
</html>