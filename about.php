<?php
   include('Panel/function.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 	
 	<!-- slick slider link start -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- slick slider link end -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
body{
	overflow-x: hidden;
}

.bg_ready_to{
	background-image: url('img/bg-01.jpg');
	background-size: cover;
	height: 382px;
	background-attachment: fixed;
}
.bg-quality{
	background-image: url('img/bg-shape-01.png');
	background-repeat: no-repeat;
	background-size: cover;

}


.zoom-in-zoom-out-img {
  /*margin: 24px;
  width: 50px;
  height: 50px;*/
/*  background: green;*/
  animation: zoom-in-zoom-out 2s ease-in-out infinite;
}

@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.2, 1.2);
  }
  100% {
    transform: scale(1, 1);
  }
}
.who-img{
	width: 100%;
	border-top-left-radius: 330px;
	border-top-right-radius: 330px;

}

/*team section start*/

.bg-team{
	background-image: url('img/bg-shape-10.png');
	background-repeat: no-repeat;
}

.team-cont{
	margin-top: 230px;
	z-index: -1;

}

.team-member{
	margin-top: -200px;
	z-index: 1;
	
}
.share{
	transform: translatey(-48px);
/*	margin-left: 285px;*/
margin-left: 80%;
}
/*team section end*/
.bg-explore-about{
		background-image: url('img/bg-shape-01.png');
	background-repeat: no-repeat;
}


/*progress css start */
.whoo{
	border-top-left-radius: 330px;
	border-top-right-radius: 330px;
	width: 560px;
	height: 700px;
}


.progress {
    width: 150px;
    height: 150px;
    font-size: 30px;
    color: black;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    background: white;
    text-align: center;
    line-height: 200px;
    margin: 20px
}

.progress::after {content: "%";}

.progress .title {position: relative;z-index: 100;}

.progress .overlay {
    width: 50%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background-color: white
}

.progress .left, .progress .right {
    width: 50%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    border: 10px solid green;
    border-radius: 100px 0px 0px 100px;
    border-right: 0;
    transform-origin: right;
}

.progress .left {animation: load1 1s linear forwards;}

.progress:nth-of-type(2) .right, .progress:nth-of-type(3) .right {animation: load2 .5s linear forwards 1s;}

.progress:last-of-type .right, .progress:first-of-type .right {animation: load3 .8s linear forwards 1s;}

@keyframes load1 {
    0% {transform: rotate(0deg);}

    100% {transform: rotate(180deg);}
}

@keyframes load2 {
    0% {z-index: 100;transform: rotate(180deg);}

    100% {z-index: 100;transform: rotate(270deg);}
}

@keyframes load3 {
    0% {z-index: 100;transform: rotate(180deg);}

    100% {
        z-index: 100;transform: rotate(315deg);}
}
.bar{
	margin-left: 100px;
}



/*progress css end */
</style>
<body>
	<!-- header section start -->
<?php include('include/header.php'); ?>
<!-- header section end -->

<!-- first banner section started -->
		<section class="" style="">
			<div id="demo" class="carousel slide " data-bs-ride="carousel">
		  <!-- The slideshow/carousel -->
		  <div class="carousel-inner bann">
			<div class="carousel-item active">
			 <div class="gallary-banner-box1 zoom">
			 	<div class="gallary-content ms-5">
				 	<div class="display-5 text-white mt-5 pt-5 fw-bold">About</div>
				 	<p class="text-white text-bold fs-5">People Don’t Take, Trips Take People.</p>
				</div>
			</div>
			
			</div>
			<div class="carousel-item ">
			 <div class="gallary-banner-box2 zoom">
			 	<div class="gallary-content ms-5">
				 	<div class="display-5 text-white mt-5 pt-5 fw-bold">About</div>
				 	<p class="text-white text-bold fs-5">People Don’t Take, Trips Take People.</p>
				</div>
			</div>
			</div>
			<!-- <div class="carousel-item">
			  <div class="gallary-banner-box2 zoom">
				 
			  </div>
			</div> -->
			
		  </div>
		  
		  <!-- Left and right controls/icons -->
		  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon   bg-dark rounded-2 "></span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon bg-dark rounded-2 "></span>
		  </button>
	</div>
</section>
<!-- first banner section end -->
<!-- explore gowild section start -->

