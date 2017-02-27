function DrawCaptcha()
{
    
    var arr = [];
    for( var i = 0; i < 8; i++)
    {
        arr[i] = Math.random().toString(36).substr(2,1);
    }
    var code = arr[0] + ' ' + arr[1] + ' ' + ' ' + arr[2] + ' ' + arr[3] + ' ' + arr[4] + ' '+ arr[5] + ' ' + arr[6];
    document.getElementById("txtCaptcha").value = code
}
function ValidCaptcha()
{
    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
    var str2 = removeSpaces(document.getElementById('txtInput').value);
    console.log(str1);
    console.log(str2);
    if (str1 == str2) return true;        
    return false;
    
}
function removeSpaces(string)
{
    return string.split(' ').join('');
}
function validate()
{

	//colsole.log("executed");
	var name = document.f2.reg_username.value;
	var password = document.f2.reg_password.value;
	var retype = document.f2.reg_retype.value;
	var email = document.f2.reg_email.value;

	var atposition=email.indexOf("@");  
	var dotposition=email.lastIndexOf(".");  
	var result_captcha = ValidCaptcha();
	if(result_captcha == false)
	{
		alert("captcha dosen't match. Please retype it correctly");
	}
	else if(password != retype)
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


