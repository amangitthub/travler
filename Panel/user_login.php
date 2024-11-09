<!-- <!-- <!-- <!-- <!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Login</title>
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
<!-- user login form start -->

<section>
	<div class="container my-5">
		<div class="row">
			<div class="d-flex justify-content-center">
					<!-- login form start -->
					<div class="border border-gray bg-light rounded-3 p-3" style="width: 380px">
						<h5 class="fw-bold">User Register</h5>
						<?php 
						<!-- include('Panel/function.php');
						if (isset($_POST['register'])) {
						//	user_register();
						} -->


						?>
							<form method="post">
								<label class="text-dark mt-3">User Email</label>
								<input type="email" placeholder="Email" name="user_email" class="form-control border border-success">

								<label class="text-dark mt-3">User Password</label>
								<input type="password" placeholder="Password" name="user_password" class="form-control border border-success">

								<button type="submit" name="register" class=" mt-2 rounded-2 border-0 text-white w-100 fw-bold bg-color p-3">Login</button>
								
							</form>
					</div>
					<!-- login form end -->
			</div>
		</div>
	</div>
</section>

<!-- user login form end -->

<?php include('include/footer.php'); ?>
</body>
</html> --> --> --> --> -->