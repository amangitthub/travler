<?php
include('Panel/function.php');

 $idi2 = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>checkout</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 	
 	<!-- slick slider link start -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- slick slider link end -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
				 	<div class="display-5 text-white text-center mt-5 pt-5  fw-bold">Checkout</div>
				 	<p class="text-white text-bold text-center fs-5"><a href="index.php" class="text-decoration-none text-white">Home </a>/ Checkout</p>
				</div>
			</div>
			<!-- </div> -->
		  <!-- </div> -->
	</div>
</section>
<!-- first banner section end -->
<!-- order page start -->

<!-- $value_model_img_main = explode(",", $value_model_img['tour_photo']);
					foreach ($value_model_img_main as  $value_model_img_view) {
						
					} -->


<?php 
// checkout_view code
	$fetch_ch = checkout_view($idi2);
	foreach ($fetch_ch as $value_ch) {
		// print_r($value_ch);
	}

// tour view code
	$fetch = checkout_tour_view($idi2);
	foreach ($fetch as $value) {
		$tour_img = explode(",", $value['tour_photo']);
		foreach ($tour_img as $tour_img_view) {
			
		}
	}

	?>
<section>
	<div class="container-fluid my-5 py-5">
		<div class="row">
			<div class="col-md-8 ps-5">
				<h3 class="fw-bold">Order #<?php echo $value['id']; ?></h3>
				<hr class="text-secondary">
				<div class="row">
					<div class="col-md-2">
						<div class="me-2 ">
							<img src="Panel/img/<?php echo $tour_img_view; ?>" class="" style="width: 100%;">
						</div>
					</div>
					<div class="col-md-9">
						<h5 class="fw-bold"><?php echo $value['tour_name']; ?></h5>
						<div class="text-secondary"><span class="text-dark">Date:</span> <?php echo $value_ch['ts_date']; ?></div>
						<div class="text-secondary"><span class="text-dark">Duration:</span> <?php echo $value['tour_days']; ?> days</div>
						<div class="text-secondary"><span class="text-dark">Guest:</span> <?php echo $value_ch['guest']; ?></div>

					</div>

					<div class="col-md-1">
						<h6 class="fw-bold" style="color: #f7931e;">₹<?php echo $value['tour_price']; ?></h6>
					</div>

				</div>
				<div class="row bg-light mt-4 p-3">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<h6 class="fw-bold text-end">Tour Amount :</h6>
				<h6 class="fw-bold text-end">Total Guest Amount :</h6>
				<h6 class="fw-bold text-end"> Sub Total: </h6>
				<h6 class="fw-bold text-end">Pay Amount :</h6>
			</div>
			<div class="col-md-3 text-secondary text-end ">
				<h6 class="fw-bold">₹<?php echo $value['tour_price']; ?></h6>
				<h6 class="fw-bold">₹<?php
				echo $total_guest_amount =  $value_ch['guest'] *  $value['tour_price'];

				?></h6>
				
				<h6 class="fw-bold">₹<?php echo $total_guest_amount; ?></h6>
				<h6 class="fw-bold" style="color: #f7931e;">₹<?php echo $total_guest_amount; ?></h6>
			</div>
			
		</div>
			</div>
			<div class="col-md-4">
				<div class="m-3 p-4 rounded-3 border border-1">
					<h5 class="fw-bold text-center">Payment</h5>
					
					<div class="bg-light px-4 py-3 justify-content-between fs-5 text-bold text-secondary  rounded-3 border border-1 d-flex">
						 
						  <div> Amount to Pay :</div>
						  <div id="payid"> <input type="radio" name="imgsel" value="" checked="checked" />
						  	₹<?php echo $total_guest_amount; ?>

						  </div>
					</div>
				  <form method="post">
					<input type="hidden" id="payamount" value="<?php echo $total_guest_amount; ?>" >

					<input type="hidden" id="proid" value="<?php echo $value['id']; ?>" >

					<input type="hidden" id="proname" value="<?php echo $value['tour_name']; ?>" >		
					<input type="hidden" id="login_id" value="<?php echo $_SESSION['idd']; ?>" >					
			

					<input type="text" id="namee" value="<?php echo $value_ch['buyer_name'];?>"  class="form-control mt-2 bg-light" placeholder="name" readonly>

					<input type="email" id="payer_email" value="<?php echo $value_ch['buyer_email'];?>" class="form-control mt-2 bg-light" placeholder="email" readonly>

					<input type="number" id="payer_number" value="<?php echo $value_ch['buyer_phone'];?>"  class="form-control mt-2 bg-light" placeholder="number" readonly>

					<!-- <input class="checks mt-2 text-secondary" type="checkbox" name="term" value="term & condition" />Term And Condition<br/><br/> -->

					<input type="checkbox"  id="termsCheckbox"><a class="text-secondary text-decoration-none ms-2">Term & Condition</a><br>
    
					<input  onclick="pay()" id="submitButton"  class=" text-white border-0 text-center fw-bold form-control bg-color" value="submit" disabled>

					<!-- <button id="submitButton" disabled type="submit" onclick="pay()" class="bg-color w-100 text-decoration-none d-block  py-2 mt-3 w-100 text-center fs-5 text-bold text-white  rounded-3 border-0 ">Pay 
						
					</button>-->
				</form>

				</div>
				
			</div>
		</div>
		
	</div>
</section>

<!-- order page end -->
<?php include('include/footer.php'); ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

<script>
    $(document).ready(function() {
        $('#termsCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        });
    });
</script>

<!-- <script>
    $(document).ready(function(){
    	$(#termsCheckbox).click(function(){
    		$(.amit).toggle(function(){
    			alert('aman');
    		});
    	});
    });
</script> -->


<script type="text/javascript">
	
function pay()
{
// console.log('dvzfyudvds');
var name = $('#namee').val();
var payer_email = $('#payer_email').val();
var payer_number = $('#payer_number').val();
// console.log(name);
// alert(name);
console.log(payer_email);
var amount=$('#payamount').val();	
var productid=$('#proid').val();	
var productname=$('#proname').val();
var loginuserid = $('#login_id').val();	
var options = {
    "key": "rzp_test_STRA902gW4eydD", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "name": name,
    "email": payer_email,
    "number": payer_number,
    "description": productname,
    "image": payer_email,
    "handler": function (response){
        var paymentid=response.razorpay_payment_id;
		
		$.ajax({
			url:"rajorpay/payment-process.php",
			type:"POST",
			data:{product_id:productid,payment_id:paymentid,name_s:name,email_s:payer_email,amount_s:amount,product_name:productname,number_s:payer_number,login_user_id:loginuserid},
			success:function(finalresponse)
			{
				if(finalresponse)
				{
					window.location.href="http://thestylesafari.in/travler/rajorpay/success.php";
				}
				else 
				{
					alert('Please check console.log to find error');
					console.log(finalresponse);
				}
			}
		})
        
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
 e.preventDefault();
};
</script>
</body>
</html>