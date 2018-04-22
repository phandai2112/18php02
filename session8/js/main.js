/*
* Các biến :
* NumberOne : Biến lưu giá trị số thứ nhất .
* NumberTwo : Biến lưu giá trị số thứ 2 .
* cal : Biến lưu giá trị của phép tính .
* result : Biến lưu kết quả .
* Number(): hàm chuyển giá trị từ string sang number
* Create by : Phan Đại
 */
function getValue(){

	var NumberOne = Number(document.getElementById('NumberOne').value);
	var NumberTwo = Number(document.getElementById('NumberTwo').value);
	var cal = document.getElementById('cal').value;
	var result = document.getElementById('result');

	switch(cal){

		case "+" : result.value =  NumberOne + NumberTwo;
		break;

		case "*" : result.value =  NumberOne * NumberTwo;
		break;

		case "-" : result.value =  NumberOne - NumberTwo;
		break;

		case "/" : result.value =  NumberOne / NumberTwo;
		break;

		case "%" : result.value =  NumberOne % NumberTwo;
		break;

		default:result.value = 'Điền Phép Tính...!';
        break;
	}

}
