<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="header">
			ADMINISTRATION
		</div>		
		<div class="container">
			<div class="form">
				<form action="action.php" method="post" enctype="multipart/form-data">
					<label for="title">Title</label><br>
					<input type="text" name="title" id="title"> <br><br>

					<label for="excerpt">Excerpt</label><br>
					<textarea name="excerpt" id="excerpt" rows="6" cols="46"></textarea><br><br>

					<label for="content">Content</label><br>
					<textarea name="content" id="content" rows="10" cols="46"></textarea><br><br>

					<input type="file" name="image"><br><br>

					<input type="submit" name="add">
				</form>
			</div>

			<div class="list">
				<?php 
				include("shop_list.php"); 
				?>
			</div>			
		</div>
	</div>
</body>
</html>