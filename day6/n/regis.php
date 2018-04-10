<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
</head>

  <body>
  	<div align="center">
    <form action="db.php" method="POST">

     <b>Name:</b>
     <input type="text" id="name" name="name"><br><br>
     
     <b>Father's Name:</b>
     <input type="text" id="f_name" name="f_name"><br><br>
     
     
     <b>Address:</b>
     <input type="checkbox" id="l_add_button" name="check_address" onclick = "myfunc1()">Postal Address
     <input type="checkbox" id="p_add_button" name="check_address" onclick = "myfunc2()">Permanent Address<br><br>

     <div id="l_add_text">
     <b>Postal address:</b>
     <textarea id="l_add_text_val" name="l_add_text_val"></textarea>
     </div><br>

     <div id="p_add_text">
     <b>Permanent address:</b>
     <textarea id="p_add_text_val" name="p_add_text_val"></textarea>
     </div><br>
	 
	 <b>Sex:</b>
	 <input type="radio" id="male_button" name="sex_button">Male
	 <input type="radio" id="female_button" name="sex_button">Female<br><br>
	 
	 
	 <b>Qualification:</b>
	 <select>
	  <option value="CSE">Computer Science</option>
	  <option value="ECE">Electronics</option>
	  <option value="ME">Mechanical</option>
	  <option value="EE">Electrical</option>
	 </select>
	 <br><br>
	 
     <b>Mobile Number:</b>
     <input type="text" id="mobile_number" name="mobile_number"><br><br>
     
     <b>Email:</b>
     <input type="text" id="email" name="email"><br><br><br>
     <input type="text" name="flag" id="flag" style="visibility: hidden">
     
     <b>Username</b>
     <input type="text" id="username" name="username"><br><br>

     <b>Password</b>
     <input type="text" id="password" name="password"><br><br>
     <b>Confirm Password</b>
     <input type="text" id="cnfpass" name="cnfpass"><br><br>
     <input type="Submit" id="Submit" value="Submit" onclick="submit_clicked()">
     <input type="Submit" id="Display" value="Display" onclick="display_clicked()">
     <input type="reset" id="Refresh" value="Refresh"><br>

    </form>
    </div>
  </body>

 <script>
 document.getElementById("l_add_text").style.visibility = "hidden";
 document.getElementById("p_add_text").style.visibility = "hidden";
 
 function myfunc1(){
	 if(document.getElementById("l_add_text").style.visibility == "visible"){
	 	document.getElementById("l_add_text").style.visibility = "hidden";
	 }
	 else{
	 	document.getElementById("l_add_text").style.visibility = "visible"
	 }
	 //document.getElementById("l_add_text").style.visibility = "visible";
	 //document.getElementById("p_add_text").style.visibility = "hidden";
 }
 
 function myfunc2(){
	 if(document.getElementById("p_add_text").style.visibility == "visible"){
	 	document.getElementById("p_add_text").style.visibility = "hidden";
	 }
	 else{
	 	document.getElementById("p_add_text").style.visibility = "visible"
	 }
	 
	 //document.getElementById("p_add_text").style.visibility = "visible";
	 //document.getElementById("l_add_text").style.visibility = "hidden";
 }
 
 function submit_clicked(){
	 var name = document.getElementById("name").value;
	 var address_l = document.getElementById("l_add_text_val").value;
	 var address_p = document.getElementById("p_add_text_val").value;
	 var mob_num = document.getElementById("mobile_number").value;
	 var email = document.getElementById("email").value;
	 var atpos = email.indexOf("@");
     var dotpos = email.lastIndexOf(".");
	 
	 if(isNaN(mob_num) == true || mob_num.length != 10){
	 	alert("Enter 10 digits in mobile number")
	 }
	 
	 else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
	 	alert("Not a valid e-mail address");	 
	 }
	 
	 else{
	 	//console.log("helo here");
	 	document.getElementById("flag").value="0";
	 	alert("Submitted successfully");
		 
	 }
 }


 function display_clicked(){
 	
 		document.getElementById("flag").value="1";
 	}
 
 </script>

</html>