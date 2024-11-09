<?php  
include('Panel/function.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 	
 	<!-- slick slider link start -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- slick slider link end -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
      </script> 
</head>
<body>
<?php include('include/header.php'); ?>
<section>
	<div class="container my-5">
		<div class="row">
			<div class="d-flex justify-content-center">
					<!-- login form start -->
					<div class="border border-gray bg-light rounded-3 p-3" style="width: 380px">
						<h5 class="fw-bold">User Register</h5>
						<?php 
						if (isset($_POST['login'])) {
							 user_login();
							
						}
						?>
							<form method="post">
								<label class="text-dark mt-3"> Email</label>
								<input type="email" placeholder="Email" name="login_email" class="form-control border border-success">

								<label class="text-dark mt-3"> Password</label>
								<input type="password" placeholder="Password" id="myInput" name="login_password" class="form-control border border-success">
								<input type="checkbox" onclick="myFunction()"> Show password

								<!-- <div style="display: flex;"> -->
					<!-- 	<input  type="Password"  name="password" id="myInput" style="width: 280px; !important">
						 <input style=" width: 20px;" type="checkbox" onclick="myFunction()"> 
						<i class="fa fa-eye fa-lg" aria-hidden="true" onclick="myFunction()"></i>

						 </div> -->

								<button type="submit" name="login" class=" mt-2 rounded-2 border-0 text-white w-100 fw-bold bg-color p-3">Login</button>
								<p class="text-center my-3">Don't have an Account? <a href="user_register" class="text-decoration-none text-color">Register</a></p>
							</form>
					</div>
					<!-- login form end -->
			</div>
		</div>
	</div>
</section>
<?php include('include/footer.php'); ?>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>