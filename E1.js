
function myFunction()
{
	let var1 = document.getElementById("value1").value;
    let var2 = document.getElementById("value2").value;
	if(var1 !=var2 || var1.length <8 || var2.length<8)
	{
		if(var1 != var2 && (var1.length <8 || var2.length<8))
			alert("Passwords do not match and a password is too short.");
		else
		{
			if(var1 != var2)
				alert("Passwords do not match!");
			else
				alert("A password is too short.");
		}
	}
	else
		alert("Passwords match!");
	
}