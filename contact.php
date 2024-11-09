<?php

	include('Panel/function.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 	
 	<!-- slick slider link start -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- slick slider link end -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<style type="text/css">
	.contact-msg-box{
		padding-bottom: 130px;
	}
	.contact-map{
		margin-top: -7.5%;
	}
	.f-icon{
		padding: 2% 2.5% 2% 2.5%;
	}
	.t-icon{
		padding: 2% 2.5% 2% 2.5%;
	}
	.i-icon{
		padding: 2% 2.7% 2% 2.7%;
	}
	.l-icon{
		padding: 2% 2.8% 2% 2.8%;
	}
</style>
<body>
<?php include('include/header.php'); ?>


<!-- first banner section started -->
<section >
	<div id="demo" class="carousel slide " data-bs-ride="carousel">
		  <!-- The slideshow/carousel -->
		  <!-- <div class="carousel-inner bann"> -->
			<!-- <div class="carousel-item active"> -->
			 <div class="gallary-banner-box1 ">
			 	<div class="gallary-content ms-5 pt-3 ps-4">
				 	<div class="display-5 text-white mt-5 pt-5  fw-bold text-center">Contact</div>
				 	<p class="text-white text-bold fs-5 text-center"><a href="home" class="text-decoration-none text-white">Home </a>/ Contact</p>
				</div>
			</div>
			<!-- </div> -->
		  <!-- </div> -->
	</div>
</section>
<!-- first banner section end -->
<!-- contatc us section started -->
<section class="mt-5 pt-4 mb-5">
	<div class="container-fluid">
		<div class="row px-2">
			<div class="d-flex justify-content-center ">
				<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Contact Us</button>
			</div>
			<h1 class="text-center fw-bold my-3  display-5">Ready to Get our best Services!<br> Feel free to contact with us</h1>
			<div class="col-md-4">
				<div class="bg-light rounded-3 m-2 p-5">
					<div class="d-flex justify-content-center">
						<img src="img/location-img.PNG">
					</div>
					<h4 class="text-center py-3 fw-bold">Office Location</h4>
					<div class="text-center text-secondary text-bold">Mathurawala near Mahindra<br>showroom </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="bg-light rounded-3 m-2 p-5">
					<div class="d-flex justify-content-center">
						<img src="img/msg-img.PNG">
					</div>
					<h4 class="text-center py-3 fw-bold">Email Address</h4>
					<div class="text-center text-secondary text-bold">Example@gmail.com</div>
					<br>
				</div>
			</div>

			<div class="col-md-4 ">
				<div class="bg-light rounded-3 m-2 p-5">
					<div class="d-flex justify-content-center">
						<img src="img/phone-img.PNG">
					</div>
					<h4 class="text-center py-3 fw-bold">Hotline</h4>
					<div class="text-center text-secondary text-bold">22659 55555 </div>
					<br>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contatc us section started -->
<!-- contact form section started -->
<section class="mt-5 pt-5	">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 ">
				<div class="p-4">
					<button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Contact With Us</button>
					<h1 class="fw-bold display-5 mt-3">Have questions? Feel free to write us</h1>
					<div class="text-secondary mt-4">Contact us now to disscuss how can we help you get the success for your trekking & Talk with real people in real time to resolve your problems.</div>
					<!-- <div class="d-flex   justify-content-center  "><div class="bg-light p-3 rounded-circle"><i class="fa-brands fa-facebook "></i></div></div> -->
					<div class="d-flex mt-4">
						<div class="bg-light rounded-circle f-icon me-3">
							<i class="fa-brands fa-facebook "></i>
						</div>
						<div class="bg-light rounded-circle t-icon me-3">
							<i class="fa-brands fa-twitter"></i>
						</div>
						<div class="bg-light rounded-circle i-icon me-3">
							<i class="fa-brands fa-instagram"></i>
						</div>
						<div class="bg-light rounded-circle l-icon me-3">
							<i class="fa-brands fa-linkedin"></i>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="col-md-6">
				<?php 
				// if (isset($_POST['submit_contact'])) {
				// 	contact_insert();
				// }

				?>
				<form method="post" id="myForm">
					<div class="row">
						<div class="col-md-6">
						<input type="hidden" name="contact_type_ajax" value="contact_type_ajax" >

						<input type="text" name="contact_name"  class="form-control  bg-light py-3" placeholder="Your Name">
						</div>
						<div class="col-md-6">
						<input type="text" name="contact_email"  class="form-control  bg-light py-3" placeholder="Your Email">

						</div>
					</div>

					<div class="row py-2">
						<div class="col-md-6">
						<input type="number" name="contact_phone"  class="form-control  bg-light py-3" placeholder="Phone Number">
						</div>
						<div class="col-md-6">
						<input type="text" name="contact_subject"  class="form-control  bg-light py-3" placeholder="Subject">

						</div>
					</div>
					<div class="row">
						<div>
							<input type="text" name="contact_msg" class="border ps-3 pt-3 bg-light rounded-2 w-100 contact-msg-box" placeholder="message">
						</div>
					</div>
					<div class="row">
						<div>
							<button type="submit" name="submit_contact" value="submit" class="fw-bold text-white bg-color border-0 rounded-3 mt-4 py-3 px-4">Send s Message</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</section>
<!-- contact form section end -->
<!-- QUISEQUE section started -->
<section class="mt-5 pt-4">
	<!-- QUISEQUE card start -->
		<div class="bg-quiseque p-5 ms-4 me-4  rounded-4 row">
			<!-- <div class="row"> -->
				<div class="col-md-1">
					<img src="img/travel (3).png">
				</div>
				<div class="col-md-9">
					<a class="text-white text-decoration-none">QUISEQUE VEL ORTOR</a>
					<h1 class="text-white fw-bold">Ready to adventure and enjoy natural</h1>
				</div>
				<div class="col-md-2">
					<button class="btn btn-light fw-bold fs-6 pt-3 pb-3 ps-4 pe-4 mt-2 "><a href="about" class="text-decoration-none text-dark">Explore More</a></button>
				</div>
			<!-- </div> -->
		</div>
		<!-- QUISEQUE card end -->
		<!-- Map section start -->
		<div class="w-100 contact-map">
			<div style="text-decoration:none; overflow:hidden;max-width:100%;width:1349px;height:460px;"><div id="gmap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Dehradun,+Uttarakhand,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-code-enabler" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="grab-maps-authorization">premium bootstrap themes</a><style>#gmap-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
		</div>
		<!-- map section end -->
</section>
<!-- QUISEQUE section end -->

<?php include('include/footer.php'); ?>


    <script>
$(document).ready(function(){
    $('form').submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: 'Panel/function.php',
            data: formData,
            success: function(response){
              console.log(response);
                if (response == "true") {
                   alert('Data submitted');
                 }else{
                  alert('Data Not Submitted');
                 }
               
            }
        });
    });
});
</script>



	<script>
$(document).ready(function(){
  $('#myForm').validate({
    rules: {
      contact_email: {
        required: true,
        contact_email: true,
      },
      contact_name: {
          required: true,
      },
      contact_phone: {
          required: true,
      },
      contact_subject: {
          required: true,
      },
      contact_msg: {
          required: true,
      }
    },
    messages: {
      contact_email: {
        required: 'Please enter your email',
        contact_email: 'Please enter a valid email address',
      },
      contact_name: {
        required: 'Please enter your name',
      },
      contact_phone: {
        required: 'Please enter your Phone',
      },
      contact_subject: {
        required: 'Please enter your subject',
      },
      contact_msg: {
        required: 'Please enter your contact_msg',
      }
    }
  });
});
</script>
	
</body>
</html>