<?php

	$page['title'] = "Register";
	require("../includes/top.php");

	if(isset($_POST['submit']))
	{
		var_dump($_POST);
	}

?>
	<div class="container-fluid col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">

		<form role="form" action="register.php" method="post">

			<div class="col-lg-12 form-group">
	        	<h1>register</h1>
	    	</div>
			
	        <div class="col-lg-12 form-group">
	        	<input class="form-control" type="text" name="uname" placeholder="Username">
	    	</div>
	        <div class="col-lg-12 form-group">
	        	<input class="form-control" type="email" name="email" placeholder="Email">
	    	</div>
			<div class="col-lg-12 form-group">
	        	<input class="form-control" type="password" name="pwd" placeholder="Password">
	    	</div>
			<div class="col-lg-12 form-group">
	        	<input class="form-control" type="password" name="repwd" placeholder="Retype Password">
	    	</div>
			<div class="col-lg-12 form-group">
				<button type="submit" name="submit" class="btn btn-warning btn-block">Submit</button>
	      	</div>
			<div class="col-lg-12 form-group">
				Have an account? <a href="login.php">Log In</a>
	      	</div>

		</form>

	</div><!-- /.container-fluid-->		

<?php

	require("../includes/bottom.php");

?> 
