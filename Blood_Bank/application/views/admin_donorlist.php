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
	<div style="background-image:url('<?php echo base_url('images/blood6.jpg');?>');background-size:cover;height:150%;">
		
		<div style="height:10%;" >
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/aindex')?>" ><button class="header_button">Home</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/userlist')?>" ><button class="header_button">Users list</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/donorlist')?>" ><button class="header_button">Donors list</button></a></div>
		<div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/logout')?>" ><button class="header_button">Logout</button></a></div>
		</div>		
		<h1 align="center" style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:40px;color:#FFFFFF"><b>Donor List</b></h1>	
		<div style="margin-top:0%;font-size:18px;color:#000000">
		<table border="8" align="center" class="table-condensed" style="background-color:#66FFFF;margin-left:5%;margin-right:5%">
		<tr >
		<th>Name</th><th>Address</th><th>Gender</th><th>Email</th><th>Phone</th><th>Blood Group</th><th>Action</th>
		</tr>	
		<?php 
		foreach($type as $row)
		{
		$name=$row->name;
		$address=$row->address;
		$gender=$row->gender;
		$email=$row->email;
		$phone=$row->phone;
		$bloodgroup=$row->bloodgroup;
		$type=$row->type;
		$status=$row->status;
		?>
		<form action="<?php echo site_url('controller/blockdonoraction')?>" method="post" name="userlist">
		<tr>
		<input type="hidden" value="<?php echo $email ?>" id="blockid" name="blockid">
		<td><?php echo $name;?></td><td width="15%"><?php echo $address;?></td><td><?php echo $gender;?></td><td><?php echo $email;?></td><td><?php echo $phone;?></td><td><?php echo $bloodgroup;?></td><td><input type="submit" value="<?php echo $status ?>" id="block" name="block" style="background-color:#00FF00">
		
		</td>
		</tr></form>
		 <?php
		}
		?>
		</table>
		</div>
		
	</div>
	
	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>
	
</div>
</body>
</html>
