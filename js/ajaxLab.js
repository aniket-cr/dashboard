function addLabArg(emailID,sname,fname,department,city,country,pincode,description,sitelink)
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
			/*var response = xmlhttp.responseText;	
			console.log(response);
			response = JSON.parse(response);
			var result = "<table>";
			for(var i=0;i<response.length;i++)
			{
				result = result + "<tr> <td>" + 
				response[i]["sname"] + "</td> <td> " +
				response[i]["fname"] + "</td> <td> " +
				response[i]["department"] + "</td> <td> " +
				response[i]["city"] + "</td> <td> " +
				response[i]["country"] + "</td> <td> " +
				response[i]["pincode"] + "</td> <td> " +
				response[i]["description"] + "</td> <td> " +
				response[i]["sitelink"] + 
							"</td> </tr>";
			}
			result = result + "</table>";
			document.getElementById("display_labs").innerHTML = result;
			console.log(result);	*/		
		}
	}
	var parameters = "emailID=" + emailID + "&add_lab=1&sname=" + sname + "&fname="+ fname + "&department=" + department +
	"&city=" + city + "&country=" + country + "&pincode=" + pincode + "&description=" + description + "&sitelink=" + sitelink;
	console.log(parameters);
	xmlhttp.open("POST",encodeURI("lab_operations.php?" + parameters) ,true);
	xmlhttp.send();
}


function displayLabsArg(emailID)
{
	console.log("inside display with emailID=" + emailID);
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
					console.log(response);
	
			response = JSON.parse(response);
			var result = "";//"<table>";
			for(var i=0;i<response.length;i++)
			{
				/*result = result + "<tr> <td>" + 
				response[i]["sname"] + "</td> <td> " +
				response[i]["fname"] + "</td> <td> " +
				response[i]["department"] + "</td> <td> " +
				response[i]["city"] + "</td> <td> " +
				response[i]["country"] + "</td> <td> " +
				response[i]["pincode"] + "</td> <td> " +
				response[i]["description"] + "</td> <td> " +
				response[i]["sitelink"] + 
							"</td> </tr>";*/
							console.log("    " + response[i]["sname"] + "    ");
				result = result + '<div class="form-group" style="margin-top:50px;"> <input class="form-control" name="sname1" id="snameField" type="text" value=' + response[i]["sname"] + ' disabled> <input class="form-control" name="sname1" id="fnameField" type="text" value=' + response[i]["fname"] + ' disabled>  <input class="form-control" name="department1" id="departmentField" value=' + response[i]["department"] + ' type="text" disabled>  <input class="form-control" name="city1" id="cityField" value=' + response[i]["city"] + ' type="text" disabled> <br><br>   <input class="form-control" name="country1" id="countryField" value=' + response[i]["country"] + ' type="text" disabled>  <input class="form-control" name="pincode1" id="pincodeField" value=' + response[i]["pincode"] + ' type="text" disabled>  <input class="form-control" name="description1" id="descriptionField" type="text" value=' + response[i]["description"] + ' disabled>  <input class="form-control" name="link" id="linkField1" value=' + response[i]["sitelink"] + ' type="text" disabled>  <input name="id" id="id" type="disabled" value=' + response[i]["labID"] + '><br><br><button class="btn btn-primary editbutton" style="margin-left:42.5%;">EDIT</button>  <button class="btn btn-primary savebutton" >SAVE</button><br><br><br>   </div><br/><br/>';
				console.log("---->>>>>" + result + "<<<<<<<----------");
				//document.getElementById("snameField1")[i].value = response[i]["sname"];
				//document.getElementById("departmentField1")[i].value = response[i]["department"];

			}
			//result = result + "</table>";
			document.getElementById("display_labs").innerHTML = result;
			console.log(result);
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		}
	}
	var parameters = "emailID=" + emailID + "&add_lab=0";
	console.log(parameters);
	xmlhttp.open("POST",encodeURI("lab_operations.php?" + parameters) ,true);
	xmlhttp.send();
}


