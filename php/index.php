<?php 
$name = "Phan Trọng Đại";
$noSpace = str_replace(" ", "", $name);
	//hiện tên
echo $name;
echo "<br>";
	// 3.Đếm số ký tự trong tên bạn 
echo 'Số ký tự trong chuỗi  :' . strlen($noSpace);
echo "<br>";
	//4. Tên bạn gồm mấy từ?
echo "Số từ trong chuỗi :" . str_word_count($noSpace);
echo "<br>";
	//5. Tên bạn có chữ 'n' không? nó nằm ở vị trí thứ mấy
$result = strpos($noSpace,'n');
if ($result == false) {
	echo "Không thấy chữ n";
} else {
	echo "Vị trí tìm thấy chữ 'n' là :". $result;
}
echo "<br>";
	//6. In hoa tên bạn lên
echo "Viết hoa tên của bạn là :" . mb_strtoupper($name);
echo "<br>";
	//7.Thay thế tên bạn bằng 'PHP' 
echo "Thay thế tên bằng php :" . str_replace("Trọng Đại","PHP", $name);

?>