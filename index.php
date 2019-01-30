<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="A Digital Portfolio">
<meta name="keywords" content="Portfolio">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<head>
	<title>PHP PAGE</title>
</head>
<!--3rd party goes before own css as the css after will overwrite anything-->
<link href="css/lightbox.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/lightbox.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
<!--MAIN CSS-->
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--FONT-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet" type="text/css">
<style>
       .js [data-entrance] { visibility: hidden; }
</style>

<body>
	<?php include 'includes/header.php';
	//this pulls the php file from the folder.
	?>
	
	<?php include 'includes/nav.php';
	//this pulls the php file from the folder.
	?>
	<!--accessibillity features-->
	
	<?php include 'includes/slider.php';
	//this pulls the php file from the folder.
	?>
	<article>
	<!--About Me-->
	<section id="about">
	<!--Panel so that the Scroll Entrance what to target-->
	<div class="panel" data-entrance="fade">
		<h3>About Me</h3>
			<!--Cell used to get the columns-->
			<p class="cell">Hello, my name is Jake Ward.  
			I am 18 years old and a computer fanatic!
			From a young age I have always had a love of computers and gaming.
			So I have always had the dream of working within the computer industry.
			I joined West Cheshire college from leaving school to study Computer Software Development in order to get me started in my chosen career path.
			This has given me a good start to help me be proficient in most IT systems and pieces of software.</p>
			
			<p class="cell">I have expereience of working in a team, both as a team member and as a leader.
			This experience comes from my time as an air cadet at 1074 Ellesmere Port ATC.
			I started as an air cadet at age 13 years old.
			It had always been an ambition of mine to join.
			I was promoted to corporal and then later to sergeant.
			This gave me the opportunity to attend leadership courses and lead the cadets in tasks.
			Whilst an air cadet, I was given the opportunity to re-build the website page and be the IT leader.
			I also took part in the Duke of Edinburgh award and gained my Bronze certificate.
			I am very proud of my achievements during my time in the ATC.</p>
			
			<p class="cell">I currently work as a team member within my role as a Lifeguard/Leisure Attendant at my local leisure centre.
			We work together as a team to ensure that the centre runs smoothly.
			I have a good work ethic, I started my first job at age 13 with a paper round.
			I then went on to be a pool attendant for a childrens swimming class before I was offered my role of Lifeguard.
			So I have gained alot of experience over the last 5 years in customer service.</p>
			
			<p class="cell">I have had the opportunity to take part in work experience.
			At the end of high school, I arranged to work at Chester University IT department for a week over the school holidays.
			I then had the opportunity to go back again for another week during my time at college.
			Then more recently, I completed a week of work experience at Ellesmere Port Catholic High School, in their school IT department.
			Taking part in work experience has given me a chance to see the IT skills I have learned about put into pracitce real life situations.</p>
			
			<p class="cell">When I get the chance, inbetween college and work, I enjoy spending my spare time catching up with Friends, listening to Music, Computer Gaming and using Social Media, mainly Reddit and Twitter.
			Watching movies or watching one of favourite TV programmes is another way for me to relax. I enjoy Formula One racing, NFL, where I support the Arizona Cardinals and eSports, where I watch CSGO and COD.</p>
	
			<img src="images/me.jpg" style="padding-left: 39%">
			<!--Padding at 39% to make the image be in the middle of the screen (on Chrome)-->
				
	</section>
</div>
		
