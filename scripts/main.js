function validate()
{
	//colsole.log("executed");
	var name = document.f2.reg_username.value;
	var password = document.f2.reg_password.value;
	var retype = document.f2.reg_retype.value;
	var email = document.f2.reg_email.value;

	var atposition=email.indexOf("@");  
	var dotposition=email.lastIndexOf(".");  

	if(password != retype)
	{  
		alert("password must be same!");  
		return false;  
	}
	else if (name==null || name=="")
	{  
  		alert("Name can't be blank");  
  		return false;  
	}
	else if(password.length<6 && password.length > 30)
	{  
  		alert("Password must be at least 6 characters long.");  
  		return false;  
  	}
  	else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
  	{  
  		alert("Please enter a valid e-mail address \n ");  
  		return false;  
  	} 
  	else 
  	{
  		return true;
  	} 
}


