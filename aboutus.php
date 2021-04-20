<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>About Us </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/fontawesome-all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
	
	<style>
		body{
			font-family: 'Courgette', cursive;
			background-color:#E5E7E9;
		}

		.gef{
		position:absolute;
		Top:90px;
		left:300px;
		}


		.primary-color{
			color:#2B9BBF;
		}

		.info a:hover{
			color:lightblue;
		}


		#header{
			min-height:calc(500vh-80px);
			background-color:#D0D3D4;
			border-top: 6px solid #909497;
		}
		
		.about-img__container{
		position:relative;
		}
		
		.about-img__container::before{
		content:"";
		position:absolute;
		top: -1.5rem;
		left: -1.7rem;
		width:100%;
		height:100%;
		outline:0.5rem solid black;
		z-index: -1;
		transition:all 1s linear;
		}
		
		.about-img__container:hover{
		top:0;
		left:0;
		}

	</style>
</head>
  
<body>
  <!-- social icons -->
	<div class="container-fluid into p-3" id="top-icons">
		<div class="row">
			<div class="col d-flex justify-content-between align-items-baseline flex-wrap">
				<div class="info p-2">
				<a href="https://www.facebook.com/vsp.kitchen.16" class="mr-2 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
				<a href="https://www.instagram.com/_teamvsp_/?hl=en" class="mr-2 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
				<a href="https://twitter.com/kitchenvsp" class="mr-2 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
				
				<h2 class="mr-2 primary-color p-2 text-capitalize"> “One cannot think well, love well, sleep well, if one has not dined well.”</h2>
			
			
			
				</div>
			</div>
		</div>
	</div>
	<!-- end of social icon-->

	<!-- header section-->
	<header id="header">	
		<section class="about py-5" id="about">
			<div class="container">
				<div class="row">
					<div class="col-10 mx-auto col-md-6 my-5">
						<h1 class="text-capitalize">About <strong class="banner-title"> Us</strong></h1>
						<p class="my-4 text-muted w-75"><font size=5 color=#070E64>
						KYA AAPNE KABHI ONLINE FOOD ORDER KIYA HAI???
						YES!! PAR KYA AAPNE EK HI WEBSITE PE ALAG ALAG HOTELS SE ORDER KIYA HAI ???
						NAHI!!
						ISILIYE TEAM VSP AAPKE LIYE LEKE AAYA HAI VSP'S KITCHEN JISME AAPKO MILEGA KONSE BHI HOTEL KA KHANA KAHI BHI KABHI BHI......
						</font>
						</p>
						<a href="explore.php" class="btn btn-outline-secondary text-uppercase">explore</a>
					</div>
						<div class="col-10 mx-auto col-md-6 my-5 align-self-center">
							<div class="about-img__container">
								<img src="abtimg2.jpg" class="img-fluid" alt="" width=650>
							</div>
						</div>
				</div>
			</div>
		</section>	
	</header>
	<!-- end of header section-->
</body>
</html>