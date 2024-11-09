<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comments</title>
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
<?php include('Panel/function.php'); ?>
<?php include('include/header.php'); ?>
<!-- comment view -->
<section class="my-5">
	<div class="d-flex justify-content-center">
		
		<div class="bg-light rounded-3 w-50 p-5">
			<h5 class="text-center pb-4 fw-bold">Comments</h5>
			<?php 
				$fetch = comment_view();
				foreach ($fetch as $value) {
			?>
			<div>
				<h6 class=""><?php echo $value['c_name']; ?></h6>
				<p class="text-secondary ps-3"><?php echo $value['comment']; ?></p>
			<div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- comment view end -->
<?php include('include/footer.php'); ?>
</body>
</html>