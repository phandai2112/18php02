var userName = "Phan Đại";
var myPhone = "0922344285";
var mybirthday = "01/02/93";
var homeTown = "Nghệ An";
document.write("<h3> Bài Tập Số 1 <h3>" + "- Họ và Tên : " + userName + "<br>" + "- Số Điện Thoại : " +myPhone +"<br>" +"- Ngày Sinh :" + mybirthday + "<br>" +"- Quê Quán :" + homeTown+"<br>");
// Hết bài tập 1


for (var i = 0; i<=100; i++) {
	if (i%15 == 0) {
		document.write("Số chia hết cho Mười Lăm là " + i +"<br>");
	}else if(i%5 == 0 ) {
		document.write("Số chia hết cho Năm là " + i +"<br>");
	}else if(i%3 == 0){
		document.write("Số chia hết cho Ba là " + i +"<br>");
	}
}

// Hết bài 2
