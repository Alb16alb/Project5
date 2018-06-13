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
			
			<?php 
			$db = mysqli_connect("localhost", "root","usbw", "albert");
			mysqli_set_charset($db, "utf8");
			$id = $_GET['id'];
			$sql = "SELECT * FROM `shop`  WHERE `id` = $id";
			$result = mysqli_query($db, $sql);
			?>


			<?php 
			( $r = mysqli_fetch_assoc($result) )
			?>	
				<div class="item">
					<div class="title">
						<h1>
							<?php echo $r["title"]; ?>	
							</h1>							
					</div>
					<p>
						<h2 class="h2e">
						<?php echo $r["excerpt"]; ?>
						</h2>	
						<img width="350" height="350" src="<?php echo $r["img_src"]; ?>">

						<h2>Data</h2>

					</p>
					<h2 class="ci">
						<?php echo $r["content"]; ?>
					</h2>

					</div>
					
				<?php 
				$db = mysqli_connect("localhost","root","usbw","albert");
				mysqli_set_charset($db, "utf8");
				$sql = "SELECT * FROM `shop`";
				$result = mysqli_query($db, $sql);
			 	?>

			 	<?php 

			 		$i = 2;
			 		while($i < count($r = mysqli_fetch_assoc($result))) {
			 			echo $i[$r];
			 			$i++;

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