<section>
	<div class="container-fluid my-5 py-5 bg-explore-about">
		<div class="row">
			<div class="col-md-5 ms-4">
				<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold"> Who we are</button>
				<h1 class="fw-bold display-5 my-3">Explore GoWilds Real Adventure & Travels</h1>
				<p class="text-secondary my-3">Sit amet consectetur integer tincidunt sceleries noda lesry volutpat neque fermentum malesuada scelequecy leocras odio blandit rhoncus eues feugiat.</p>
				<div class="d-flex mt-4">
					<div>
						<img src="img/travel (4).png" height="55px" width="55px">
					</div>
					<div class="ms-3">
						<div class="fw-bold fs-5">Protect Your Life</div>
						<p class="text-secondary">We're here for look even you from start to finish.</p>
					</div>
				</div>

				<div class="d-flex mt-3">
					<div>
						<img src="img/telephone-call.png" height="55px" width="55px">
					</div>
					<div class="ms-3">
						
						<div class="text-secondaryt">Cell expert</div>
						<p class="fw-bold">+92 (03) 68-090</p>
					</div>
					<div class="ms-3">
						<button class="py-3 px-4 rounded-3 bg-color fw-bold text-white border-0">Discover More</button>
					</div>
				</div>
			</div>
				<!-- start  -->
			<div class="col-md-3 mt-5">
							<div class="bg-white rounded-3 p-3 mb-3 shadow cursor-pointer">
								<img src="img/1.png" height="100px" width="100px">
								<h3>Tent Camping</h3>
								<p class="text-secondary  mt-2">sit ametconsectetur intege<br>tincidunt sclerirs malesuada <br>sceleis massa</p><br><br><br>
							</div>

							<div class="bg-white rounded-3 p-3 mb-3 mt-5 shadow cursor-pointer">
								<img src="img/3.png" height="100px" width="100px">
								<h3>Fishing & boat</h3>
								<p class="text-secondary mt-2">sit ametconsectetur intege<br>tincidunt sclerirs malesuada <br>sceleis massa</p><br><br>
							</div>
						</div>

						<div class="col-md-3 ms-5 mt-5">
							<div class="bg-white rounded-3 p-3 mb-3 shadow cursor-pointer">
								<img src="img/2.png" height="100px" width="100px">
								<h3>Mountain Biking</h3>
								<p class="text-secondary mt-2">sit ametconsectetur intege<br>tincidunt sclerirs malesuada <br>sceleis massa</p><br>
							</div>

							<div class="bg-white rounded-3 p-3 mb-3 mt-5 shadow cursor-pointer">
								<img src="img/4.png" height="100px" width="100px">
								<h3>Adventure Climbing</h3>
								<p class="text-secondary mt-2">sit ametconsectetur intege<br>tincidunt sclerirs malesuada <br>sceleis massa</p><br><br>
							</div>
						</div>
				<!-- end -->
		</div>
	</div>
</section>

<!-- explore gowild section end -->

<!-- ready to travel section started -->

