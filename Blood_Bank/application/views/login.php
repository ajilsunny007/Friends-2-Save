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
</head>
<body>
<div style="height:500px;">
	<center><header  class="container-fluid" style="background-color:#CE0000;color:	#DEB887;margin-top:5px;font-family:'Times New Roman', Times, serif" >
		<h1>Welcome To Blood Bank</h1>
	</header></center>
	<div style="background-image:url('<?php echo base_url('images/s.jpg');?>');background-size:cover;height:150%;">
		
		<div style="height:10%;" >
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/index')?>" ><button class="header_button">Home</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/about')?>" ><button class="header_button">About</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/register')?>" ><button class="header_button">Register</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/login')?>" ><button class="header_button">Login</button></a></div>
		</div>
		
		<div class="row" style="padding-top:50px;padding-left:10px;">
			
			<div class="col-md-4" 	style="color:#DEB887;" >
				 <form  method="POST" action="<?php echo site_url('controller/loginn');?>">
				   <caption><center><h1 style="font-family:Georgia, 'Times New Roman', Times, serif">Login here</h1></center></caption>
				    <div class="form-group">
					  <label for="email" style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px">Username:</label>
					  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
				    </div>
					<div class="form-group">
					<label for="pwd" style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px">Password:</label>
					  <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
					</div>
					<label style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:16px"> <a href="<?php echo site_url('controller/forgotpassword')?>">Forgot your password?</label></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" class="btn btn-default" style="font-family:Georgia;font-size:24px">Login</button>
				 </form>
			</div>
		</div>
		<div style="position:absolute;top:30%;left:68%;width:30%;">
			<h2 align="center" style="font-family:Georgia, 'Times New Roman', Times, serif;color:#00FFCC">Refresh the body</h2>
			<p style="color:#FFFFFF;font-family:'Times New Roman', Times, serif;font-size:20px">After donating the blood, the human body regenerates the blood after few days with the new cells. It is a healthy process which defines that a person is fit and beautiful. The entire body gets to freshen up, and most of the health problems come to an end. So donating the blood can result in a much healthier body which increases your life span.</p>
			<p style="color:#FFFFFF;font-family:'Times New Roman', Times, serif;font-size:20px">Some of the people have not the awareness about donating the blood. Everyone has the notice of blood donation. It is very helpful for the ineligible patient those have the lack of blood.</p>
		</div>
	</div>
	
	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>
	
</div>
</body>
</html>