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
	<center><header  class="container-fluid" style="background-color:#CE0000;color:	#DEB887;margin-top:5px;font-family:Georgia, 'Times New Roman', Times, serif" >
		<h1>Welcome To Blood Bank</h1>
	</header></center>
	<div style="background-image:url('<?php echo base_url('images/blood.jpg');?>');background-size:cover;height:150%;">
		
		<div style="height:10%;" >
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/index')?>" ><button class="header_button">Home</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/about')?>" ><button class="header_button">About</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/register')?>" ><button class="header_button">Register</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/login')?>" ><button class="header_button">Login</button></a></div>
		</div>	
		<div  style="position:relative;top:48%;left:39%;height:30%;width:50%;">
			<img src="<?php echo base_url('images/blood3.jpg');?>" style="height:100%;width:100%;border-radius:20px">
		</div>
	</div>
	
	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>
	
</div>
</body>
</html>
