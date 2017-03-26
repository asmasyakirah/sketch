
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img class="navbar-brand" src="../images/sketch_logo.png">
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  	<ul class="nav navbar-nav navbar-right">

				  	<?php

				  	if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) 
				  	{
				  		$page['username'] = $_SESSION['username'];

				  		echo '
				  		<li><a href="home.php">Home</a></li>
				        <li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cars
				        		<span class="caret"></span>
				        	</a>
				          <ul class="dropdown-menu">
				            <li><a href="owner.php">Owner</a></li>
				            <li><a href="renter.php">Renter</a></li>
				            <li><a href="driver.php">Driver</a></li>
				            <li><a href="passenger.php">Passenger</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi, <b>' . $page['username'] . '</b>
				        		<span class="caret"></span>
				        	</a>
				          <ul class="dropdown-menu">
				            <li><a href="profile.php">Profile</a></li>
				            <li><a href="history.php">History</a></li>
				            <li><a href="settings.php">Settings</a></li>
				            <li><a href="logout.php">Log Out</a></li>
				          </ul>
				        </li>';
				  	}
				  	else
				  	{
				  		echo '
				  		<li><a href="index.php">Home</a></li>
				  		<li><a href="contact.php">Contact</a></li>
				        <li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi, <b>' . $page['username'] . '</b>
				        		<span class="caret"></span>
				        	</a>
				          <ul class="dropdown-menu">
				            <li><a href="register.php">Register</a></li>
				            <li><a href="login.php">Log In</a></li>
				          </ul>
				        </li>';
				  	}

				  	?>
				  	</ul>
				</div>
			</div>
		</nav>

