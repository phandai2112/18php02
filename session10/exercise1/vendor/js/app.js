//  Create by Phan Dai

document.addEventListener("DOMContentLoaded",function(){
// document DOM ready
	var mouseOver = document.getElementsByTagName("p");
	
	//console.log(showBox[0].id);
	
	for (var i = 0; i < mouseOver.length; i++) {
		// Di chuột vào add Class
		mouseOver[i].onmouseover = function(){
			var x = this.getAttribute("data-show");
			//console.log(x);
			showBox   = document.getElementById(x);
			showBox.classList.toggle("active");
		}
		// Di Chuột ra thì xóa class
		mouseOver[i].onmouseout = function(){
			showBox.classList.remove("active");
		}
		
	}
	




},false)