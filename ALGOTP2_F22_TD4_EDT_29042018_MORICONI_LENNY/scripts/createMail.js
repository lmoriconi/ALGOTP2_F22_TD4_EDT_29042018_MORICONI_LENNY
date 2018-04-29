function createMail(){
	var lastname = document.getElementById("lName").value;
	var firstname = document.getElementById("fName").value[0];
	
	if(lastname && firstname)
		document.getElementById("sMail").value = firstname.toLowerCase() + "." + lastname.toLowerCase() + "@ludus-academie.com";
}