<?php
session_start();
    $r = array();
    $dept = null;
    try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=hammer','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if(isset($_POST['username']) && isset($_POST['password'])){
            $query = $dbhandler->prepare("select * from dbapp_login where username = ? and password = ?");
            $query->execute(array($_POST['username'],$_POST['password']));
            $count = $query->rowcount();
            if($count == 0 || !isset($_SESSION['login'])){
                header("Location: login.php");
            }
            else{
                $_SESSION['login'] = true;
            }
        }
        else{
            echo "nothing";
        }
    }
    catch(PDOException $e){
            echo $e->getMessage();
            die();
    }
?>
<html>
<head>
	<script src="https://kit.fontawesome.com/35cf7a4781.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' type="text/css" href="css/index.css">
	<meta charset="utf-8">
	<title>Register a Event</title>
</head>

<body>
	<header>
		<div class="header">
			<a href="demo.html" class="logo">TechFest<font color="#ff0066">.</font></a>
			<div class="header-right">
				<a href="demo.html#Team" class="an">Team</a>
				<a href="demo.html#Sponser" class="an">Sponser</a>
				<a href="demo.html#Department" class="an">Department</a>
				<a href="demo.html#AboutUs" class="an">About Us</a>
				<a href="#ContactUs" class="an">Contact Us</a>
			</div>
		</div>
	</header>
	<hr>
        <form action="intermediate.php?name=registerevent" method="POST">
		<div class="container">
			<div class="title">
				<br><br>Register a New Event<br><br>
			</div>
			<div>
                            <select name="dept" aria-placeholder="Select Department" required>
					<option name="" disabled selected>Select Department</option>
					<option name="CE and IT Department" value="CE and IT Department">CE and IT Department</option>
					<option name="Chemical Department" value="Chemical Department">Chemical Department</option>
					<option name="Civil and Mechanical Department" value="Civil and Mechanical Department">Civil and Mechanical Department</option>
					<option name="EC and IC Department" value="EC and IC Department">EC and IC Department</option>
				</select>
			</div>
			<div>
				<input type="text" placeholder="Enter event name" name="event-name"required>
			</div>
			<div> 
				<textarea placeholder="Enter problem statement for your event" name="pblmstmt" required></textarea>
			</div>
			<div>
                            <input type="text" name="eventdate" placeholder="Enter event date and time" onfocus="(this.type='datetime-local')" onblur="(this.type='text')" required>
			</div>
			<div>
				<input type="text" placeholder="Enter number of people required for this event" name="requiredppl" required>
			</div>
			<div>
                            <input type="text" placeholder="Enter amount of fees" name="fees" required>
			</div>
                        <div>
                            <input type="text" name="img" placeholder="Enter suitable image for event" onfocus="(this.type='file')" onblur="(this.type='text')" required>
			</div>
			<div>
				<textarea placeholder="Enter rules with bullentin for event (e.g. 1. some rule 2.some rule)" name="rules" required></textarea>
			</div>
			<div>
				<input type="submit" value="ADD"><br><br><br>
			</div>
		</div>
	</form>
	<hr>
	<footer>
		<div class="grid1">
			<div class="items">
				<a href="index.html" class="logo">TechFest<font color="#ff0066">.</font></a><br><br>
				<a href="http://twitter.com"><i class='fab fa-twitter-square fa-1.5x'></i></a>
				<a href="http://facebook.com"><i class='fab fa-facebook-square fa-1.5x'></i></a>
				<a href="http://youtube.com"><i class='fab fa-youtube fa-1.5x'></i></a>
				<a href="http://pinterest.com"><i class='fab fa-pinterest-square fa-1.5x'></i></a>
				<a href="http://linkedin.com"><i class='fab fa-linkedin fa-1.5x'></i></a>
				<a href="http://instagram.com"><i class='fab fa-instagram fa-1.5x'></i></a>
			</div>
			<div class="items">
				<span class="title" id="ContactUs">Contact Us<br><br></span>
				<span class="text"><i class='fas fa-map-marker-alt fa-2x'></i><br>Dharmsinh Desai University,<br>
					College Road,<br>
					Nadiad-387001.</span>
				<span class="text"><br><br><i class='fas fa-phone-alt fa-2x'></i><br>+91 9876543210<br><br></span>
				<span class="text"><i class='fas fa-at fa-2x'></i><br>Someone@example.com<br><br><br><br><br></span>
			</div>
			<div class="items">
				<span class="title">Join the Newsletter <br><br></span>
				<input type="email" name="Newsletter" placeholder="You will get update via this email" required><br>
				<input type="submit" value="JOIN">
			</div>
		</div>
	</footer>
	
</body>
</html>
