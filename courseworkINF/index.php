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
									<a href="#home">
										Home
									</a>
								</li>
								<li class="menu__item">
									<a href="#about">
										About
									</a>
								</li>
								<li class="menu__item">
									<a href="#news">
										News
									</a>
								</li>
								<li class="menu__item">
									<a href="#ms">
										Main sources
									</a>
								</li>
								<li class="menu__item">
									<a href="#about">
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
		<div class="mainpage">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<h1 class="title__heading">
								Make your student life
							</h1>
							<p class="title__desc">
								more <span>easier and organized.</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- this section is about the description of the organization -->
	<section id="about" class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="description">
						<h2 class="description__title">
							About us
						</h2>
						<p class="description__text">
							We are the organization, called "Student assistant". Our mission is: <br/>
							*To help students with finding useful and academic sources; <br/>
							*To help students with entertaining(that related to the study); <br/>
							*To provide students with important news about the universities; <br/>
							*To help students with time-managment ( we give opportunities to create your own time-table ). <br/>

						</p>

						<!-- PHP code for readdressing if user signed -->
							<?php
								if(isset($_SESSION["login"])){
									echo '
												<a class="sign cta description__button" href="profile.php"> Create your time-table
											</a>
									';
								} else{
									echo '
									<a class="sign cta description__button" href="#about"> Create your time-table
								</a>
									';
								}
							 ?>
					</div>
				</div>
				<div class="col-lg-3 ">
					<div class="stud-images stud-images__down">
						<img src="img/about1.jpeg" alt="time-managment" class="stud-images__item">
					</div>
					<div class="stud-images">
						<img src="img/about2.jpeg" alt="entertaining" class="stud-images__item">
					</div>
				</div>
				<div class="col-lg-3 stud-images__right">
					<div class="stud-images">
						<img src="img/about3.jpeg" alt="academic source" class="stud-images__item">
					</div>
					<div class="stud-images">
						<img src="img/about4.jpeg" alt="news" class="stud-images__item">
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- for the calling for details -->
	<section id="call" class="call">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="phone d-flex ml-auto mr-auto">
						<div class="phone__text">
							call us now for
							<span class="yellow">details</span>
						</div>
						<div class="phone__digits">
							8-775-527-8575
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- section for news about universities -->
	<section id="news">
		<h2 class="description__title unnews">
			Actual News about <span class="yellow">UNIVERSITIES</span>
		</h2>

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  		<ol class="carousel-indicators">
		    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  		</ol>
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img class="d-block w-100 imgnews" src="img/news1.png" alt="First slide">
		    	</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100 imgnews" src="img/news2.png" alt="Second slide">
		    	</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100 imgnews" src="img/news3.png" alt="Third slide">
		    	</div>
		  	</div>
		  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
	</section>

	<!-- for the calling for details -->
	<section id="call" class="call">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="phone d-flex ml-auto mr-auto">
						<div class="phone__text">
							call us now for
							<span class="yellow">details</span>
						</div>
						<div class="phone__digits">
							8-775-527-8575
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- about entertaining and academic sources -->
	<section id="ms" class="ms">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="ms-title">
						Main sources
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="edu">
						<img src="img/source1.jpeg" alt="vine" class="edu__img">
						<h3 class="edu__title">
							Entertaining
						</h3>
						<br><br>
						<p class="edu__desc for__sources">
							<a href="https://kahoot.it/">Kahoot.it</a> <br>
							<a href="http://mentalfloss.com/">Mentalfloss.com</a> <br>
							<a href="http://sleepyti.me/">Sleepyti.me</a> <br>
							<a href="http://keepmeout.com/">Keepmeout.com</a> <br>
							<a href="http://instructables.com/">Instructables.com</a> <br>
							<a href="http://buyagift.co.uk/">Buyagift.co.uk</a> <br>
							<a href="http://youtube.com/">Youtube.com</a> <br>
							<a href="http://ted.com/">Ted.com</a> <br>
							<a href="http://Geoguessr.com/">Geoguessr.com</a> <br>
						</p>
						<div class="edu__details d-flex">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="edu">
						<img src="img/source2.jpg" alt="vine" class="edu__img">
						<h3 class="edu__title">
							Useful academic sources
						</h3>
						<br><br>
						<p class="edu__desc for__sources">
							<a href="http://khanacademy.org/">Khanacademy.org</a> <br>
							<a href="http://edmodo.com/">Edmodo.com</a> <br>
							<a href="http://coursera.com/">Coursera.com</a> <br>
							<a href="http://edx.org/">Edx.org</a> <br>
							<a href="http://genius.com/">Genius.com</a> <br>
							<a href="http://wikipedia.org/">Wikipedia.org</a> <br>
							<a href="http://bartleby.com/">Bartleby.com</a> <br>
							<a href="http://gutenberg.org/">Gutenberg.org</a> <br>
							<a href="http://ted.com/">Ted.com</a> <br>
						</p>
						<div class="edu__details d-flex">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- section for creating the time-table -->
	<section id="tt">

	</section>


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
