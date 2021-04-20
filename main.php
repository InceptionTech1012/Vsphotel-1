<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>MAIN PAGE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/fontawesome-all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
	
	<style>
		body{
			font-family: 'Courgette', cursive;
			background:#0A2F6B;
		}

		img{
			border-radius:40px;
		}
		
		ul { 
			margin: 0px; 
			padding: 0px; 
			list-style: none; 
		}

		ul li{ 
			float:left; 
			width: 200px; 
			height: 40px; 
			background:black;
			opacity:0.7;
			border-radius:40px;
			font-size:30px;
			color:#fff;
			line-height: 40px; 
			text-align: center; 
			font-size: 30px;
			margin-right:2px; 
			opacity:2px;
		}
		 
		ul li a { 
			text-decoration: none; 
			color:white; 
			display: block; 
		} 

		ul li a:hover { 
		border-radius:40px;
		color:lightblue;
		background-color:green; 
		} 


		ul li ul li { 
		display: none; 
		} 

		ul li:hover ul li { 
		display: block;
		} 



		.gef{
		position:absolute;
		Top:90px;
		left:300px;
		}


		.primary-color{
			color:#fff;
		}

		.info a:hover{
			color:lightblue;
		}


		#header{
			min-height:calc(500vh-80px);
			background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('expl1.jpg');
			background-position:center;
			background-size:cover;
			background-attachment:fixed;
			background-repeat:no-repeat;
			
		}

		.height-90{
			min-height:calc(100vh - 94px);
		}


		.banner h1{
			
			border-top:6px dotted #d3325f;	
			border-bottom:6px dotted #d3325f;
			animation:fromleft;
			animation-duration:4s;
			animation-delay:1s;
			opacity:0;
			animation-fill-mode:forwards;
		}

		@keyframes fromleft {
			0%{
				transform:translatex(-100px);
				opacity:0;
			}
			50%{
				transform:translatex(30px);
			}
			100%{
				transform:translatex(0);
				opacity:1;
			}
		}

		@keyframes fromright {
			0%{
				transform:translatex(100px);
				opacity:0;
			}
			50%{
				transform:translatex(-30px);
			}
			100%{
				transform:translatex(0);
				opacity:1;
			}
		}

		.header-link{
			display:inline-block;
			position:absolute;
			bottom:2%;
			left:50%;
			background:#c9c1ac;
			border-radius:10px;
			transition:all 1s ease;
			animation:frombottom;
			animation-duration:4s;
			animation-iteration-count:infinite;
		}

		.header-link:hover{
			color:#0A2F6B;
		}

		@keyframes frombottom{
			0%{
				transform:translatey(-10px);
			}
			50%{
				transform:translatey(10px);
			}
			100%{
				transform:translatey(-10);
			}
		}
	</style>
</head>
<body>
  <!-- social icons -->
	<div class="container-fluid into p-3" id="top-icons">
		<div class="row">
			<div class="col d-flex justify-content-between align-items-baseline flex-wrap">
				<div class="info p-2">
				<a href="" class="logo">
					<img src="vsplogo.png" width=60 , height=60>
				<a href="https://www.facebook.com/vsp.kitchen.16" class="mr-2 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
				<a href="https://www.instagram.com/_teamvsp_/?hl=en" class="mr-2 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
				<a href="https://twitter.com/kitchenvsp" class="mr-2 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
				
					<h2 class="mr-2 primary-color p-2 text-capitalize">“One cannot think well, love well, sleep well, if one has not dined well.”</h2>
					
					<!-- buttons -->
					<ul>
							<li><a href="explore.html">Explore</a></li>
					</ul>

					<ul> 
							<li><a href="search.html">Search</a></li> 	 
					</ul> 

					<ul>
							<li><a href="cart.html">Cart</a></li>	
					</ul> 

					<ul>
						<li><a>Account</a>
						<ul>
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="payment.html">Payment</a></li> 
						<li><a href="feedback.html">Feedback</a></li> 
						</ul>
						</li>
					</ul>	
					
					<ul>
							<li><a href="welcome.html">Logout</a></li>	
					</ul> 
					
				</div>
			</div>
		</div>
	</div>
	<!-- end of social icon-->
	
	<!--header section-->
	<header id="header">
		<div class="container">
			<div class="row height-90 align-items-center justify-content-center">
				<div class="col" >
					<div class="banner text-center">
						<h1 class="display-1 text-capitalize w-50 mx-auto">
						<small class="primary-color">WELCOME TO VSP's</small > <strong class="primary-color">KITCHEN</strong>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end of header section -->
	
	<!-- jquery -->
	<script src="js/jquery-3.31.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.bundle.min.js"> </script>
	
</body>
</html>