</article>
<!--id is for smoothScroll to know where on the page the it should go to when activated-->
	<div class="section2"  id="contact">
		<div class="panel" data-entrance="from-left">
			<h3>Contact Me</h3>
			<!--Icons like the ones at the top used as the ones at the top go away once the user has scrolled down-->
			<div class="bigSocial">
			
				<a href="mailto:deadlydog1998@gmail.com"><img class="icons", "smoothScroll" src="images/email.svg"></a>
				<a href="https://www.youtube.com/Deadlydog1998"><img class="icons", "smoothScroll"  src="images/youtube.svg"></a>
				<a href="https://www.twitter.com/Deadlydog1998"><img class="icons", "smoothScroll" src="images/twitter.svg"></a>
				<a href="https://www.instagram.com/Deadlydog1998"><img class="icons", "smoothScroll" src="images/instagram.svg"></a>
		
			</div>
		</div>
	</div>
	
	<div class="section3" id="portfolio">
		<div class="panel" data-entrance="from-top" data-entrance-delay="300">
			<h3>Portfolio</h3>
			<!--Class to get the column effect-->
			<div class="portCell">
				<p><a class="docs" href="documents/JakeWardCV.docx" target='_blank' title="CV"><img class="portfolioimg" src="svg/doc.svg"></img>My CV</a></p><!--Links to the correct document and sets the Hover Title.  Says what class to use and the image to be displayed next to the text-->
				<p><a class="docs" href="documents/Composite Image Amended.psd" target='_blank' title="Composite Image"><img class="portfolioimg" src="svg/psd.svg"></img>Composite Image</a></p><!--Links to the correct document and sets the Hover Title.  Says what class to use and the image to be displayed next to the text-->
				<p><a class="docs" href="documents/Own Logo Amended.psd" target='_blank' title="My Own Logo"><img class="portfolioimg" src="svg/psd.svg"></img>My Own Logo</a></p><!--Links to the correct document and sets the Hover Title.  Says what class to use and the image to be displayed next to the text-->
				<p><a class="docs" href="documents/Their Logo v2 Amended.psd" target='_blank' title="Instyle Graphics Logo"><img class="portfolioimg" src="svg/psd.svg"></img>Instyle Graphics Logo</a></p><!--Links to the correct document and sets the Hover Title.  Says what class to use and the image to be displayed next to the text-->
				<p><a class="docs" href="images2/bannerV3.jpg" target='_blank' title="Next Levelism Production Banner"><img class="portfolioimg" src="svg/jpg.svg"></img>Next Levelism Production Banner</a></p><!--Links to the correct document and sets the Hover Title.  Says what class to use and the image to be displayed next to the text-->
				<p><a class="docs" href="images2/Logo.png" target='_blank' title="Next Levelism Productions Logo"><img class="portfolioimg" src="svg/png.svg"></img>Next Levelism Productions Logo</a></p><!--Links to the correct document and sets the Hover Title.  Says what class to use and the image to be displayed next to the text-->
				<p><a class="docs" href="documents/JavaScript.pptx" target='_blank' title="JavaScript"><img class="portfolioimg" src="svg/ppt.svg"></img>JavaScript</a></p>
			</div>
			<!--Second set that is the exact same to show proof of concept-->
			<div class="portCell">
				<p><a class="docs" href="documents/JakeWardCV.docx" target='_blank' title="CV"><img class="portfolioimg" src="svg/doc.svg"></img>My CV</a></p>
				<p><a class="docs" href="documents/Composite Image Amended.psd" target='_blank' title="Composite Image"><img class="portfolioimg" src="svg/psd.svg"></img>Composite Image</a></p>
				<p><a class="docs" href="documents/Own Logo Amended.psd" target='_blank' title="My Own Logo"><img class="portfolioimg" src="svg/psd.svg"></img>My Own Logo</a></p>
				<p><a class="docs" href="documents/Their Logo v2 Amended.psd" target='_blank' title="Instyle Graphics Logo"><img class="portfolioimg" src="svg/psd.svg"></img>Instyle Graphics Logo</a></p>
				<p><a class="docs" href="images2/bannerV3.jpg" target='_blank' title="Next Levelism Production Banner"><img class="portfolioimg" src="svg/jpg.svg"></img>Next Levelism Production Banner</a></p>
				<p><a class="docs" href="images2/Logo.png" target='_blank' title="Next Levelism Productions Logo"><img class="portfolioimg" src="svg/png.svg"></img>Next Levelism Productions Logo</a></p>
				<p><a class="docs" href="documents/JavaScript.pptx" target='_blank' title="JavaScript"><img class="portfolioimg" src="svg/ppt.svg"></img>JavaScript</a></p>
			</div>
			
		</div>
	</div>
		<!--Form-->
		<section>
			<div class="section4" id="register">
				<div class="panel" data-entrance="from-bottom">
					<h3>Register</h3>
						
						<p class="regText"><b>If you don't have a Social Media that is listed above,
						please use the Form below to contact me.</b></p>
						
						<p class="regText"><b>THANK YOU</b><img class="regEmoji" src="svg/smiling.svg"></img></p>
						<!--Start of the Form-->
						<form name="register" onsubmit="return regCheck()" method="POST">
				
							<input type="text" name="firstname" placeholder="First Name"><!--What type of input box, what name iot is for the js to locate it and then what the placerholder test is in the box-->
							<br>
							<br>
							<input type="text" name="lastname" placeholder="Last Name"><!--What type of input box, what name iot is for the js to locate it and then what the placerholder test is in the box-->
							<br>
							<br>
							<input type="date" name="dob" placeholder="D.O.B (DD/MM/YY)"><!--What type of input box, what name iot is for the js to locate it and then what the placerholder test is in the box-->
							<br>
							<br>
							<input type="email" name="email" placeholder="Email"><!--What type of input box, what name iot is for the js to locate it and then what the placerholder test is in the box-->
							<br><!--Break to make it have bigger spaces inbetween the input boxes-->
							<br>
							<input type="text" name="username" placeholder="Username"><!--What type of input box, what name iot is for the js to locate it and then what the placerholder test is in the box-->
							<br>
							<br>
							<input type="password" name="psw" placeholder="Password"><!--What type of input box, what name iot is for the js to locate it and then what the placerholder test is in the box-->
							<br>
							<br>
							<input type="submit" value="Submit">
						
						</form>
						<!--End of Form-->
					<script src="js/regVal.js"></script>
					
					<!--Calls the Validation JS-->
				</div>
					
				
			</section>
	<?php include 'includes/footer.php';
	//this pulls the php file from the folder.
	?>
	
	
	
	<!--Example php to teach me-->
	<!--?php //this is an openeing PHP tag
		
		$welcome = "Welome to my Site!";
		
		echo "Hello World!<br>";
		echo "<br>How are you?<br><br>";
		echo $welcome;
		echo "<br><br>Today is " . date("d/m/y") . "<br>";
		date_default_timezone_set("Europe/London");
		echo "The time is " . date("G:i:s <br>");
		
		//Declare variable
		$time = time();
		//Displays Unix Time
		//echo $time;
		
		$time = date('l-d/m/Y', $time);
		echo $time
	this is a closing PHP tag?-->
</body>
<!--SVG Images:
PNG - http://www.flaticon.com/free-icon/png_136523
JPG - http://www.flaticon.com/free-icon/jpg_136524
PSD - http://www.flaticon.com/free-icon/psd_136535
DOC - http://www.flaticon.com/free-icon/doc_136521
PPT - http://www.flaticon.com/free-icon/ppt_136543
-->
</html>