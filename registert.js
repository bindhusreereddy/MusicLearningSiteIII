/* JavaScript document for validating FirstName,LastName,Phonenumber, and Email Fields  */

//validation for Firstname Field
function validatefirstname()
{
	var fname = document.getElementById("firstname").value;
	var re1 = /^[a-zA-Z\s\'\-]{4,15}$/;    // this regular expression is for Accepting only character between 3-15

	if (re1.test(fname)) 
	{
		document.getElementById("firstnameprompt").style.color = "green";
		document.getElementById("firstnameprompt").innerHTML = "<strong>valid</strong>";
		return true;
	}
	else {
		document.getElementById("firstnameprompt").style.color = "red";
		document.getElementById("firstnameprompt").innerHTML = "<strong>Enter 4-15 characters</strong>";
		return false;
	}
}

//validation for LastName Field
function validateLastName()
{
var lname=document.getElementById("lastName").value;
var re2=/^[a-zA-Z\s\'\-]{2,15}$/;    // this regular expression is for Accepting only character between 2-15

if(re2.test(lname))
{
document.getElementById("lastNamePrompt").style.color="green";
document.getElementById("lastNamePrompt").innerHTML="<strong>valid</strong>";
return true;
}
else
{
document.getElementById("lastNamePrompt").style.color="red";
document.getElementById("lastNamePrompt").innerHTML="<strong>Enter 2 -15 characters length</strong>";
return false;
}
}

//validation for PhoneNumber Field
function validatePhoneNum()
{
var phoneNumber=document.getElementById("phone").value;
var re3=/^\d{10}$/;     // this regular expression is for Accepting only 10 digits

if(re3.test(phoneNumber))
{
document.getElementById("phonePrompt").style.color="green";
document.getElementById("phonePrompt").innerHTML="<strong>valid</strong>";
return (true);
}
else
{
document.getElementById("phonePrompt").style.color="red";
document.getElementById("phonePrompt").innerHTML="<strong>Enter 10 digits length</strong>";
return (false);
}
}


//validation for Email Field
function validateEmail()
{
   var email1 = document.getElementById("email").value;
   // below regular expression is for Accepting email in the form of xxxx@xxxx.com or xxxx@xxxx.co.in
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;    
   if(mailformat.test(email1))
   {
	   document.getElementById("emailPrompt").style.color="green";
	   document.getElementById("emailPrompt").innerHTML="<strong>valid</strong>";
       return (true);
   }
  else
  {
	  document.getElementById("emailPrompt").style.color="red";
	  document.getElementById("emailPrompt").innerHTML="<strong>Enter valid email</strong>";
      return (false);
   }
}