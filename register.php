<?php session_start();
if(!isset($_GET['event_id'])){
    header("Location:demo.php");
}
?>
<html>
    <head>
        <title>Register Page</title>
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
        <br>
        <?php if(isset($_SESSION['participant_register'])){?>
        <div class="container">
            <div class="heading">
                Thank you for registering yourself at our TechFest 2020.
            </div>
        </div>
        <?php }else{?>
        <form action="store.php" method="POST">
            <div class="container">
                <span class="heading">
                    <span class="title">Register Yourself<br></span>Enter only team leader details
                </span>
                <div>
                    <input type="text" name="fname" placeholder="Enter your first name" required>
                </div>
                <div>
                    <input type="text" name="lname" placeholder="Enter your last name" required>
                </div>
                <div>
                    <input type="text" name="dob" placeholder="Enter your birthdate" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                </div>
                <div class="jj">
                    Male<input type="radio" name="gender" value="male" required>
                    Female<input type="radio" name="gender" value="Female" required>
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
                    <input type="text" name="college" placeholder="Enter your college name" required>
                </div>
                <div>
                    <input type="tel" name="mobile" placeholder="Enter your mobile number" required>
                </div>
                <div>
                    <input type="email" name="eid" placeholder="Enter your email id" required>
                </div>
                <div class="title">
                    <br><br>Select Payment method<br><br>
                </div>
                <div class="jj">
                    <input type="radio" name="method" value="UPI"> UPI
                    <input type="radio" name="method" value="Online Banking">Online Banking
                    <input type="radio" name="method" value="wallet">Wallet
                    <input type="radio" name="method" value="dc">Debit/Credit Card
                </div>
                <div class="jj">
                    <input type="checkbox" name="check" value="check">Join our Newsletter to get updated.
                </div>
                <input type="hidden" name="eventid" value="<?php echo $_SESSION['event_id'];?>">
                <div>
                    <input type="submit" name="register" value="Register">
                </div>
            </div>
        </form>
        <?php }?>
        <br><br>
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
					<input type="email" name="Newsletter" placeholder="You will get update via this email" required><br>
					<input type="submit" value="JOIN">
				</div>
			</div>
		</footer>
    </body>
</html>