<section class="" style="margin-top: -15%;">
	<div class="container-fluid bg-ready ">
		<div class="row pt-5 mt-5">
			<div class="col-md-7 mb-5 pb-5">
				<div class="play-btn-box">
					<div class="wrapper">
					  <div class="video-main">
					    <div class="promo-video">
					      <div class="waves-block">
					        <div class="waves wave-1"></div>
					        <div class="waves wave-2"></div>
					        <div class="waves wave-3"></div>
					      </div>
					    </div>
					    <a href="https://www.youtube.com/watch?v=DWuveNWHnNI" class="video video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
					  </div>
					</div>
				</div>
				<div>gh</div>
				<p class="p-2 ms-4 fs-6 text-bold are-ready rounded-3 d-inline-block"> Are you ready to travel? </p>
				<h1 class="fw-bold display-5 ms-4 text-white">Ready to travel with real adventure & enjoy natural</h1>
				<button style="background-color: #63ab45;" class="btn rounded-3 pt-3 pb-3 ps-4 mt-4 ms-4 mb-5 pe-4 text-white fw-bold">Check Availability</button>
			</div>
			<div class="col-md-5 ">
				<div class="row mt-5 pt-5">
					<div class="col-md-6">
						<div class="ready-box-icon  rounded-3">
							<div class=" rounded-3  ready-container-icon text-white">
							<div class="deer-box-ready rounded-3  ">
								<div class="text-align-center justify-content-center d-flex">
									<img class="deerimg text-center" src="img/deer.png" >
								</div>
								<h5 class="text-white  fw-bold mt-3 text-center">Wildlife<br>Tours</h5>
							</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="ready-box-icon  rounded-3">
							<div class=" rounded-3  ready-container-icon text-white">
							<div class="deer-box-ready rounded-3  ">
								<div class="text-align-center justify-content-center d-flex">
									<img class="deerimg text-center" src="img/paragliding.png" >
								</div>
								<h5 class="text-white  fw-bold mt-3 text-center">Paragliding<br>Tours</h5>
							</div>
							</div>
						</div>
					</div>

					<div class="col-md-6" style="margin-top: 230px">
						<div class="ready-box-icon  rounded-3">
							<div class=" rounded-3  ready-container-icon text-white">
							<div class="deer-box-ready rounded-3  ">
								<div class="text-align-center justify-content-center d-flex">
									<img class="deerimg text-center" src="img/goal.png" >
								</div>
								<h5 class="text-white  fw-bold mt-3 text-center">Adventure<br>Tours</h5>
							</div>
							</div>
						</div>
					</div>

					<div class="col-md-6" style="margin-top: 230px">
						<div class="ready-box-icon  rounded-3">
							<div class=" rounded-3  ready-container-icon text-white">
							<div class="deer-box-ready rounded-3  ">
								<div class="text-align-center justify-content-center d-flex">
									<img class="deerimg text-center" src="img/hang-gliding.png" >
								</div>
								<h5 class="text-white  fw-bold mt-3 text-center">Hang Gliding<br>Tours</h5>
							</div>
							</div>
						</div>
					</div>
 				</div>
			</div>
		</div>
	</div>
</section>


<!-- ready to travel section end -->

<!-- who we are greate section started -->

<section>
	<div class="container-fluid my-5 py-5">
		<div class="row">
			<div class="col-md-6">
				<div class="mx-4 pe-5">
				<img src="img/image-07.jpg" class="who-img" >
			</div>
			</div>
			<div class="col-md-6 pe-5">
				<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold"> Who we are</button>
				<p class="fw-bold display-5 mt-3">Great opportunity for adventure & travels</p>
				<div class="text-secondary text-bold fs-5 my-4">
					Sit amet consectetur velit integer tincidunt sceleries nodalesry volutpat neque fermentum malesuada sceleris quecy massa lacus ultrices eget leo cras odio blandit rhoncus eues feugiat.
				</div>
				<!-- start -->
					<div>
								<div class="bg-white rounded-4 shadow p-3 mt-5">
							<div class="d-flex">
							   		<div class="progress ms-5">
						            <span class="title timer text-center" data-from="0" data-to="50" data-speed="1800"><p class="ms-5">80</p></span>
						            <div class="overlay"></div>
						            <div class="left"></div>
						            <div class="right"></div>

						        </div>
						        <!-- <p class="text-secondary mt-5 pt-5 ">|</p> -->
						        <div class="progress bar ">
						            <span class="title timer text-center" data-from="0" data-to="50" data-speed="1800"><p class="ms-5">80</p></span>
						            <div class="overlay"></div>
						            <div class="left"></div>
						            <div class="right"></div>
						        </div>
       						</div>
       						<div class="d-flex">
       						 <div><p class="ms-5 text-bold mt-2 fs-5 ps-4">Saticfied Clients</p></div>
       						 <div><p class=" text-bold mt-2 bar fs-5 ps-5">Success Rate</p></div>
        					</div>
       
						</div>
					</div>
				<!-- end -->
			</div>
		</div>
	</div>
