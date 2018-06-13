<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
		<meta charset="utf-8">
		<title>Html</title>
	</head>
	<body>
		<div class="main">
				<?php 
					include("header.php");
				 ?>
				<div class="straka">
					<marquee direction="left" bgcolor="#7F1F1F">Welcome to Html</marquee>
				</div>
				<?php 
					include("menu.php");
				 ?>
			<div class="content">
				<h1 class="htmlglx">HTML</h1>
				<p class="paragraf">Ես այս դասընթացին սովորել եմ թե ինչպես կառուցել կայքէջ HTML-ի օգնությամբ: <br>
				Սովորել եմ որ HTML-ը բախկացած է թեգերից:<br>
				Իսկ թեգերի միջև ընկած է պարունակությունը:<br>
				HTML թեգերը դրանք հատուկ բառեր են<br>որոնք գտնվում են անկյունային փակագծերի ներսում:<br>
				Նաև սովորել եմ որ HTML թեգերը հիմնականում օգտագործվում են զույգերով:<br>
				Առաջին թեգը կոչվում է բացվող թեգ, իսկ երկրորդը փակվող թեգ:
				 </p>
				 <div class="div5">
				 	 <img src="Images/html5.jpg" class="imghtml">
				 </div>

				 <div class="div6">
				 	 <img src="Images/html2.png" class="imghtml1">
				 </div>
				  <div class="div7">
				 	 <img src="Images/stat2.jpg" class="imghtml2">
				 </div>
				 <div class="div8">
				 	 <img src="Images/html3.jpg" class="imghtml3">
				 </div>
				 <div class="div9">
				 	 <img src="Images/html4.jpg" class="imghtml4">
				 </div>
				 <div class="div10">
				 	 <img src="Images/html78.jpg" class="imghtml5">
				 </div>
			</div>
				<?php 
				include("footer.php");
			 ?>
		</div>
	</body>
</html>