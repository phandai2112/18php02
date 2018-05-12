$(document).ready(function() {
	var x = $('#name ,#phone ,#numuser ,#numchild');
	// kiểm tra kiểu nhập
	$('#phone').change(function(event) {
		var isText = $('#phone').val();
		if (isText.length < 10 || isText.length > 11 ) {
			$('#error').text('Nhập sai ! Định dạng số điện thoại chỉ 10 - 11 số ');
			$('#phone').val() == " ";
		} else {
			$('#error').text('');
		}
	});
	// Kiểm tra form không được rỗng
	$('#send').click(function(event) {
		if (x.val() == "") {
			$('#error').text('*Bắt buộc : nhập đầy đủ thông tin để đặt phòng');
		}
	});
	// Slider
	
	var n = $('.item:nth-child(2n+1)');
	//var n = n + 1;
	setInterval(function(){ 
		console.log(n+1);

	}, 3000);



});