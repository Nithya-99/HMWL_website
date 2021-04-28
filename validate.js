function validateData(){
	var flag = true;

	var pw = document.signin.psw1.value;
	var cpw = document.signin.cpsw.value;
	var email = document.signin.email.value;    
	var phone = document.signin.mobile.value;  


	if(isNaN(phone)==true){
		alert("Mobile number must be numeric");
		flag = false;
	}
	if(phone.length<10){
		alert("Mobile Number should be 10 digits");
		flag = false;
	}
	if(cpw!=pw){
		alert("Password does not match");
		flag = false;
	}

	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false){
		alert('Invalid Email');
		flag = false;
	}

	return flag;
}
