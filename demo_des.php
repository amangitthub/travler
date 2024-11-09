<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Demo destination</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 	
 	<!-- slick slider link start -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- slick slider link end -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<style type="text/css">
	
.destination_img{
	height: 290px !important;
	width: 100%;
	transition: transform 4s ease-in-out;
}
.destination-box:hover .destination_img{
	transform: scale(1.7);
}
.destination-box{
	height: 290px ;
}
.destination-inner-box{
	height: 290px;
	width: 100%;
	position: relative;
	transform: translateY(-100%);
/*	margin-top: -97%;*/
}
.tour-3{
    background-color: #f7921e;
    font-size: 13px;
    font-weight: 600;
}
</style>
<body>
<?php include('include/header.php'); ?>
<!-- destination place section start -->
<section>
	<div class="container-fluid mt-4">
		<div class="row">
				<div class="mt-5 d-flex text-align-center justify-content-center">
					<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Destination lists</button>
				</div>
					<h1 class="text-center fw-bold display-5 mt-3">Go Exotic Places</h1>
<?php 
// destination view data 
// $destination_fetch = destination_and_tour_view();
// $i = 0;
// foreach($destination_fetch as $destination_value){
// 	$i++;
// print_r($destination_value);
?>
<!-- turnery operator -->
			<!-- <div class="col-md-<?php // echo $i== 2?'6': '3';?>"> -->
			<!-- <div class="col-md-3 border border-3">
				<div class="rounded-3 destination-box">
					<img class="rounded-3" src="Panel/img/30229.jpg<?php //echo $destination_value['destination_photo']; ?>" height="290px" width="300px">
					<div class="destination-box-i border rounded-3" >
						<a href="destination_tours.php"><button class=" rounded-3 tour-3 py-1 px-4 text-white  border-0">4<?php //echo $destination_value['matched_tours_count']; ?> Tour</button></a>
						<p class="text-color text-bold ms-4 lh-sm fs-5">Travel to</p>
						<h4 class="text-white fw-bold lh-sm ms-4 "><a href="#" class="text-decoration-none text-white">uttarakhans<?php //echo $destination_value['destination_name']; ?></a></h4>
					</div>
				</div>
			</div> -->
			
<?php //} ?>

			<div class="col-md-3 p-3">
				<div class="border rounded-3 destination-box overflow-hidden">
					<img src="Panel/img/30229.jpg" alt="Responsive image" class="rounded-3 destination_img">
					<div class="destination-inner-box border rounded-3" >
						<div class="d-flex flex-row-reverse p-3">
							<a href="destination_tours.php"><button class=" rounded-3 tour-3 py-1 px-4 text-white  border-0">4<?php //echo $destination_value['matched_tours_count']; ?> Tour</button></a>
						</div>
						<div class="mt-5 pt-5">
							<p class="text-color text-bold ms-4 lh-sm fs-5">Travel to</p>
							<h4 class="text-white fw-bold lh-sm ms-4 "><a href="#" class="text-decoration-none text-white">uttarakhans<?php //echo $destination_value['destination_name']; ?></a></h4>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-6 p-3">
				<div class="border rounded-3 destination-box overflow-hidden">
					<img src="Panel/img/30229.jpg" alt="Responsive image" class="rounded-3 destination_img">
					<div class="destination-inner-box border rounded-3" >
						<div class="d-flex flex-row-reverse p-3">
							<a href="destination_tours.php"><button class=" rounded-3 tour-3 py-1 px-4 text-white  border-0">4<?php //echo $destination_value['matched_tours_count']; ?> Tour</button></a>
						</div>
						<div class="mt-5 pt-5">
							<p class="text-color text-bold ms-4 lh-sm fs-5">Travel to</p>
							<h4 class="text-white fw-bold lh-sm ms-4 "><a href="#" class="text-decoration-none text-white">uttarakhans<?php //echo $destination_value['destination_name']; ?></a></h4>
						</div>
					</div>
				</div>
				
			</div>


		</div>
	</div>
</section>
<!-- destination place section end -->

<form method="post" id="form">
	<input type="text" id="name" name="name" placeholder="dvskhg">
	<input type="email" id="email" name="email" placeholder="vbhj">
	<button type="submit " name="submit">submit</button>
</form>
<?php include('include/footer.php'); ?>



<script type="text/javascript">
	$(document).ready(function () {
    $('#form').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        }
     
       
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>
</body>
</html>