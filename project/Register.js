function myfnm() {
	var username = document.Registration.unm.value;
	if (username == "") {
		document.getElementById('r1').innerHTML="Please Enter Username";
		return false;
	}

	var email = document.Registration.enm.value;
	if (email == "") {
		document.getElementById('r2').innerHTML="Please Enter email";
		return false;
	}

	var mobileno = document.Registration.mn.value;
	if (mobileno=="") {
		document.getElementById('r3').innerHTML="Please Enter mobile number";
		return false;
	}
	if (mobileno.length!="10") {
		alert("Please Enter correct Mobile Number.It should have 10 Digit");
		return false;
	}

	var Password = document.Registration.pwd.value;
	if (Password=="") {
		document.getElementById('r4').innerHTML="Please Enter password";
		return false;
	}

	var cpassword = document.Registration.cpwd.value;
	if (cpassword=="") {
		document.getElementById('r5').innerHTML="Please Enter Confirm password";
		return false;
	}

	if(Password !== cpassword){
		alert("Your password and Confirm password don't match");
		return false;
	}

}