function editLabsArg(emailID,id,sname,fname,department,city,country,pincode,description,sitelink)
{
	console.log("edit is called args");
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
			/*var response = xmlhttp.responseText;	
			console.log(response);
			response = JSON.parse(response);
			var result = "<table>";
			for(var i=0;i<response.length;i++)
			{
				result = result + "<tr> <td>" + 
				response[i]["sname"] + "</td> <td> " +
				response[i]["fname"] + "</td> <td> " +
				response[i]["department"] + "</td> <td> " +
				response[i]["city"] + "</td> <td> " +
				response[i]["country"] + "</td> <td> " +
				response[i]["pincode"] + "</td> <td> " +
				response[i]["description"] + "</td> <td> " +
				response[i]["sitelink"] + 
							"</td> </tr>";
			}
			result = result + "</table>";
			document.getElementById("display_labs").innerHTML = result;
			console.log(result);	*/		
		}
	}
	var parameters = "emailID=" + emailID + "&add_lab=2&sname=" + sname + "&fname="+ fname + "&department=" + department +
	"&city=" + city + "&country=" + country + "&pincode=" + pincode + "&description=" + description + "&sitelink=" + sitelink + "&id=" + id;
	console.log(parameters);
	xmlhttp.open("POST",encodeURI("lab_operations.php?" + parameters) ,true);
	xmlhttp.send();
}


function displayLabsArg(emailID)
{
	console.log("inside display with emailID=" + emailID);
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
					console.log(response);
	
			response = JSON.parse(response);
			var result = "";//"<table>";
			for(var i=0;i<response.length;i++)
			{
				/*result = result + "<tr> <td>" + 
				response[i]["sname"] + "</td> <td> " +
				response[i]["fname"] + "</td> <td> " +
				response[i]["department"] + "</td> <td> " +
				response[i]["city"] + "</td> <td> " +
				response[i]["country"] + "</td> <td> " +
				response[i]["pincode"] + "</td> <td> " +
				response[i]["description"] + "</td> <td> " +
				response[i]["sitelink"] + 
							"</td> </tr>";*/
							console.log("    " + response[i]["sname"] + "    ");
				result = result + '<div class="form-group" style="margin-top:50px;"> <input class="form-control" name="sname1" id="snameField" type="text" value=' + response[i]["sname"] + ' disabled> <input class="form-control" name="sname1" id="fnameField" type="text" value=' + response[i]["fname"] + ' disabled>  <input class="form-control" name="department1" id="departmentField" value=' + response[i]["department"] + ' type="text" disabled>  <input class="form-control" name="city1" id="cityField" value=' + response[i]["city"] + ' type="text" disabled> <br><br>   <input class="form-control" name="country1" id="countryField" value=' + response[i]["country"] + ' type="text" disabled>  <input class="form-control" name="pincode1" id="pincodeField" value=' + response[i]["pincode"] + ' type="text" disabled>  <input class="form-control" name="description1" id="descriptionField" type="text" value=' + response[i]["description"] + ' disabled>  <input class="form-control" name="link" id="linkField" value=' + response[i]["sitelink"] + ' type="text" disabled>  <input type="hidden" name="id" id="id" value=' + response[i]["labID"] + '><br><br><button class="btn btn-primary editbutton" style="margin-left:42.5%;">EDIT</button>  <button class="btn btn-primary savebutton" >SAVE</button><br><br><br>   </div><br/><br/>';
				console.log("---->>>>>" + result + "<<<<<<<----------");
				//document.getElementById("snameField1")[i].value = response[i]["sname"];
				//document.getElementById("departmentField1")[i].value = response[i]["department"];

			}
			//result = result + "</table>";
			document.getElementById("display_labs").innerHTML = result;
			console.log(result);
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		}
	}
	var parameters = "emailID=" + emailID + "&add_lab=0";
	console.log(parameters);
	xmlhttp.open("POST",encodeURI("lab_operations.php?" + parameters) ,true);
	xmlhttp.send();
}