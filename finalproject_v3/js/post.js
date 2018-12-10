
function validateForm() {
	var un = document.forms["myForm"]["username"].value;
	var n = document.forms["myForm"]["name"].value;
	var em = document.forms["myForm"]["email"].value;
	var ph = document.forms["myForm"]["phn"].value;
	 var add = document.forms["myForm"]["address"].value;
	 var r = document.forms["myForm"]["rnp"].value;
	var i = document.forms["myForm"]["image"].value;
	

	if (un == "")
	{
        alert("Enter your username");
        document.myForm.username.focus();
        return false;
	}
	
	if (n == "")
	{
        alert("Enter your Full Name");
        document.myForm.username.focus();
        return false;
	}

	fnameregex =/^[a-zA-Z ]+$/
	fname = n.match(fnameregex);
	
	if (n != fname)
	{
        alert("Your full name is not valid. Only characters A-Z, a-z are  acceptable.");
        document.myForm.name.focus();
        return false;
	}
	
	
	
	
	if (em == "")
	{
        alert("Enter your Email");
        document.myForm.username.focus();
        return false;
	}
	  re = /\S+@\S+/;
	  me = em.match(re);
	if (em != me)
	{
        alert("Enter a valid email");
        document.myForm.email.focus();
        return false;
	}
	
	phnregex =/[0-9]{12}/
	m = ph.match(phnregex);
	 
	if (ph != m)
	{ 
        alert("Please provide your valid phone number with 12 digit. white spaces are not allowed");   
        document.myForm.phone.focus();
        return false;
	}
	if (add == "")
	{
        alert("Enter a Address");
        document.myForm.address.focus();
        return false;
	}
	
	if (r == "")
	{
        alert("Enter Rent Amount");
        document.myForm.rnp.focus();
        return false;
	}

if (i == "")
	{
        alert("Enter Picture");
        document.myForm.name.focus();
        return false;
	}
	

	
	

    

	
}