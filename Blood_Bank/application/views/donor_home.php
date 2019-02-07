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
<body style="background-image:url(../../images/blood4.jpg)">
<div style="height:500px;">
	<center><header  class="container-fluid" style="background-color:#CE0000;color:	#DEB887;margin-top:5px;font-family:'Times New Roman', Times, serif" >
		<h1>Welcome To Blood Bank</h1>
	</header></center>
	<div style="background-image:url('<?php echo base_url('images/blood8.jpg');?>');background-size:cover;height:150%;">
		
		<div style="height:10%;" >
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/dindex')?>" ><button class="header_button">Home</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/selectusers')?>" ><button class="header_button">Selected Users</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/donorprofile')?>" ><button class="header_button">Profie</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/logout')?>" ><button class="header_button">Logout</button></a></div>
		</div>	
		<div style="position:absolute;width:28%;height:60%;margin-top:3%;margin-left:6%;">
			<img src="<?php echo base_url('images/blood10.jpg');?>" style="width:100%;height:100%;border-radius:30px">
		</div>
		
		<div style="position:absolute;width:39%;height:40%;margin-top:32%;margin-left:3%;">
			<h2 align="center" style="font-family:Georgia, 'Times New Roman', Times, serif;color:#FFFFFF">Saves the life of someone</h2>
			<p style="font-family:'Times New Roman', Times, serif;font-size:22px;color:#000000">If we donate the blood, then we can save someone life. It will be very honorable for us. Many of the people need the urgent blood, so we can keep that person by donating the blood. It gives much satisfaction to us, which is the biggest thing that we will never experience.</p>
		</div>
		
		<div style="position:absolute;width:38%;height:40%;margin-top:0%;margin-left:60%;">
			<h2 align="center" style="font-family:Georgia, 'Times New Roman', Times, serif;color:#FFFFFF">Refresh the body</h2>
			<p style="font-family:'Times New Roman', Times, serif;font-size:22px;color:#000000">After donating the blood, the human body regenerates the blood after few days with the new cells. It is a healthy process which defines that a person is fit and beautiful. The entire body gets to freshen up, and most of the health problems come to an end. So donating the blood can result in a much healthier body which increases your life span.</p>
		</div>
		
		<div style="position:absolute;width:38%;height:40%;margin-top:25%;margin-left:58%;">
			<img src="<?php echo base_url('images/blood9.jpg');?>" style="width:100%;height:100%;border-radius:30px">
		</div>
		
	</div>
	
	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>
	
</div>
</body>
</html>
