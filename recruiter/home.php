	<?php
	session_start();  
	if (!isset($_SESSION['admin'])) {
		header('Location: page-not-found.html');
	}
	else{


		require_once'../includes/dbconfig.php';
		$username=$_SESSION['admin'];
		$stmt=$db->prepare("select * from recruiters where username=?");
		$stmt->execute(array($username));
		$result=$stmt->fetch(PDO::FETCH_ASSOC);

		?>
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

			<style>
				.thumbnail .caption {
					background-color: #044F67;
					color: #fff;
					transition: 0.2s linear all;
				}
			</style> 
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
							<li class="active"><a href="home.php">My Home</a></li>
							<li><a href="logout.php">Log out</a></li>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-8">
						<h3>Welcome <i> <?php echo $result['name'];  ?></i></h3>
						<div class="table-responsive">
							<table class="table table-hover" id="recruiterInfo">
								<tr>
									<th><h4>Username:</h4></th>
									<td><?php echo $result['username'];  ?></td>
								</tr>
								<tr>
									<th><h4>Password:</h4></th>
									<td><?php echo $result['password'];  ?></td>
								</tr>
								<tr>
									<th><h4>Email:</h4></th>
									<td><?php echo $result['email'];  ?></td>
								</tr> 
								<tr>
									<th><h4>Contact:</h4></th>
									<td><?php echo $result['contact_no']; ?></td>'
								</tr>
								<tr>
									<th><h4>Gender:</h4></th>
									<td><?php echo $result['gender'];  ?></td>
								</tr>
								
								<tr>
									<th><h4>Company:</h4></th>
									<td><?php echo $result['company'];  ?></td>
								</tr>
							</table>
						</div>
						
					</div>
					<div class="col-md-4">
						<img src="<?php echo $result['img_path'];  ?>" alt="" class="img-responsive img-thumbnail">

					</div>
				</div>	
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="edit-profile.php">
						<div class="thumbnail">
							<div class="caption text-center">
								<span class="fa-stack fa-5x">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-edit fa-stack-1x"></i>
								</span>
								<h4>Edit Profile</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<a href="change-password.php">
							<div class="thumbnail">
								<div class="caption text-center">
									<span class="fa-stack fa-5x">
										<i class="fa fa-square-o fa-stack-2x"></i>
										<i class="fa fa-edit fa-stack-1x"></i>
									</span>
									<h4>Change Password</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="post-job.php">
							<div class="thumbnail">
								<div class="caption text-center">
									<span class="fa-stack fa-5x">
										<i class="fa fa-square-o fa-stack-2x"></i>
										<i class="fa fa-edit fa-stack-1x"></i>
									</span>
									<h4>Post Jobs</h4>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="posted-jobs.php">
							<div class="thumbnail">
								<div class="caption text-center">
									<span class="fa-stack fa-5x">
										<i class="fa fa-square-o fa-stack-2x"></i>
										<i class="fa fa-search fa-stack-1x"></i>
									</span>
									<h4>View Posted Jobs</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="jobseekers.php">
							<div class="thumbnail">
								<div class="caption text-center">
									<span class="fa-stack fa-5x">
										<i class="fa fa-square-o fa-stack-2x"></i>
										<i class="fa fa-users fa-stack-1x"></i>
									</span>
									<h4>View All Job Seekers</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<a href="applicants.php">
								<div class="thumbnail">
									<div class="caption text-center">
										<span class="fa-stack fa-5x">
											<i class="fa fa-square-o fa-stack-2x"></i>
											<i class="fa fa-users fa-stack-1x"></i>
										</span>
										<h4>View Applicants</h4>
									</div>
								</div>
							</div>
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
				<?php } ?>