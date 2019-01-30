<footer>
		<div class="panel" data-entrance="fade" data-entrance-delay="500"><!--Delay of Scroll Entrance-->
			
			<div class="name">
				By Jake Ward &copy;
			</div>
			
				<div id=browser>
				<?php
					$browser = $_SERVER['HTTP_USER_AGENT'];
					$ip = $_SERVER['REMOTE_ADDR'];
					echo 'You are currently Using: '.$browser;
					echo '<br><br>Your IP is '.$ip;
				?>
				<br>
				<br>
				Your Screen Res = 
				<script>
					document.write(screen.width+'x'+screen.height);
				</script>
				</div>
		
		</div>
        </footer>
	<!--Where all the JS file locations are located for calling to run-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/scroll-entrance.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/fontSize.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/smoothScroll.js"></script>
	<script>
	 $('.slider').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  adaptiveHeight: true,
	  arrows: true,
	});

	</script>