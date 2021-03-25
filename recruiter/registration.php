
<!DOCTYPE HTML>
<html>
<head>
	<title>Seeking | an Job Portal </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
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
				<li><a href="login.html">Login</a></li>
				<li><a href="register-as.html">Signup</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="contact.html">Contact Us</a></li>
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
<div class="jumbotron">
	<div class="alert alert-success">	
		<?php 

		require_once'../includes/dbconfig.php';

		if(isset($_POST['register']))
		{

			$id=$name=$username=$password=$email=$contact_no=$gender=$company='';

			$id=null;
			$name=$_POST['name'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact_no=$_POST['contact_no'];
			$gender=$_POST['gender'];
			$company=$_POST['company'];
			$img_path = 'profile/'.$_FILES['profile']['name'];

			if($_POST['name']=="")
			{
				$name = "Enter Name";
				header('Refresh:2; register.html');
				echo $name;

			}
			elseif($_POST['username']=="")
			{
				$username = "Enter Username";
				header('Refresh:2; register.html');
				echo $username;

			}
			elseif($_POST['password']=="")
			{
				$password = "Enter Name";
				header('Refresh:2; register.html');
				echo $password;

			}
			elseif($_POST['email']=="")
			{
				$email = "Enter Name";
				header('Refresh:2; register.html');
				echo $email;

			}
			else{

				move_uploaded_file($_FILES['profile']['tmp_name'],'profile/'.$_FILES['profile']['name']);


				$stmt=$db->prepare("insert into `recruiters`(`id`, `name`, `username`, `password`, `email`, `gender`,`contact_no`,`company`, `img_path`) values(?,?,?,?,?,?,?,?,?)");
				$stmt->execute(array($id,$name,$username,$password,$email,$gender,$contact_no,$company,$img_path));
				header('Refresh:2; login.php');
				echo "registered successfully";
			}
		}
		?>
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