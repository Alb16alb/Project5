<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
		<meta charset="utf-8">
		<title>About</title>
	</head>
	<body>
		<div class="main">
				<?php 
					include("header.php");
				 ?>
				<div class="straka">
					<marquee direction="left" bgcolor="#7F1F1F">Welcome to About</marquee>
				</div>
				<?php 
					include("menu.php");
				 ?>
			<div class="content">
				<h1 class="hkarev">About Me</h1>
				<div class="divnkar">
					<img src="Images/nkart.jpg" class="imglk">
				</div>
				<div class="ulo">
					<ul>
						<li>Name: Ալբերտ</li>
						<li>Last Name: Տեր-Անանյան</li>
						<li>Work: Microsoft Company</li>
						<li>Education school: Մ. Աբեղյանի անվան դպրոց</li>
						<li>Education: Tumo</li>
					</ul>
				</div>
				<p class="paragraf45">Ես ծնվել եմ Երևանում 2001թ.-ի նոյեմբերի 14-ին:<br>
				 Այժմ 16 տարեկան եմ:<br>
				 Ընդունվել եմ դպրոց 2008թ.-ին<br>այժմ սովորում եմ Մ. Աբեղյանի անվան դպրոցում  10-րդ դասարանում<br>
				 Թումո կենտրոն հաճախում եմ 2014թ.-ի մայիսի 21-ից <br>
				 Ազատ ժամանակ սիրում եմ զբաղվել համակարգչով:</p>

				 <div class="tumo">
				 	<img src="Images/tumo.jpg" class="tumo1">
				 </div>
				</div>
				<?php 
				include("footer.php");
			 ?>
		</div>
	</body>
</html>