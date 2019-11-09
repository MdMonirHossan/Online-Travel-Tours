
function verifyForm(){

	var pwd = document.forms['signup']['pwd'].value;
	var Rpwd = document.forms['signup']['Rpwd'].value;
	// var pwd = document.getElementById("pwd").value;
	// var Rpwd = document.getElementById("Rpwd").value;
	var feedback = document.getElementById("feedback");

	if(pwd != Rpwd){
		feedback.innerHTML = "Password does not match!!"
		feedback.style.color = "red";
	}
	else if(pwd.length < 6){
		console.log("Helloo");
	}
	console.log(pwd);
}