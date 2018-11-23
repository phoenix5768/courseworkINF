<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "", "studassisst");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student assisstant</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Sintony:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">

</head>
<body>
	<!-- header(navigation bar and the title of the project) -->
	<header id="header" class="header">
		<div class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<a href="#">
						<img class="myicon" src="img/icon.png" alt="icon">
						</a>
					</div>
					<div class="col-lg-6">
						<nav>
							<ul class="menu d-flex justify-content-between">
								<li class="menu__item">
									<a href="index.php">
										Home
									</a>
								</li>
								<li class="menu__item">
									<a href="index.php">
										About
									</a>
								</li>
								<li class="menu__item">
									<a href="index.php">
										News
									</a>
								</li>
								<li class="menu__item">
									<a href="index.php">
										Main sources
									</a>
								</li>
								<li class="menu__item">
									<a href="#tt">
										Time-table
									</a>
								</li>
								<li class="menu__item">
									<a href="#footer">
										Contact
									</a>
								</li>
								<!-- <li class="menu__item">
									<a href="#">
										Profile
									</a>
								</li> -->
							</ul>
						</nav>
					</div>
					<div class="col-lg-3">
						<a class="navbar-brand" href="index.php">
							<?php
								if(isset($_SESSION["login"])){
									echo '
										<div class="row">
											<a style="padding-right: 40px; margin-top:-18px" href="profile.php"><h5 class="text-danger">' . $_SESSION["login"] . '</h5></a>
											<a href="logout.php">
												<button style="margin-top: -28px;" class="btn sign btn-warning">
													Logout
												</button>
											</a>
										</div>
									';
								} else{
									echo '
									<a href="login.php">
										<button class="btn sign btn-warning">
											Sign in
										</button>
									</a>
									';
								}
							 ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

<body>
	<!-- section for Personal information -->
  <section style="" id="#pers" class="personalinfo">
    <form id="login-box" method="POST" action="reg.php">
      <div class="left">
        <h1>Personal information</h1>
				<br>
				<br>
					<?php
				if(isset($_SESSION["login"])) {
					echo '
						<div class="persinf">
							<label> <span class="yellow">Name:</span> </label>
							<label>'. $_SESSION["name"] .'</label> <br><br>
							<label> <span class="yellow">Age:</span> </label>
							<label>'. $_SESSION["age"] .'</label> <br><br>
							<label> <span class="yellow">Email:</span> </label>
							<label>'. $_SESSION["email"] .'</label> <br><br>
							<label> <span class="yellow">University:</span> </label>
							<label>'. $_SESSION["university"] .'</label> <br><br>
							<label> <span class="yellow">Course:</span> </label>
							<label>'. $_SESSION["course"] .'</label> <br><br>
							<label> <span class="yellow">Login:</span> </label>
							<label>'. $_SESSION["login"] .'</label>
						</div>
					';
				}
				?>
      </div>
      <div class="right">
       <h1 class="logo"><a href="index.html">Student Assistant</a></h1>
      </div>
    </form>
  </section>


	<!-- section for time-table -->
	<section id="#tt" class="tt">
		<form id="login-box" method="POST" action="reg.php">
			<div class="timetable">
				<h1 style="text-align:center; padding-top: 10px;" class="tt_title">Time-table</h1>
			</div>
		</form>
	</section>

</body>
	<!-- footer -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="https://vk.com/phoenix5768" class="btn btn-lg btn-block omb_btn-vkontakte">
			        <span>Vkontakte</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="https://telegram.org" class="btn btn-lg btn-block omb_btn-telegram">
			        <span>Telegram</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="https://www.instagram.com/batrhan_a/?hl=ru" class="btn btn-lg btn-block omb_btn-instagram">
			        <span>Instagram</span>
		        </a>
	        </div>
		</div>

			<div class="row">
				<div class="col-lg-4">
					<div class="line">

					</div>
				</div>
				<div class="col-lg-4">
					<div class="credits">
						© 2018    Created by Phoenix5768™					</div>
				</div>
				<div class="col-lg-4">
					<div class="line">

					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- <div id="modal2" class="modal2">
		<div class="modal2__overlay">
			<div class="modal2__body">
				Text v okoshke
			</div>
		</div>
	</div>
 -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
