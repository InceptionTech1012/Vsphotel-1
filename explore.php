<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Explore</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/fontawesome-all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
	
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	
	<style>
		body{
			font-family: 'Courgette', cursive;
			background-color:#E5E7E9 ;
		}

		img{
			border-radius:40px;
		}
		

		.gef{
		position:absolute;
		Top:90px;
		left:270px;
		}


		.primary-color{
			color:black;
		}

		.info a:hover{
			color:lightblue;
		}


		#header{
			min-height:calc(2000vh-80px);
			background-color:#F8F9F9;
			border-width:5px;  
			border-bottom-style:initial;
		}

		.single-name{
			transition:all 0.3 linear;
		}
		
		.single-name:hover{
			box-shadow:0 10px 15px rgb(0,0,0);
		}
		
		.img-container{
			position:relative;
			overflow: hidden;
			cursor:pointer;
		}
		
		.hotel-img{
			transition:all 1s ease-in-out;
		}
		
		.img-container:hover .hotel-img{
			transform: scale(1.2);
		}
		
		.hotel-name{
			font-family: 'Slabo 27px', serif;
		}
		
		.hotel-icon{
			position:absolute;
			bottom:0;
			right:0;
			width:30px;
			height:30px;
			padding:0.75res;
			background:white;
			border-top-left-radius:1res;
			transition:all 1s ease-in-out;
			transform:translate(200% , 200%);
		}
		
		.img-container:hover .hotel-icon{
			transform:translate(0,0);
		}
		
		.footer-title{
			background:black;
			font-size:40px;
		}
		
		.footer-contact{
			background:#E5E7E9;
			color:black;
		}
		
		.footer-icon{
			font-size:20px;
			color:black;
			transition:all 0.4 ease-in-out;
		}
		
		.footer-icon:hover{
			color:#C744EA;
		}
		
	</style>
  </head>
  
  <body><br><br>
  <!-- social icons -->
	<div class="container-fluid into p-3" id="top-icons">
		<div class="row">
			<div class="col d-flex justify-content-between align-items-baseline flex-wrap">
				<div class="info p-2">
					<img src="vsplogo.png" class="logo" width=60 , height=60>
				<h2 class="mr-2 primary-color p-2 text-capitalize">“One cannot think well, love well, sleep well, if one has not dined well.”</h2>					
				<div class="container">
					<ul id="gn-menu" class="gn-menu-main">
						<li><a href="aboutus.php">About Us</a></li>
						<li><a class="codrops-icon codrops-icon-drop" href="login.php"><span>Log Out</span></a></li>
					</ul>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of social icon-->
	
	
	<!-- header section-->
		<header id="header"><br><br>
			<section id="store" class="store py-5">
				<div class="container">
				<!-- tilte -->
					<div class="row">
						<div class="col-10 mx-auto col-sm-6 text-center">
							<h1 class="text-capitalize" ><font color="black" >hotels</font></h1><hr>
						</div>
					</div>
				<!-- end of title -->
				
				
				
				<div class="row hotel-name" id="hotel">
					<!--1st hotel names -->
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart.php" >
									<img src="ho1.jpg" class="card-img-top hotel-img" alt="" width=200 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">RAMDEV RESTAURNT</h5>
									</div>
								</div>
							</div>
						</div>
					
					<!-- hotel names -->
				
					<!--2nd hotel names -->
					
						<div class="col-11 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart1.php" >
									<img src="ho2.jpg" class="card-img-top hotel-img" alt="" width=200 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">HOTEL HERITAGE</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				
				<!--3rd hotel names -->
					
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart2.php" >
									<img src="ho10.jpg" class="card-img-top hotel-img" alt="" width=200 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">Domino's</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				
				<!--4th hotel names -->
					
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel names" data-item="names">
							<div class="card single-name">
								<div class="img-container"><a href="fcart3.php" >
									<img src="mcd.jpg" class="card-img-top hotel-img" alt="" width=200 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">Mc Donals</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				
				<!--5th hotel names -->
					
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart4.php" >
									<img src="ho5.jpg" class="card-img-top hotel-img" alt="" width=200 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">KUBA RESTAURNT</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				
				<!--6th hotel names -->
					
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart5.php" >
									<img src="ho6.jpg" class="card-img-top hotel-img" alt="" width=200 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">JAI MALHAR RESTAURNT</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				
				
				<!--7th hotel names -->
					
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart6.php" >
									<img src="ho8.jpg" class="card-img-top hotel-img" alt="" width=200 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">SAI SAGAR RESTAURNT</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				
				<!--8th hotel names -->
					
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart7.php" >
									<img src="ho9.jpg" class="card-img-top hotel-img" alt="" width=100 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">GOLDEN WOK</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				
				<!--9th hotel names -->
					
						<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 hotel">
							<div class="card single-name">
								<div class="img-container"><a href="fcart8.php" >
									<img src="london.jpg" class="card-img-top hotel-img" alt="" width=100 , height=270></a>
								</div>
								<div class="card-body">
									<div class="card-text d-flex justify-content-between text-capitalize">
										<h5 id="hotel-name" class="hotel-name">THE LONDON SHAKES</h5>
									</div>
								</div>
							</div>
						</div>
					
				<!-- hotel names -->
				</div>
			</div>
			</section>
		</header>
	<!-- end of header section -->
	
	<!-- footer -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 footer-title py-5">
				<h1 class="text-capitalize text-center"><font color=white>VSP KITCHEN</font></h1>
				<div class="footer-icons mt-3 d-flex justify-content-around flex-wrap">
					<a href="https://www.facebook.com/vsp.kitchen.16" class="footer-icons">
						<i class="fab fa-facebook"></i>
					</a>
					<a href="https://www.instagram.com/_teamvsp_/?hl=en" class="footer-icons">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="https://twitter.com/kitchenvsp" class="footer-icons">
						<i class="fab fa-twitter"></i>
					</a>
				</div> 
			</div>

				<div class="col-md-6 footer-contact text-center text-capitalize p-5">
					<h3 class="mb-5">Contact</h3>
					<p class="d-flex flex-wrap">
						<span class="mr-4 footer-icon">
							<i class="fas fa-phone"></i>
						</span>
						<span>
						+123-543-289
						</span>
					</p>
					<p class="d-flex flex-wrap">
						<span class="mr-4 footer-icon">
							<i class="fas fa-envelope"></i>
						</span>
						<span>
						email : kitchenvsp@gmail.com
						</span>
					</p>
				</div>
		</div>
	</div>
	

	<!-- end of footer -->
	
	<!-- jquery -->
	<script src="js/jquery-3.31.min.js"></script>
	
	<!-- bootstrap -->
	<script src="js/bootstrap.bundle.min.js"> </script>
	
	<!-- ripple -->
	<script src="js/jquery.ripples-min.js"></script>
	
	<!-- js -->
	<script src="js/script.js"></script>
	
	<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		
  </body>
</html>