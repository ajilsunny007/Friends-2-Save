<!DOCTYPE html >
<html>
<head>
<title>Doner Profile</title>
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
	<div style="background-image:url('<?php echo base_url('images/blood4.jpg');?>');background-size:cover;height:150%;">

		<div style="height:10%;" >
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/dindex')?>" ><button class="header_button">Home</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/selectusers')?>" ><button class="header_button">Selected Users</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/donorprofile')?>" ><button class="header_button">Profie</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/logout')?>" ><button class="header_button">Logout</button></a></div>
		</div>
		<center>
		<h1 align="center" style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:40px;color:#FFFFFF"><b>Donor Profile</b></h1>

		<div>
		<?php
		foreach($dis as $row)
		{
			$name=$row->name;
			$address=$row->address;
			$gender=$row->gender;
			$email=$row->email;
			$phone=$row->phone;
			$bloodgroup=$row->bloodgroup;
			?>
		<table style="margin-top:-8%">
		<tr>
		<td align="right"><label class="fontstyle1">Name :</label></td><td><label class="fontstyle2"><?php echo $name?></label></td><br /></tr>
		<tr>
		<td align="right"><label class="fontstyle1">Address :</label></td><td width="80px"><label class="fontstyle2"><?php echo $address?></label></td><br /></tr>
		<tr>
		<td align="right"><label class="fontstyle1">Gender :</label></td><td><label class="fontstyle2"> <?php echo $gender?></label></td><br /></tr>
		<tr>
		<td align="right"><label class="fontstyle1">Email :</label></td><td><label class="fontstyle2"> <?php echo $email?></label></td><br /></tr>
		<tr>
		<td align="right"><label class="fontstyle1">Phone :</label></td><td><label class="fontstyle2"> <?php echo $phone?></label></td><br /></tr>
		<tr>
		<td align="right"><label class="fontstyle1">Blood Group :</label></td><td><label class="fontstyle2"> <?php echo $bloodgroup?></label></td><br /></tr>
		</table>
		<?php
		}
		?>
		</div>
		</center>
		<div style="position:absolute;width:20%;height:100%;top:30%;margin-left:75%;">
			<img src="<?php echo base_url('images/blood11.jpg');?>" style="width:100%;height:100%;border-radius:30px">
		</div>
	</div>

	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>

</div>
</body>
</html>
