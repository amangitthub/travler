<?php

include('Panel/function.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Destination tours</title>
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
/*	Destination tours page css start*/
.Destination_img_details{
	width: 100%;
	height: 428px;
}
.img_destination_tours{
width: 100%;
height: 295px;
}
.d_t_featured{
	transform: translatey(10%);
	width: 90%;
}
.d_T_camera_box{
	transform: translatey(-110%);
}
.d_t_whitebox{
	transform: translatey(-10%);
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	border-top-left-radius: 30px;
	border-top-right-radius: 30px;
}
/*	Destination tours page css end*/

</style>
<body>
<?php include('include/header.php'); ?>
<!-- destination details section start -->
<?php 
$fetchd = destination_detali();
foreach ($fetchd as $valued) {
}
?>
<section>
	<div class="container-fluid py-5 bg-light">
		<div class="row">
			<div class="col-md-6">
				<div class="m-3 p-2 rounded-3 shadow">
					<img src="Panel/<?php echo $valued['destination_photo']; ?>" class="Destination_img_details rounded-3">
				</div>
			</div>
			<div class="col-md-6">
				<div class="mx-5">
					<h2 class="fw-bold mt-3"><?php echo $valued['destination_name']; ?></h2>
					<div class="text-secondary lh-lg">
						<?php echo $valued['destination_description']; ?>
					</div>
					<div>
						<table class="table mt-4 table-light">
							<tr>
								<th>Country</th>
								<td class="text-secondary"><?php echo $valued['destination_name']; ?></td>
							</tr>
							<tr>
								<th>Language</th>
								<td class="text-secondary"><?php echo $valued['destination_language']; ?></td>
							</tr>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- destination details section end -->

<!-- explore section start -->
<section>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="d-flex justify-content-center">
				<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Explore Tour</button>
			</div>
			<h1 class="text-center display-6 fw-bold my-3">Most Popular Tours</h1>
			<?php
			$fetchdata = desti_tours_view();
			foreach ($fetchdata as $value_dt) {

			?>
			<div class="col-md-4"><a href="tour_book/<?php echo $value_dt['id'] ?>">
				<div class="m-3 rounded-3  position-relative">
					<div class="d-flex justify-content-between m-3 d_t_featured position-absolute">
							<button class="rounded-3 text-white border-0 amazing-featured px-2">FEATURED</button>
							<button style="background-color: #00000066;" class="rounded-3 float-end  text-white border-0  px-1"><i class="fa-regular fa-heart"></i></button>
					</div>
					<?php
					$valuemain = explode(",", $value_dt['tour_photo']);
					foreach ($valuemain as $valuemain_dt) {
					}

					?>
					<img src="Panel/img/<?php echo $valuemain_dt; ?>" class="img_destination_tours rounded-3 shadow">
					<div class="bg-white px-3 shadow d_t_whitebox py-1">
						<div class="d-flex justify-content-between mt-4">
							<div class="">
							<i class="fa-solid fa-star text-color "></i>
							<i class="fa-solid fa-star text-color "></i>
							<i class="fa-solid fa-star text-color "></i>
							<i class="fa-solid fa-star text-color "></i>
							<i class="fa-solid fa-star text-color "></i>
							</div>
							<div class="py-2 px-3 me-3 rounded-3 bg-white text-secondary shadow d_T_camera_box">
								<i class="fa-solid fa-camera me-1"></i>
								<i class="fa-solid fa-video"></i>
							</div>

						</div>
						<a  class="text-decoration-none"><h5 class="fw-bold my-3"><?php echo $value_dt['tour_name']; ?></h5></a>
							<p class="text-secondary"><i class="fa-solid fa-location-dot text-color"></i><?php echo $value_dt['tour_location']; ?></p>
							<p class="text-secondary"><i class="fa-solid fa-circle-dollar-to-slot text-color"></i>From<i class="fa-solid fa-indian-rupee-sign mx-1 text-color"></i><span class="text-color"><?php echo $value_dt['tour_price']; ?></span></p>
						<hr>
						<div class="d-flex justify-content-between mb-2">
							<div class="text-secondary text-bold">
								<i class="fa-solid fa-clock text-color"></i>
								<?php echo $value_dt['tour_days']; ?> Days
								<i class="fa-solid fa-user-group text-color ms-3"></i><?php echo $value_dt['people']; ?>

							</div>
							<div><a class="text-secondary text-decoration-none" href="tour_book/<?php echo $value_dt['id'] ?>">
								Explore<i class="fa-solid fa-arrow-right ms-1"></i></a>
							</div>
						</div>
					</div>
					
				</div></a>
			</div>
		<?php } ?>
		</div>
	</div>
</section>
<!-- explore section end -->

<?php include('include/footer.php'); ?>
</body>
</html>