</section>
<!-- who we are greate section end -->
<!-- team member section started -->
<section>
	<div class="container-fluid my-5 py-5 bg-team bg-light">
		<div class="row">
			<div class="d-flex justify-content-center">
				<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Team members</button>
			</div>
			<h1 class="text-center fw-bold display-4 py-4">We’ve Expert Team<br> Members Meet With Team</h1>
			<div>
				<div class="slider-3 ">
							<div class="col-md-3 mb-5 cursor-pointer">
								<div class="bg-white rounded-3 border border-3 shadow p-3 team-cont mx-4 ">
									<img src="img/team-1.jpg" height="350px" width="320px" class="ms-3 rounded-3 team-member">
									<button class="btn  btn-lg share" style="background-color: #63ab45;"><i class="fa fa-share-alt text-white " aria-hidden="true"></i></button>
									<h5 class="fw-bold text-center "> name</h5>
									<p class="text-secondary text-center">Consultant</p>
								</div>
							</div>

							<div class="col-md-3 mb-5 ">
								<div class="bg-white rounded-3  border border-3 shadow p-3 team-cont mx-4">
									<img src="img/team-2.jpg" height="350px" width="320px" class="ms-3 rounded-3 team-member">
									<button class="btn btn-lg share" style="background-color: #63ab45;"><i class="fa fa-share-alt text-white" aria-hidden="true"></i></button>
									<h5 class="fw-bold text-center "> name</h5>
									<p class="text-secondary text-center">Consultant</p>
								</div>
							</div>

							<div class="col-md-3 mb-5 ">
								<div class="bg-white rounded-3 shadow p-3 team-cont mx-4 border border-3">
									<img src="img/team-3.jpg" height="350px" width="320px" class="ms-3 rounded-3 team-member">
									<button class="btn btn-lg share" style="background-color: #63ab45;"><i class="fa fa-share-alt text-white" aria-hidden="true"></i></button>
									<h5 class="fw-bold text-center "> name</h5>
									<p class="text-secondary text-center">Consultant</p>
								</div>
							</div>

						</div>
			</div>
		</div>
	</div>
</section>

<!-- team member section end -->

<!-- greate opportunity section started -->

<section>
	<div class="container-fluid py-5 my-5">
		<div class="row">
			<div class="col-md-6 ">
				<div class="ms-4">
					<img src="img/about_img.PNG" width="580px">
				</div>
			</div>
			<div class="col-md-6 px-5">
				<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold"> Who we are</button>
				<p class="fw-bold display-5 mt-3">Great opportunity for adventure & travels</p>
				<div class="d-flex mt-5">
					<div class="mt-3 me-4 ">
						<img src="img/checkflower.PNG">
					</div>
					<div>
						<p class="bg-white rounded-circle p-3 shadow me-4">
							<img src="img/helmet.png" height="40px" width="40px">
						</p>
					</div>
					<div>
						<p class="fw-bold fs-5 lh-sm">Safety first always</p>
						<p class="text-secondary text-bold fs-6 lh-sm">It's necessary to remember Safety1st because it can ultimately save lives</p>
					</div>
				</div>

				<div class="d-flex mt-4">
					<div class="mt-3 me-4 ">
						<img src="img/checkflower.PNG">
					</div>
					<div>
						<p class="bg-white rounded-circle p-3 shadow me-4">
							<img src="img/best-price.png" height="40px" width="40px">
						</p>
					</div>
					<div>
						<p class="fw-bold fs-5 lh-sm">Low price & friendly</p>
						<p class="text-secondary text-bold fs-6 lh-sm">The selling price is how much a buyer pays for a product or service</p>
					</div>
				</div>

				<div class="d-flex mt-4">
					<div class="mt-3 me-4 ">
						<img src="img/checkflower.PNG">
					</div>
					<div>
						<p class="bg-white rounded-circle p-3 shadow me-4">
							<img src="img/travel.png" height="40px" width="40px">
						</p>
					</div>
					<div>
						<p class="fw-bold fs-5 lh-sm">Trusted travel guide</p>
						<p class="text-secondary text-bold fs-6 lh-sm">a book of information about a place designed for the use of visitors or tourists</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- greate opportunity section end -->
<!-- ready to travel section start -->
<section>
	<div class="container-fluid my-5">
		<div class="row bg_ready_to">
			<div class="col-md-8">
				<h1 class="ms-4 display-4 text-white mt-5 pt-5 fw-bold">Ready to travel with real adventure and enjoy natural</h1>
			</div>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-2">
				<div class="pt-5 mt-4">
				<div class="play-btn-box pt-5">
					<div class="wrapper">
					  <div class="video-main">
					    <div class="promo-video">
					      <div class="waves-block">
					        <div class="waves wave-1"></div>
					        <div class="waves wave-2"></div>
					        <div class="waves wave-3"></div>
					      </div>
					    </div>
					    <a href="https://www.youtube.com/watch?v=DWuveNWHnNI" class="video video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
					  </div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ready to travel section end -->
