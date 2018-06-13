<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="main">
		<?php 
			include("header.php");
		 ?>
		<div class="straka">
			<marquee direction="left" bgcolor="#7F1F1F">Welcome to Shop</marquee>
		</div>

		<?php include("menu.php"); ?>

		<div class="content">
			<h1 class = "sh1">Shop</h1>
			
			<?php 
			$db = mysqli_connect("localhost", "root","usbw", "albert");
			$sql = "SELECT * FROM `shop`";
			$result = mysqli_query($db, $sql);
			?>


			<?php 
			while( $r = mysqli_fetch_assoc($result) ){ 
			?>
				<div class="item">
					<div class="title">
						<a href="item.php?id=<?php echo $r["id"]; ?>">
							<?php echo $r["title"]; ?>
						</a>								
					</div>

					<p>
						<img width="150" height="145" src="<?php echo $r["img_src"]; ?>">
						<?php echo $r["excerpt"]; ?>		
					</p>
				</div>
			<?php
			} 
			?>
		</div>

			<?php 
				include("footer.php");
			 ?>
	</div>
</body>
</html>