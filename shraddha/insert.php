<?php
if (isset($_POST['uploadfilebutton'])) {
	$conn = mysqli_connect("localhost","root","","form");
	if($conn){
		echo "connected to database";
	}else{
		echo "not connected";
	}
  if (isset($_POST['name'])) {
	  	$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
		$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
		$hobbies = mysqli_real_escape_string($conn, $_REQUEST['hobbies']);
		$filename =($_FILES['uploadFile']['name']);
		$tmpname = ($_FILES['uploadFile']['tmp_name']);
	    
		echo "   file name :".$filename."  ";
		echo "   temp name :".$tmpname."  ";
		$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
		$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
		$country = mysqli_real_escape_string($conn, $_REQUEST['country']);
		$state = mysqli_real_escape_string($conn, $_REQUEST['state']);
		$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
		$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
	}	
	
	$folder = 'uploads/';
	move_uploaded_file($tmpname,$folder.$filename);
   
	$sql = "INSERT INTO task(name,email,address,phone,country,state,city,gender,hobbies,imagepath) VALUES('$name','$email','$address','$phone','$country','$state','$city','$gender','$hobbies','$filename')";

	$query = mysqli_query($conn,$sql);

	if($query){
		echo "<br> IMAGE UPLOADED TO DATABASE";
	}


}


?>