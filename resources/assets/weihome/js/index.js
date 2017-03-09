window.onload = function() {

	document.getElementById('weixin').onclick = function() {
		document.getElementById('outer-w').style.display = "block";
	}
	document.getElementById('bg-black').onclick = function() {
		document.getElementById('outer-w').style.display = "none";
	}
	document.getElementById('close').onclick = function() {
		document.getElementById('outer-w').style.display = "none";
	}

//	document.getElementById('aa').onclick = function() {
//		$("#header").addClass("mini");
//		$(".sitecontent").addClass("mini");
//	}

//	document.getElementById('bb').onclick = function() {
//		$("#header").removeClass("mini");
//		$(".sitecontent").removeClass("mini");
//	}

}