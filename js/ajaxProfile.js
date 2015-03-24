function initialDisplayArg(email)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
	
			response = JSON.parse(response);
			document.getElementById("emailField").value = response.emailID;
			document.getElementById("nameField").value = response.name;
	
			document.getElementById("contactField").value = response.contact;
			document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		}
	}
	var parameters = "emailID=" + email + "&edit_option=0";
	xmlhttp.open("POST",encodeURI("profile_operations.php?" + parameters) ,true);
	xmlhttp.send();
}

function editNameArg(email,name)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
	
			response = JSON.parse(response);
			
			document.getElementById("nameField").value = response.name;
	
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		}
	}
	var parameters = "emailID=" + email + "&edit_option=1&name=" + name;
	xmlhttp.open("POST",encodeURI("profile_operations.php?" + parameters) ,true);
	xmlhttp.send();
}

function editContactArg(email,contact)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
	
			response = JSON.parse(response);
			document.getElementById("contactField").value = response.contact;
	
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		}
	}
	var parameters = "emailID=" + email + "&edit_option=2&contact=" + contact;
	xmlhttp.open("POST",encodeURI("profile_operations.php?" + parameters) ,true);
	xmlhttp.send();
}

function editAddressArg(email,address)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
	
			response = JSON.parse(response);
			document.getElementById("addressField").value = response.address;
	
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		}
	}
	var parameters = "emailID=" + email + "&edit_option=3&address=" + address;
	xmlhttp.open("POST",encodeURI("profile_operations.php?" + parameters) ,true);
	xmlhttp.send();
}