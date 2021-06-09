function myre(){
	var name = document.Register.nam.value;
	if(name == ""){
		document.getElementById('n').innerHTML="Please Enter a Name...";
		return false;
	}
	var str = /^[a-z A-Z]*$/;
		if(str.test(name)){
			
		}
		else{
			document.getElementById('n4').innerHTML="Please Enter a Correct Name...";
			return false;
		}
	
	var email = document.Register.em.value;
	if(email == ""){
		document.getElementById('n1').innerHTML="Please Enter a Email Id...";
		return false;
	}
	var password = document.Register.pass.value;
	if(password == ""){
		document.getElementById('n2').innerHTML="Please Enter a password...";
		return false;
	}
	var cpassword = document.Register.cpass.value;
	if(cpassword == ""){
		document.getElementById('n3').innerHTML="Please Enter a confirm password...";
		return false;
	}

	if(password !== cpassword){
		alert(" Your password and confirm password must be same");
		return false;
	}
	var string=/^[A-Za-z0-9._]+@[a-zA-Z.-]+[a-zA-z]{2,4}$/;
	if(string.test(email)){
		return true;
	}
	else{
		document.getElementById('n1').innerHTML="Please Enter a Email Correct format...";
		return false;
	}
}