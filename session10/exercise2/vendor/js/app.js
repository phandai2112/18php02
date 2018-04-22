/*
	imagesSex : Biến lấy đối tượng giới tính
	userName  : Biến lấy đối tượng của họ tên
	yearBirth : Biến lấy đối tượng ngày sinh
	imagesAvatar : Biến lấy đối tượng ảnh
	--> Create by : Phan Đại
	*/

	// document DOM ready
document.addEventListener("DOMContentLoaded",function(){

	var imagesSex = document.getElementsByClassName("sex");
	var userName = document.getElementById("name");
	var yearBirth = document.getElementById("yearBirth");
	var imagesAvatar = document.getElementById("imagesAvatar");

//kiểm tra điều kiện ngày sinh

yearBirth.onchange = function(){
	console.log(yearBirth.value);

	if(yearBirth.value > 1997){
		userName.style = "color:#ffeb3b;font-size:30px";
	}
}

// kiểm tra điều kiện chọn ảnh giới tính
imagesSex[0].onclick = function(){
	imagesAvatar.src = "../session10/images/male.jpg";
	userName.style = "color:#f44336"
}

imagesSex[1].onclick = function(){
	imagesAvatar.src = "../session10/images/female.jpg";
	userName.style = "color:#3f51b5"
}





},false)