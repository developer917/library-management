function myfnm(){
	var Username=document.login.nam.value;
	if(Username == ""){
		document.getElementById('re').innerHTML="Plz Enter a Name";
		return false;
	}

	if(! isNaN(Username)){
		document.getElementById('re').innerHTML="Plz Enter a Name Not a Number";
		return false;
	}
	
	var Password=document.login.pass.value;
	if(Password == ""){
		document.getElementById('re1').innerHTML="Plz Enter a Password";
		return false;
	}

	if((Password.length < 1) || (Password.length > 15)){
		alert("Plz Enter a Password between 1 to 10");
		return false;
	}

	

}