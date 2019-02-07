<!DOCTYPE html >
<html>
<head>
<title>Blood</title>
<link rel="icon" type="image/ico" href="../../images/icon1.jpg" />
 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
	 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css');?>"> 
	 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.css');?>"> 
	 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css');?>">
	 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/mycss.css');?>">
	 <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
	 <script src="<?php echo base_url('bootstrap/js/bootstrap.js');?>"></script>
	 <script src="<?php echo base_url('jquery.min.js');?>"></script>
     <link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	 <script>
	 function validation()
	 {
	 if(document.getElementById('uname').value=="")
	 {
		alert("Enter your name");
		focus.uname;
		return false;
	 }
	 if(!isNaN(document.getElementById('uname').value))
	 {
		alert("Check your name");
		focus.uname;
		return false;
	 }
	 if(document.getElementById('address').value=="")
	 {
		alert("Enter your address");
		focus.address;
		return false;
	 }
	 if(document.getElementById('uemail').value=="")
	 {
		alert("Enter your email");
		focus.uemail;
		return false;
	 }
	 if(document.getElementById('uphone').value=="")
	 {
		alert("Enter your phone Number");
		focus.uphone;
		return false;
	 }
	 if(isNaN(document.getElementById('uphone').value))
	 {
		alert("Check your phone Number");
		focus.uphone;
		return false;
	 }
	 if(document.getElementById('uphone').value.length<10)
	 {
		alert("Enter valid phone Number");
		focus.uphone;
		return false;
	 }
	 if(document.getElementById('password').value=="")
	 {
		alert("Enter Your password");
		return false;
	 }
	 if(document.getElementById('cpassword').value=="")
	 {
		alert("Enter your confirm password");
		return false;
	 }
	 if(document.getElementById('password').value!=document.getElementById('cpassword').value)
	 {
		alert("password are not matched !!!!");
		return false;
	 }
	 }
	 </script>
</head>
<body>
<div style="height:500px;">
	<center><header  class="container-fluid" style="background-color:#CE0000;color:	#DEB887;margin-top:5px;font-family:'Times New Roman', Times, serif" >
		<h1>Welcome To Blood Bank</h1>
	</header></center>
	<div style="background-image:url('<?php echo base_url('images/ss.jpg');?>');background-size:cover;height:150%;">
		
		<div style="height:10%;" >
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/index')?>" ><button class="header_button">Home</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/about')?>" ><button class="header_button">About</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/register')?>" ><button class="header_button">Register</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/login')?>" ><button class="header_button">Login</button></a></div>
		</div>	
		
		<center>
		<div  style="height:auto;width:50%; margin-top:20px">
			<div class="row">
			<a href="<?php echo site_url('controller/register')?>" ><button class="col-xs-6 butreg">User Register</button></a>
			<a href="<?php echo site_url('controller/donor_register')?>" ><button class="col-xs-6 butreg">Donor Register</button></a>
			</div>
		<div align="center" class="container-fluid">
		<h1 style="color:#CCFF99;font-family:Georgia, 'Times New Roman', Times, serif;font-size:36px"><b>User Registeration</b></h1>
		<form action="<?php echo site_url('controller/insertuser');?>" method="post" name="donnerreg" onSubmit="return validation()">
		<table>
		<tr>
		<td class="fontstyle">Name :</td><td><input type="text" class="form-control" name="uname" id="uname" placeholder="Full Name"></td>
		</tr>
		<tr>
		<td class="fontstyle">Address :</td><td><textarea cols="25" rows="4" id="address" name="address" class="form-control" placeholder="Address"></textarea></td>
		</tr>
		<tr>
		<td class="fontstyle">Gender :</td><td><input type="radio" name="gender" id="gender" value="male" checked><font class="fontstyle">Male&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="female" >Female</font></td>
		</tr>
		<tr>
		<td class="fontstyle">Email :</td><td><input type="email" class="form-control" name="uemail" id="uemail" placeholder="eg:  ajil@mail.com"></td>
		</tr>
		<tr>
		<td class="fontstyle">Phone Number :</td><td><input type="text" class="form-control" name="uphone" id="uphone" placeholder="eg:  8593967684"></td>
		</tr>
		<tr>
		<td class="fontstyle">Password :</td><td><input type="password" class="form-control" name="password" id="password"></td>
		</tr>
		<tr>
		<td class="fontstyle">Confirm Password :</td><td><input type="password" class="form-control" name="cpassword" id="cpassword"></td>
		</tr>
		</table>
		<input type="submit" name="regdonner" id="regdonner" class="fontstyle" value="SignUp" style="background-color:#33FF00;width:30%;border-radius:20px;color:#000000">
		</form>
		
		</div>

		</div>
		</center>
	</div>
	
	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>
	
</div>
</body>
</html>
