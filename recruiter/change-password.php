	<?php 
	session_start();
	require_once '../includes/dbconfig.php';
	$username = $_SESSION['admin'];

	if (isset($_POST['changepass'])) {

		$username = $_SESSION['admin'];
		$current_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];
		$stmt = $db->prepare("select * from recruiters where username = ?");
		$stmt->execute(array($username));
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$password = $result['password'];

		if ($new_password==$confirm_password) {
			$error="";
			if($current_password==$password)
			{
				$stmt = $db->prepare('update recruiters set password = ? where username = ?');
				$stmt->execute(array($new_password, $username));
				$success = "Password has beed Changed Successfully";
			}
			else
			{
				$fail = "Wrong Old Password";
				
			}
		}
		else
		{
			$error = "New password and confirm password didnt matched";

		}
	}
	?>
	<!DOCTYPE HTML>
	<html>
	<head>
		<title>Seeking | an Job Portal </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<!-- Custom Theme files -->
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href="../css/font-awesome.css" rel="stylesheet"> 
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt=""/></a>
				</div>
				<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
					<ul class="nav navbar-nav">
					</li>
					<li><a href="home.php">Home</a></li>
					<li class="active"><a href="change-password.php">Change Password</a></li>
					<li><a href="recruiters.php">Recruiters</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</nav>
	<div class="banner_1">
		<div class="container">
			<div class="col-md-8">
				<div id="search_wrapper">
					<div id="search_form" class="clearfix">
						<h1>Start your job search</h1>
						<div class="row">
							<form action="job-search.php" method="post">
								<div class="col-md-3">
									<select name="skill" class="form-control input-sm">
										<option value="" disabled="disabled" selected="selected">Skills</option>
										<option value="php">PHP</option>
										<option value="c">BTech</option>
										<option value="Android">Android</option>
										<option value=".NET">.NET</option>
										<option value="java">JAVA</option> 
										<option value="">Other</option> 
									</select>
								</div>
								<div class="col-md-3">
									<select name="location" class="form-control input-sm">
										<option selected="selected" value="" disabled="disabled">Location</option>
										<option value="Lucknow">Lucknow</option>
										<option value="Delhi">Delhi</option>
										<option value="Hyderabad">Hyderabad</option>
										<option value="Punjab">Punjab</option>
										<option value="Gorakhur">Gorakhur</option> 
										<option value="">Other</option> 
									</select>
								</div>
								<div class="col-md-3">
									<select name="experience" class="form-control input-sm">
										<option value="Experience" selected="selected" disabled="disabled">Experience</option>
										<option value="fresher">fresher</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option> 
									</select>
								</div>
								<div class="col-md-2">
									<label class="btn2 btn-2 btn2-1b"><input type="submit" name ="search" value="Find Jobs"></label>	
								</div>

							</form>
						</div>
						<h2 class="title">top Countries &amp; searches</h2>
					</div>
					<div id="city_1" class="clearfix">
						insert image here
					</div>
				</div>
			</div>
		</div> 
	</div>	
	<div class="clearfix"> </div>

	<div class="container">
		<div class="col-md-8 col-md-offset-2 single_right">
			<div class="login-form-section">
				<div class="login-content">
					<form method="post">
						<div class="section-title">
							<h3>Log In to your Account</h3>
						</div>

						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="fa fa-key"></i></span>
								<input type="password" name="old_password"  class="form-control " placeholder="Old Password">
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="fa fa-key"></i></span>
								<input type="password" name="new_password"  class="form-control " placeholder="New Password">
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="fa fa-key"></i></span>
								<input type="password" name="confirm_password"  class="form-control " placeholder="Confirm Password">
							</div>
						</div>

						<div class="forgot">

							<div class="login-para">
								<p><a href="forget_password.php"> Forgot Password? </a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="login-btn">
							<input type="submit" name = "changepass" value="Change Password"> 
						</form>
						<h4 class="text-danger"><?php if(isset($success)){
							echo $success;
						}
						elseif (isset($fail)) {
							echo $fail;
						} 
						elseif (isset($error)) {
							echo $error;
						}
						?></h4>
						<h4>Don,t have an Account? <a href="register.html"> Register Now!</a></h4>
					</div>

				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
	<div class="footer_bottom">	
		<div class="container">
			<div class="col-sm-2">
				<ul class="f_list2">
					<li><a href="jobs.html">Russia Jobs</a></li>
					<li><a href="jobs.html">Australia Jobs</a></li>
					<li><a href="jobs.html">Srilanka Jobs</a></li>
					<li><a href="jobs.html">Poland Jobs</a></li>
				</ul>
			</div>
			<div class="col-sm-2">
				<ul class="f_list2">
					<li><a href="jobs.html">Newzland Jobs</a></li>
					<li><a href="jobs.html">Pakistan Jobs</a></li>
					<li><a href="jobs.html">Srilanka Jobs</a></li>
					<li><a href="jobs.html">Irland Jobs</a></li>
				</ul>
			</div>
			<div class="col-sm-2">
				<ul class="f_list2">
					<li><a href="jobs.html">Canada Jobs</a></li>
					<li><a href="jobs.html">Germany Jobs</a></li>
					<li><a href="jobs.html">China Jobs</a></li>
					<li><a href="jobs.html">Nepal Jobs</a></li>
				</ul>
			</div>
			<div class="col-sm-6 footer_text">
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
			</div>
			<div class="clearfix"> </div>
			<div class="copy">
				<p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</div>
</body>
</html>	