<!-- quality services section started -->
<section>
	<div class="container-fluid py-5 my-5 bg-quality">
		<div class="row">
			<div class="col-md-6">
				<img src="img/icon-testimonial.png" class="m-4">
			</div>
			<div class="col-md-6">
				<div class="multiple-items">
				<div>
					<div class="d-flex">
						<div class="me-5">
							<img src="img/quote (2).png" width="88px" height="88px">
						</div>
						<div>
							<h4 class="fw-bold mt-2">Quality Services</h4>
							<p>
								<i class="fa-solid fa-star text-color me-1"></i>
								<i class="fa-solid fa-star text-color me-1"></i>
								<i class="fa-solid fa-star text-color me-1"></i>
								<i class="fa-solid fa-star text-color me-1"></i>
								<i class="fa-solid fa-star text-color me-1"></i>
							</p>

						</div>
					</div>
					<p class="text-secondary my-4 lh-lg fs-5">To take trivial example which of ever undertakes laborious physical exercise, except to obtain some advantage from but who has any right to find fault with man who chooses to enjoy. </p>
					<hr class="bg-secondary">
					<div class="d-flex">
						<div class="me-3">
							<img src="img/testimonial.jpg" class="rounded-circle" height="88px" width="88px">
						</div>
						<div>
							<h5 class="fw-bold mt-2">Cristine Eve</h5>
							<p class="text-secondary text-bold">
								Founder & CEO
							</p>

						</div>
					</div>
				</div>
				
				</div>
			</div>
		</div>
		<hr class="text-secondary">
	<!-- envato section started -->

	<div class="row px-5 pt-5">
		<div>
			<div class="multiple-items-2">
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
				<div class="col-md-2 ">
					<div class="bg-light py-4 m-4 d-flex justify-content-center rounded-3">
						<img src="img/brand.png" class="zoom-in-zoom-out-img" width="123px">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- envato section end -->
	</div>
</section>
<!-- quality services section end -->

<!-- descovery land section start -->
<section >
	<div class="container-fluid  ">
		<div class="row">
			<div class="mt-5 descovery-sec">
			<div class="slider-2 ">
				<?php 
				// include('Panel/function.php');
				$fetch_model_img = tour_view();
				foreach ($fetch_model_img as  $value_model_img) {
					$value_model_img_main = explode(",", $value_model_img['tour_photo']);
					foreach ($value_model_img_main as  $value_model_img_view) {
						
					}
				

				?>
				<div class="col-md-3">
					<div class="descovery-box">
						<img id="<?php echo $value_model_img['id']; ?>-img"  class="rounded-3 descovery-img" src="Panel/img/<?php echo $value_model_img_view; ?>" height="257px" width="240px">
						<div class="descovery-box-i">
							<div class="text-align-center justify-content-center d-flex">
								<div>
								<!-- model btn -->
								  <button type="button" data-id="<?php echo $value_model_img['id']; ?>" class="pop btn border-0 mt-5 rounded-circle p-3 text-white" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color: #f7921e;" ><i class="fa-solid fa-plus fw-bolder fa-lg"></i></button>
								  <!-- modal btn -->
								</div>
							</div>
							<h5 class="fw-bold mt-3 text-white text-center">Discovery Island</h5>
							<p class="text-bold text-white text-center"> ADVENTURE</p>
						</div>
					</div>
				</div>
			<?php } ?>
				
				
			</div>
			</div>
		</div>
	</div>
</section>
<!-- descovery land section start -->












<!-- footer section start -->
<?php include('include/footer.php'); ?>
<!-- footer section end -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	

<script type="text/javascript">

// pop up js
           $(document).on("click", ".pop", function (e) {
                  	e.preventDefault();
                       var myBookId = $(this).data('id');
                       console.log(myBookId);
                        var a = $('#'+myBookId+'-img').attr('src');
                  
                        console.log(myBookId+'-img');
                          	 // $("#im").html(a);
                          document.getElementById("im").src=a;
                   
                  });







  $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1
});



  $('.multiple-items-2').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1
});



  $('.slider-2').slick({
  // dots: true,
  infinite: true,
  speed: 300,
  // autoplay:true,
  autoplaySpeed: 1000,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.slider-3').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});  
</script>



								  <!-- The Modal -->
      <div class="modal" id="myModal">
         <div class="modal-dialog" >
            <div class="modal-content border-0 ms-5" style="background-color: transparent;">
               <!-- Modal Header -->
               <!-- <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>	 -->								
               <!-- Modal body -->
               <div class="modal-body "  >
                  <img id="im" class="rounded-3" src="" height="450px" width="100%">
               </div>
               <!-- Modal footer -->
               <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div> -->									
            </div>
         </div>
      </div>
      <!-- modal end -->

</body>
</html>