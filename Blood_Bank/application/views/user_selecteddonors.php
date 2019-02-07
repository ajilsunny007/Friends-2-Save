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
		
		<div style="margin-top:40px;font-size:18px;color:#000000">
		<h1 align="center" style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:40px;color:#FFFFFF"><b>Selected Donors</b></h1><br>

		<?php
		if(!$userbook)
		{
			echo '<center><h1 style="font-family:Georgia, Times New Roman, Times, serif;font-size:40px;color:#FFFFFF">Donors are not booked...!!</h1></center>';
		}
		else
		{
		?>
		
		<table border="8" align="center" class="table-condensed" style="background-color:#66FFFF;font-family:Georgia, 'Times New Roman', Times, serif;margin-left:5%;margin-right:5%">
		<tr >
		<th>Name</th><th>Address</th><th>Gender</th><th>Email</th><th>Phone</th><th>Blood Group</th><th>Booked Date</th><th>Action</th>
		</tr>	
		<?php 
		foreach($userbook as $row)
		{
		$bid=$row->bid;
		$name=$row->name;
		$address=$row->address;
		$gender=$row->gender;
		$email=$row->email;
		$phone=$row->phone;
		$bloodgroup=$row->bloodgroup;
		$date=$row->date;
		?>
		<form action="<?php echo site_url('controller/bookdonordelete')?>" method="post" name="userlist">
		<tr>
		<input type="hidden" value="<?php echo $bid ?>" id="deleteid" name="deleteid">
		<td><?php echo $name;?></td><td width="15%"><?php echo $address;?></td><td><?php echo $gender;?></td><td><?php echo $email;?></td><td><?php echo $phone;?></td><td><?php echo $bloodgroup;?></td><td><?php echo $date;?></td><td><input type="submit" value="Cancel" id="cancel" name="cancel" style="background-color:#00FF00">
		
		</td>
		</tr></form>
		 <?php
		}
		?>
		</table>
	 <?php
		}
		?>
		</div>
		
	</div>
	
	<footer class="container-fluid " style="background-color:#CE0000;height:50px;padding-top:10px;color:#DEB887;opacity:0.8;">
		<center><i>All rights reserved by ajilsunny007@gmail.com</center></i>
	</footer>
	
</div>
</body>
</html>
