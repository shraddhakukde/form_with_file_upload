<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #74EBD5;background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);">

	<div class="container text-white shadow-sm p-3 mb-5 bg-dark mt-5 rounded  align-middle "style="padding-top:5rem;  width: 40rem;">
		<h1 ><center>FORM</center></h1>
		<hr style="border-top: 2px solid white;">
		<form action="insert.php" method="POST">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Name</label>
		      <input type="name" class="form-control" id="inputname" placeholder="Eg. shraddha" name="name">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Email</label>
		      <input type="Email" class="form-control" id="inputEmail4" placeholder="shraddha@gmail.com" name="email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Address</label>
		    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"name="address">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Phone Number</label>
		    <input type="phone number" class="form-control" id="inputAddress2" placeholder="Mob number"name="phone">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputState">Contry</label>
		      <select id="inputState" class="form-control" name="country">
		        <option selected="country">Choose...</option>
		        <option>India</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState">State</label>
		      <select id="inputState" class="form-control"name="state">
		        <option selected="country">Choose...</option>
		        <option>maharashtra</option>
		        <option>madhya pradesh</option>
		        <option>karnatak</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState">City</label>
		      <select id="inputState" class="form-control"name="city">
		        <option selected="country">Choose...</option>
		        <option>Amravati</option>
		        <option>Pune</option>
		        <option>mumbai</option>
		      </select>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Gender</label><br>
		      <div class="form-check form-check-inline">
			    <input class="form-check-input" type="radio"  id="inlineRadio1" value="m" name="gender">
			    <label class="form-check-label" for="inlineRadio1">Male</label>
			  </div>
			  <div class="form-check form-check-inline">
			    <input class="form-check-input" type="radio"  id="inlineRadio2" value="f"name="gender">
			    <label class="form-check-label" for="inlineRadio2">Female</label>
			  </div>
			  <div class="form-check form-check-inline">
			    <input class="form-check-input" type="radio" id="inlineRadio3" value="o"name="gender">
			    <label class="form-check-label" for="inlineRadio3">Other</label>
			  </div>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Hobbies</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="E.g. Hobbies"name="hobbies">
		    </div>
		    <div class="form-group col-md-12">
		      <label for="inputPassword4">Choose File</label>
		      <input type="file" name="uploadFile" value="upload">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary" name="uploadfilebutton" value="submit">Submit</button>
		</form>  
    </div>  	  
	       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>

