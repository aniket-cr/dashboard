<?php
	include_once('config.php');
	$emailID = $_REQUEST['emailID'];
	$add_lab = $_REQUEST['add_lab'];
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	if($add_lab == 1) //a new lab has to be added
	{
		$sname = str_replace("'","\'", $_REQUEST['sname']);
		$fname = str_replace("'","\'", $_REQUEST['fname']);
		$fname = str_replace("'","\'", $_REQUEST['fname']);	
		$department = str_replace("'","\'", $_REQUEST['department']);
		$fname = str_replace("'","\'", $_REQUEST['fname']);
		$city = str_replace("'","\'", $_REQUEST['city']);
		$country = str_replace("'","\'", $_REQUEST['country']);
		$pincode = str_replace("'","\'", $_REQUEST['pincode']);
		$description = str_replace("'","\'", $_REQUEST['description']);
		$sitelink = str_replace("'","\'", $_REQUEST['sitelink']);
		$query = "SELECT max(labID) as c FROM labs;";
		$result = mysqli_query($connect,$query);
		if(mysqli_num_rows($result) == 0)
		{
			$id = 1;
		}
		else
		{
			$result = mysqli_fetch_array($result);
			$id = $result['c'] + 1;
		}
		//get the university ID
		$query = "SELECT universityID FROM user WHERE emailID='$emailID';";
		$result = mysqli_query($connect,$query);
		$res = mysqli_fetch_array($result); 
		$universityID = $res['universityID'];
		//echo "<br/><br/>";
		$query = "INSERT INTO labs(labID,universityID,admin,sname,fname,department,city,country,pincode,description,
		sitelink) VALUES($id,$universityID,'$emailID','$sname','$fname','$department','$city','$country','$pincode',
		'$description','$sitelink');";
		//echo $query;
		//echo "<br/><br/>";
		$result = mysqli_query($connect,$query);
		/*$query = "SELECT * FROM labs;";
		$result = mysqli_query($connect,$query);
		$json = array();
		while($res = mysqli_fetch_array($result))
		{
			$json[] = $res;
		}
		echo json_encode($json);*/
	}
	
	if($add_lab == 0) //display all labs
	{
		$query = "SELECT emailID FROM superuser WHERE emailID='$emailID';";
		$result = mysqli_query($connect,$query);
		$is_super = mysqli_num_rows($result);
		//echo $is_super;
	//	echo $query;
		if($is_super == 1)
		{
			$query = "SELECT * FROM labs;";
		}
		else
		{
			$query = "SELECT * FROM labs WHERE hidden=0;";
		}
	//	echo $query;
		$result = mysqli_query($connect,$query);
		$json = array();
		while($res = mysqli_fetch_array($result))
		{
			$res['is_super'] = $is_super;
			$json[] = $res;
		}
		echo json_encode($json);
	}
	
	if($add_lab == 2) // edit the lab
	{
		$sname = str_replace("'","\'", $_REQUEST['sname']);
		$fname = str_replace("'","\'", $_REQUEST['fname']);
		$department = str_replace("'","\'", $_REQUEST['department']);
		$fname = str_replace("'","\'", $_REQUEST['fname']);
		$city = str_replace("'","\'", $_REQUEST['city']);
		$country = str_replace("'","\'", $_REQUEST['country']);
		$pincode = str_replace("'","\'", $_REQUEST['pincode']);
		$description = str_replace("'","\'", $_REQUEST['description']);
		$sitelink = str_replace("'","\'", $_REQUEST['sitelink']);
		$labID = str_replace("'","\'", $_REQUEST['id']);
		$query = "UPDATE labs SET sname='$sname',fname='$fname',department='$department',city='$city',country='$country',
		pincode='$pincode',description='$description',sitelink='$sitelink' WHERE labID=$labID;";
		echo $query;
		$result = mysqli_query($connect,$query);
	}
	
	if($add_lab == 3) // hide or unhide the lab
	{
		$labID = str_replace("'","\'", $_REQUEST['id']);
		$hidden = str_replace("'","\'", $_REQUEST['hidden']);
		if($hidden == 0)
		{
			$hidden = 1;
		}
		else
		{
			$hidden = 0;
		}
		$query = "SELECT emailID FROM superuser WHERE emailID='$emailID';";
		$result = mysqli_query($connect,$query);
		$is_super = mysqli_num_rows($result);
		//echo $is_super;
		$query = "UPDATE labs SET hidden=$hidden WHERE labID=$labID;";
	//	echo $query;
		$result = mysqli_query($connect,$query);
		if($is_super == 1)
		{
			$query = "SELECT * FROM labs;";
		}
		else
		{
			$query = "SELECT * FROM labs WHERE hidden=0;";
		}
	//	echo $query;
		$result = mysqli_query($connect,$query);
		$json = array();
		while($res = mysqli_fetch_array($result))
		{
			$res['is_super'] = $is_super;
			$json[] = $res;
		}
		echo json_encode($json);
	}
?>