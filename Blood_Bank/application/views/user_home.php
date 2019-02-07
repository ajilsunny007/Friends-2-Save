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
	<div style="background-image:url('<?php echo base_url('images/blood5.jpg');?>');background-size:cover;height:150%;">
		
		<div style="height:10%;" >
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/uindex')?>" ><button class="header_button">Home</button></a></div>
		<div align="center" class="col-xs-2"><a href="<?php echo site_url('controller/donors')?>" ><button class="header_button">Donors</button></a></div>
		<div align="center" class="col-xs-2"><a href="<?php echo site_url('controller/bookeddonors')?>" ><button class="header_button">Select Donor</button></a></div>
		<div align="center" class="col-xs-2"><a href="<?php echo site_url('controller/userprofile')?>" ><button class="header_button">Profile</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/logout')?>" ><button class="header_button">Logout</button></a></div>
		</div>	
		<div style="background-color:#66FFFF;height:auto;width:70%;position:absolute;left:15%;margin-top:3%;border-radius:30px;opacity:0.8">
		<h1 align="center" style="font-family:Georgia, 'Times New Roman', Times, serif;color:#000000;font-size:45px">Welcome User</h1>
		<p style="color:#330000;font-family:'Times New Roman', Times, serif;font-size:20px;margin-left:5%;margin-right:5%">Blood donation is one of the most significant contribution that a person can make towards the society. It is not harmful for an adult person to donate blood. The body of the donor can regenerate the blood within few days. It poses no threat to the metabolism of the body.</p>
		<p style="color:#330000;font-family:'Times New Roman', Times, serif;font-size:20px;margin-left:5%;margin-right:5%">The patient needs blood or his or her group of blood whenever necessary. It is another important thing. Blood has four groups namely, A. B, AB and O. The required group must be the same while transplanting otherwise the transplantation will go in vain and even the patient may die. The man with the O-group blood is called the universal donor as the people having others can accept it. On the contrary, the man with AB group of blood is called the universal receiver as he can accept all groups of blood.</p>
		<p style="color:#330000;font-family:'Times New Roman', Times, serif;font-size:20px;margin-left:5%;margin-right:5%">After donating the blood, the human body regenerates the blood after few days with the new cells. It is a healthy process which defines that a person is fit and beautiful. The entire body gets to freshen up, and most of the health problems come to an end. So donating the blood can result in a much healthier body which increases your life span.</p>
		<p style="color:#330000;font-family:'Times New Roman', Times, serif;font-size:20px;margin-left:5%;margin-right:5%">During the accident and injuries of the human being, the people require the blood so that they can get the blood from the blood bank urgently. If blood bank has available the same group of blood, then a patient can be treated as without any problem.</p>
		</div>
	</div>
	
	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>
	
</div>
</body>
</html>
