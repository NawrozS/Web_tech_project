
function validateForm() {
	var n = document.forms["myForm"]["name"].value;
	var un = document.forms["myForm"]["usern"].value;
	var em = document.forms["myForm"]["email"].value;
	var c = document.forms["myForm"]["contact"].value;
	 var add = document.forms["myForm"]["address"].value;
	var p = document.forms["myForm"]["pasword"].value;
	

	
	if (n == "")
	{
        alert("Enter a name");
        document.myForm.name.focus();
        return false;
	}
	
	
	if (un == "")
	{
        alert("Enter a user name");
        document.myForm.usern.focus();
        return false;
	}
	
	if (em == "")
	{
        alert("Enter a user email");
        document.myForm.usern.focus();
        return false;
	}
	
	if (c == "")
	{
        alert("Enter a contact no");
        document.myForm.address.focus();
        return false;
	}
	if (add == "")
	{
        alert("Enter a Address");
        document.myForm.address.focus();
        return false;
	}
	
	if (p == "")
	{
        alert("Enter a password");
        document.myForm.pasword.focus();
        return false;
	}
	

	if (n != "" && un != "" && email != "" && c != "" && add != "" && p != "")
	{
        alert("register Successful");
        
		
        
	}
	

    

	
}