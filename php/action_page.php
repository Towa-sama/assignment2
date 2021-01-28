<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Petite Treats</title>
		<link rel="stylesheet" href="action_pagestyle.css">
	</head>

	<body>
		<header>
			<img id="logo" src="../images/logo.png" width="70px" height="70px" alt="Logo">
			<nav>
				<ul>
					<li><a href="../index.html"><span class="underline">Home</span></a></li>
					<li><a href="../menu/menu.html"><span class="underline">Menu</span></a></li>
					<li><a href="../specials/specials.html"><span class="underline">Specials</span></a></li>
					<li><a href="../aboutus/about-us.html"><span class="underline">About Us</span></a></li>
					<li><a href="../signup/signup.html"><span class="underline">Sign Up</span></a></li>
				</ul>
			</nav>
		</header>

		<section>
			<h1>Thank you for signing up for the Petite Treats Weekly newsletter.</h1><br>
			<h1>We have added the following information to our files regarding your interests:</h1><br>
			<p>First Name: <span class="red"><?php echo $_POST["fname"]; ?></span><br>
			Last Name: <span class="red"><?php echo $_POST["lname"]; ?></span><br>
			Email: <span class="red"><?php echo $_POST["email"]; ?></span><br>
			Product Interests: <span class="red"><?php echo $_POST["interests"]; ?></span><br>
			Birthday: <span class="red"><?php echo $_POST["birthday"]; ?></span></p>
		</section>

		<footer class="container">
			<div class="line1">
			</div>
			<div class="line2">
			</div>

				<div>
				<ul>
					<li>&copy; 2012 Petite Treats</li>
					<li><a href="https://www.jcu.edu.sg/" style="text-decoration: none; color: black;" target="_blank"><span class="underline">Terms and Conditions</span></a></li>
				</ul>
				</div> 

				<nav>
					<ul>
						<li><a href="../index.html"><span class="underline">Home</span></a></li>
						<li><a href="../menu/menu.html"><span class="underline">Menu</span></a></li>
						<li><a href="../specials/specials.html"><span class="underline">Specials</span></a></li>
						<li><a href="../aboutus/about-us.html"><span class="underline">About Us</span></a></li>
						<li><a href="../signup/signup.html"><span class="underline">Sign Up</span></a></li>
					</ul>
				</nav>

				<div>
					<ul>
						<li><strong>Contacts:</strong> &nbsp;&nbsp;0455 5555 555</li>
						<li><strong>Catering:</strong> &nbsp;&nbsp;0433 3333 333</li>
						<li><strong>Address:</strong> &nbsp;&nbsp;&nbsp;123 Prize Lane, Kirwan, QLD</li>
					</ul>
				</div>
		</footer>
	</body>
</html>

