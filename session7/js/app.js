/*
	Name : getValue;
	Description : Hàm xử lý lấy giá trị từ đối tượng tượng và hiện thị lên input;
	---// :
	vì button là đối tượng : 
	- khi sử dụng this.value ta lấy được giá trị của chính nó .
	- Tạo hàm function với n là tham số thì ta nhận được giá trị của this.value 
	- Có 3 cái cần xét điều kiện là Xóa tất cả , xóa 1 số , Tính tổng
	eval : Hàm có sẵn W3cshool;
	substr : Hàm có sẵn W3cshool;
	--->>> Create by : Phan Đại //---	
*/


function getValue(n){
	if(n == "AC"){
		// Trường hợp xóa tất cả . result.value = Rỗng
		document.getElementById("result").value = " ";	
	}else if (n == "CE") {
		// Trường hợp xóa từng số . result.value.length-1 
		document.getElementById("result").value = result.value.substr(0,result.value.length-1);
	}else if (n == "=") {
		// Trường hợp phép tính các biến 
		document.getElementById("result").value = eval(result.value);
	}else {
		document.getElementById("result").value += n;
	}
}

