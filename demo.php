<?php session_start();?>
<html>
    <head>
		<title>TechFest 2020</title>
		<script src="https://kit.fontawesome.com/35cf7a4781.js" crossorigin="anonymous"></script>
        <link rel='stylesheet' type="text/css" href="css/index.css">
    </head>
    <body>
        <header>
			<div class="header">
                <a href="demo.php" class="logo">TechFest<font color="#ff0066">.</font></a>
				<div class="header-right">
                                    <a href="demo.php#Team" class="an">Team</a>
                                    <a href="demo.php#Sponser" class="an">Sponser</a>
                                    <a href="demo.php#Department" class="an">Department</a>
                                    <a href="demo.php#AboutUs" class="an">About Us</a>
					<a href="#ContactUs" class="an">Contact Us</a>
				</div>
			</div>
		</header>
		<hr>
		<section class="main">
			<span class="mainheading">
				<span class="title">12-15 March, 2020<br></span>TECHFEST 2020
				<span class="title"><br>College Road, Nadiad</span>
			</span>
		</section>
		<hr>
		<section class="main" id="Department">
			<span class="heading">
				<span class="title">Our Departments<br></span>Enrich or Show-Off Your Abilities
			</span>
			<br>
			<div class="grid">
                            <a href="eventlist.php?dept=CE and IT Department" class="an"><div class="box"><i class='fas fa-code fa-5x'></i><br>CE and IT<br> Department</div></a>
                            <a href="eventlist.php?dept=Chemical Department" class="an"><div class="box"><i class='fas fa-bong fa-5x'></i><br>Chemical <br>Department</div></a>
                            <a href="eventlist.php?dept=Civil and Mechanical Department" class="an"><div class="box"><i class='fas fa-tools fa-5x'></i><br>Civil and Mechanical <br>Department</div></a>
                            <a href="eventlist.php?dept=EC and IC Department" class="an"><div class="box"><i class='fas fa-microchip fa-5x'></i><br>EC and IC <br>Department</div></a>

		</section>
		<hr>
		<section class="main" id="Sponser">
			<span class="heading">
				<span class="title">Our Sponser<br></span>Thank you to make this Possible
			</span>
		</section>
		<hr>
		<section class="main" id="Team">
			<span class="heading">
				<span class="title">Our Team<br></span>Defining Creativity is too Hard
			</span>
		</section>
		<hr>
		<section class="main" id="AboutUs">
			<span class="heading">
				<span class="title">About Us<br></span>Something that you should know
			</span>
			<span class="title"></span>
		</section>
		<hr>
		<footer>
			<div class="grid1">
				<div class="items">
                    <a href="demo.php" class="logo">TechFest<font color="#ff0066">.</font></a><br><br>
					<a href="http://twitter.com"><i class='fab fa-twitter-square fa-1.5x'></i></a>
					<a href="http://facebook.com"><i class='fab fa-facebook-square fa-1.5x'></i></a>
					<a href="http://youtube.com"><i class='fab fa-youtube fa-1.5x'></i></a>
					<a href="http://pinterest.com"><i class='fab fa-pinterest-square fa-1.5x'></i></a>
					<a href="http://linkedin.com"><i class='fab fa-linkedin fa-1.5x'></i></a>
					<a href="http://instagram.com"><i class='fab fa-instagram fa-1.5x'></i></a>
				</div>
				<div class="items">
					<span class="title" id="ContactUs">Contact Us<br><br></span>
                    <a href="https://www.google.com/maps/place/DHARMSINH+DESAI+UNIVERSITY/@22.6802426,72.87801,17z/data=!3m1!4b1!4m5!3m4!1s0x395e5adf2c171355:0xe1e974ce083657fb!8m2!3d22.6802377!4d72.8801987">
                        <span class="text"><i
                                class='fas fa-map-marker-alt fa-2x'></i><br>Dharmsinh Desai University,<br>
                            College Road,<br>
                            Nadiad-387001.</span>
                    </a>
					<span class="text"><br><br><i class='fas fa-phone-alt fa-2x'></i><br>+91 9876543210<br><br></span>
					<span class="text"><i class='fas fa-at fa-2x'></i><br>Someone@example.com<br><br><br><br><br></span>
				</div>
				<div class="items">
					<span class="title">Join the Newsletter <br><br></span>
                    <form action="store.php" method="POST">
                        <input type="email" name="newsletter" placeholder="You will get update via this email"
                               required/><br>
                        <input type="submit" value="JOIN" name="join"><br>
                    </form>
                                        <?php if(isset($_SESSION['subscribe'])){echo $_SESSION['subscribe'];unset($_SESSION['subscribe']);}?>
				</div>
			</div>
		</footer>
    </body>
</html>