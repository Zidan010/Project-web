<?php
include ("../Control/Shifter_Reg_Process_chk.php");

?>
<!DOCTYPE html>
<html>
	<title>REGISTRATION</title>
	<head>
	<!--<link rel="stylesheet" type="text/css" href="../Style/form.css">-->
	<script src="../JS/SFJS.js"></script>

	</head>
<body>
<form  action="" method="POST">
<p id=labels2>REGISTRATION 
<input type =  "submit" name="loginpage" id = "btn" value = "Login" />
<input type =  "submit" name="submit2" id = "btn" value = "Cancel" /> </p>
</form>
<div id="box">
<form  action="" method="POST"  onsubmit="return shifterformcheck()">
<p id="message"></p>

    <p id="labels">Name:
	<input type="text" placeholder="Enter Full Name" name="name" id="name"></p>

	<p id=labels>National Id:
	<input type="number" placeholder="Enter National ID" name="nid" id="nid"></p>

	<p id="labels">Mobile:
	<input type="tel" name="mobile" placeholder="012-3456-7891" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" ></p>

    <p id="labels">Date Of Birth:
	<input type="date" name="dob" id="dob" ></p>
	
    
	<p id="labels"> Gender :<input type="radio" name="gender" id="male" value="Male">Male
    <input type="radio" name="gender" id="female" value="Female" >Female
    <input type="radio" name="gender" id="others" value="Others">Others </p>
	  
	<p id="labels"> Availability: <input type="checkbox" id="availability" name="availability" value="Morning_Shift(7AM-12PM)">Morning Shift [8 AM - 12 PM]
    <input type="checkbox" id="availability"  name="availability" value="Afternoon_Shift(1PM-6PM)">Afternoon Shift [1 PM - 6 PM]
    <input type="checkbox" id="availability" name="availability" value="Night_Shift(7PM-12AM)">Night Shift [7 PM - 12 AM] </p>
	  
    <label><p id="labels">Set an username:<input type="text"  placeholder="Set an username" name="uname" id="uname"></p></label>

      <label><p id="labels">Set a Password:<input type="password" placeholder="Set Password" name="pass" id="pass"></p></label>
      
    
	  <label><input type="submit" name="submit" class="button submitbutton" value="SUBMIT"></label>
	<label><input type="Reset" class="button rbutton"></label></br>
	
</form>

   <!-- <label></br><div class=lbox><a href="Login.php"> <button>LOGIN</button></a></div></br>
	<div class=lbox1> <a href="../View/Home.php"> <button>GO BACK</button></a></div></label>-->
</div>



</body>
</html>