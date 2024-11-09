<?php
include('Panel/function.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking</title>
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
.tour-multi-img{
	height: 296px;
	width: 100%;
}
.tour-multi-img-box{
height: 296px;
}
</style>
<body>
<?php
include('include/header.php'); ?>


<!-- first banner section started -->
<section >
	<div>
		<div class=" multiple-items ">
			<?php
			$fetchh = tour_to_tour_view();
			foreach ($fetchh as $valuee) {
			$value_mimg = explode(",", $valuee['tour_photo']);
			foreach ($value_mimg as $value_mimg_main) {
				
			
			?>

				<div >
					<div class="p-2  tour-multi-img-box">
						<img src="Panel/img/<?php echo $value_mimg_main; ?>"  class="tour-multi-img">
					</div>
				</div>
			<?php } } ?>	
				
				
			</div>
	</div>
</section>
<!-- first banner section end -->
<!-- beautiful villa section started -->
<?php
$fetch = tour_to_tour_view();
foreach ($fetch as $value) {

}
?>
<section>
	<div class="container-fluid bg-light">
		<div class="row py-5 px-2">
			<div class="col-md-7">
				<h1 class="display-6 fw-bold"><?php echo $value['tour_name']; ?></h1>
				<p class="text-secondary text-bold"> <i class="fa-solid fa-location-dot pe-2"></i><?php echo $value['tour_location']; ?></p>
			</div>
			<div class="col-md-5 justify-content-end d-flex">
				<div class="d-flex">
					<div class="d-flex">
					<div>
						<img src="img/best-price.png" height="45px" width="45px">
					</div>
					<div class="ms-2">
						<span class="text-secondary d-block ">From</span>
						<p class="fw-bold fs-6"><i class="fa-solid fa-indian-rupee-sign me-1"></i><?php echo $value['tour_price']; ?></p>
					</div>
				</div>
				<div class="d-flex ms-4">
					<div>
						<img src="img/time.png" height="45px" width="45px">
					</div>
					<div class="ms-2">
						<span class="text-secondary d-block ">Duration</span>
						<p class="fw-bold fs-6"><?php echo $value['tour_days']; ?>Days</p>
					</div>
				</div>
				<div class="d-flex ms-3">
					<div>
						<img src="img/travel (1).png" height="40px" width="40px">
					</div>
					<div class="ms-2">
						<span class="text-secondary d-block ">Tour Type</span>
						<p class="fw-bold fs-6">Adventure</p>
					</div>
				</div>
				</div>
				
			</div>
		</div>
	</div>
</section>


<!-- beautiful villa section end -->
<!-- tour page booking section started -->
<section>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-8 ps-4">
				<!-- explore content start -->
				<h1 class="fw-bold">Explore Tours</h1>
				<div>
					<p class="text-secondary ms-2">A tour can take some of the fear out of travel. Even if you're a seasoned traveler, taking a tour in a region of the world you're unfamiliar with might be a good option. It can provide a good introduction to a new part of the world, helping you feel more comfortable returning later on your own</p>
				</div>
				<div class="row">
				<div class="col-md-6">
					<h4 class="fw-bold my-3">Advance Facilities</h4>

					<p class="text-secondary ms-2">
						Developing tourism infrastructure, such as airports, roads, hotels, restaurants, and attractions, stimulates economic growth by attracting visitors, generating employment opportunities, and fostering investment in the tourism sector.
					</p>
					<h4 class="fw-bold my-3">Challenge</h4>

					<p class="text-secondary ms-2">
					An adventure is an exciting experience or undertaking that is typically bold, sometimes risky. Adventures may be activities with danger such as traveling, exploring, skydiving, mountain climbing, scuba diving, river rafting, or other extreme sports.
					</p>
				</div>
				<div class="col-md-6 p-5  ">
					<img src="Panel/img/<?php echo $value_mimg_main; ?>" class="w-100">
				</div>
			</div>
				<!-- explore content start -->
				<!-- Included/ Exclude content start -->
				<div>
					<h4 class="fw-bold">Included/ Exclude</h4>
					<div class="row mt-4">
						<div class="col-md-6">
							<p class="text-secondary fs-6"><i class="fa-solid fa-check fa-lg text-color me-2 fw-bold"></i>Pick and Drop Services</p>
							<p class="text-secondary fs-6"><i class="fa-solid fa-check fa-lg text-color me-2"></i>1 Meal Per Day</p>
							<p class="text-secondary fs-6"><i class="fa-solid fa-check fa-lg text-color me-2"></i>Cruise Dinner & Music Event</p>
							<p class="text-secondary fs-6"><i class="fa-solid fa-check fa-lg text-color me-2"></i>Visit 7 Best Places in the City With Group</p>
						</div>
						<div class="col-md-6">
							<p class="text-secondary fs-6"><i class="fa-solid fa-xmark fa-lg text-dark me-2"></i>Additional Services</p>
							<p class="text-secondary fs-6"><i class="fa-solid fa-xmark fa-lg text-dark me-2"></i>Insurance</p>
							<p class="text-secondary fs-6"><i class="fa-solid fa-xmark fa-lg text-dark me-2"></i>Food & Drinks</p>
							<p class="text-secondary fs-6"><i class="fa-solid fa-xmark fa-lg text-dark me-2"></i>Tickets</p>
						</div>
					</div>
				</div>
				<!-- Included/ Exclude content start -->
				<!-- tour plan start -->
				<div>
					<h4 class="fw-bold my-3">Tour Plan</h4>
					<!-- days accordian start  -->
					<div>
					<div class="accordion" id="accordionExample">
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button text-white fw-bold rounded-3" style="background-color: #63ab45; margin-bottom: 15px;"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Day 1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  			 <?php echo $value['day1']; ?>
      </div>
    </div>
  </div>
  <div class="accordion-item border-0 ">
    <h2 class="accordion-header " id="headingTwo">
      <button class="accordion-button collapsed text-white fw-bold rounded-3" style="background-color: #63ab45; margin-bottom: 15px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Day 2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $value['day2']; ?>
      </div>
    </div>
  </div>
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="headingthree">
      <button class="accordion-button collapsed text-white fw-bold rounded-3" style="background-color: #63ab45; margin-bottom: 15px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
        Day 3
      </button>
    </h2>
    <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $value['day3']; ?>
      </div>
    </div>
  </div>
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed text-white fw-bold rounded-3" style="background-color: #63ab45; margin-bottom: 15px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
        Day 4
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $value['day4']; ?>
      </div>
    </div>
  </div>
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="headingive">
      <button class="accordion-button collapsed text-white fw-bold rounded-3" style="background-color: #63ab45; margin-bottom: 15px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseive">
        Day 5
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $value['day5']; ?>
      </div>
    </div>
  </div>
  
</div>
					</div>
					 <!-- days accordian start -->
				</div>
				<!-- tour plan end -->
				<!-- location content start -->
				<div class="mb-5">
					<h4 class="fw-bold">Location</h4>
					<div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:853px;height:450px;"><div id="embed-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Uttarakhand,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="authorize-map-data">premium bootstrap themes</a><style>#embed-map-display img{max-height:none;max-width:none!important;background:none!important;}</style></div>
				</div>
				<!-- location content end -->

			</div>
			<div class="col-md-4">
					<!-- booking form start -->
					<div class="border border-gray bg-light rounded-3 p-3">
						<h5 class="fw-bold">Tour Book Form!</h5>
						<?php 
						if (isset($_POST['buy_now'])) {
							book_form();
						}

						?>
							<form method="post">
								<label class="text-dark">Full Name</label>
								<input type="text" placeholder="Full Name" name="buyer_name" value="<?php echo $_SESSION['user_namee']?>" class="form-control border border-success" readonly>

								<label class="text-dark mt-3">Email</label>
								<input type="email" placeholder="Email" value="<?php echo $_SESSION['user_emaile']?>" name="buyer_email" class="form-control border border-success" readonly>

								<label class="text-dark mt-3">Mobile</label>
								<input type="number" placeholder="Mobile" value="<?php echo $_SESSION['user_mobilee']?>" name="buyer_phone" class="form-control border border-success" readonly>

								<label class="text-dark mt-3">No. of Guests</label>
								<input type="number" min="1" max="<?php echo $value['people']; ?>" placeholder="" name="guest" class="form-control border border-success">

								<label class="text-dark mt-3">Tour Starting Date: </label>
								<input type="date" placeholder="" name="ts_date" class="form-control border border-success">
<!-- 
								<label class="text-dark mt-3">Message: </label>
								<textarea class="form-control border-success"></textarea> -->

								<input type="hidden" placeholder="tour id" value="<?php echo $value['id']; ?>" name="tour_id" class="form-control border border-success">

								<input type="hidden" placeholder="login user id" value="<?php echo $_SESSION['idd']; ?>" name="login_user_id" class="form-control border border-success">

								<!-- buttom started -->
								<?php
								if (isset($_SESSION['idd'])) {
									?>
								<button type="submit" name="buy_now" class=" mt-2 rounded-2 border-0 text-white w-100 fw-bold bg-color p-3"><i class="fa-solid fa-cart-shopping me-1"></i>buy Now</button>
								<?php }else{
									
								  ?>
										<a class="d-block text-center mt-2 rounded-2 border-0 text-white w-100 fw-bold bg-color p-3 text-white text-decoration-none w-100 " href="loginuser/<?php echo $value['id'] ?>" >Buy Now</a>

								<?php }  ?>
								<!-- button end -->
							</form>
					</div>
					<!-- booking form end -->
					<!-- tour information start -->
						<div class="border border-gray rounded-3 p-4 mt-4">
						<h5 class="fw-bold">Tour Information</h5>
						<div class="d-flex">
							<div>
								<img src="img/friends.png" class="mt-2">
							</div>
							<div class="ms-3">
								<span class="text-secondary text-bold ">Max Guests</span><br>
								<p class="fw-bold  text-start"><?php echo $value['people']; ?></p>
							</div>
						</div>
						<div class="d-flex">
							<div>
								<img src="img/user (1).png" class="mt-2">
							</div>
							<div class="ms-3">
								<span class="text-secondary text-bold ">Min Age</span><br>
								<p class="fw-bold  text-start"><?php echo $value['Min_age']; ?></p>
							</div>
						</div>
						<div class="d-flex">
							<div>
								<img src="img/airplane.png" class="mt-2">
							</div>
							<div class="ms-3">
								<span class="text-secondary text-bold ">Tour Location</span><br>
								<p class="fw-bold  text-start"><?php echo $value['tour_location']; ?></p>
							</div>
						</div>
						<div class="d-flex">
							<div>
								<img src="img/earth-globe.png" class="mt-2">
							</div>
							<div class="ms-3">
								<span class="text-secondary text-bold ">Languages Support</span><br>
								<p class="fw-bold  text-start"><?php // echo $value['']; ?></p>
							</div>
						</div>
						
					</div>
					<!-- tour information start -->

			</div>

		</div>
	</div>
</section>
<!-- tour page booking section started -->

<?php include('include/footer.php'); ?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
<script type="text/javascript">
$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3
});
</script>
</body>
</html>