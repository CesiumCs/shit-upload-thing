<html>
	<head>
		<meta charset="utf-8">
		<title>Upload to /i</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		:root {
			background-color: black;
			color: white;
			width: 69%;
			margin: auto;
			text-align: center;
			font-size: 1.2em;
			font-family: sans-serif;
		}
		input[type="submit" i] {
			background-color: #001144; /* dark blue */
			border: none;
			color: white;
			padding: 5px 7px;
			margin:16px;
			text-align: center;
			border-radius: 6px;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		input[type="submit" i]:hover {
			background-color: #002255; /* slightly lighter dark blue */
		}
		input[type="submit" i]:active {
			background-color: #000033; /* slightly darker dark blue */
		}
		</style>
	</head>
	<body>  
		<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="image" />
		<br/>
		<p><input type="checkbox" name="keepname"/>Keep Original Name</p>
		<input type="submit" value="SEND THAT BITCH"/>	
		<p>Sent file: <?php echo $_FILES['image']['name'];?>
		<br>File size: <?php echo $_FILES['image']['size'];?>
		<br>File type: <?php echo $_FILES['image']['type'];?>
		<br>Name on server: <a href="./<?php echo $new_name?>"><?php echo $new_name;?></a></p>
		</form>
	</body>
</html>
