<!DOCTYPE html>


<style>
	body{
		background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOm_HvnO-vD2Gv7VbGN7xkIy0klrrwPYKC8j10MDp-VK86fFbRmw);
	}
	th{
		border-bottom: 1px solid #808080;
		border-top: 1px solid #808080;
		background-color: #f5f5f5;
		padding: 10px;
		padding-top: 4px;
		padding-bottom: 4px;	
	}

	tr{
		border: 1px solid #808080;
	}
	
</style>
<html>
<head>
	<title>User data</title>
</head>
<body>
	<center>
	<h1>Your Information System</h1>

	 
	<p> Thank you, <i><?php echo $_POST["fName"] ?></i> for your perches from our web site </p>
	<br>

		<table>
			<tr>
				<th style="font-weight: normal; border-top: 1px solid #808080;"> Your item colour: </th>
				<th style="font-weight: normal; border-top: 1px solid #808080;"> <?php echo $_POST["colour"] ?> </th>
			</tr>

			<tr>
				<th style="font-weight: normal;"> T-Shirt size: </th>
				<th style="font-weight: normal;"> <?php echo $_POST["size"]; ?> </th>
			</tr>

			<tr>
				<th style="font-weight: normal;">Selected items are: </th>
				<th style="font-weight: normal;">
					<?php 
						if (isset($_POST['cap'])){
							echo $_POST["cap"];
							echo "<br>";
						}

						if (isset($_POST['band'])){
							echo $_POST["band"];
						}

						if (!isset($_POST['cap']) && !isset($_POST['band'])){
							echo "None";
						}
					?> 
				</th>
			</tr>

			<tr>
				<th style="font-weight: normal;">Your items will be sent to: </th>
				<th style="font-weight: normal;"> <?php echo $_POST["ad1"]; ?> 
					<br> <?php echo $_POST["ad2"]; ?>
					<br> <?php echo $_POST["ad3"]; ?>
				</th>
			</tr>
		</table>
		<br>

		<p> Thank you for submitting your comment. We appreciate it. 
			<br>
			You said: <?php echo $_POST["comment"]; ?> 
		</p>
	</center>
</body>
</html>