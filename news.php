<?php
    include('Panel/function.php'); 

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News</title>
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
<?php
include('include/header.php');

?>


<!-- first banner section started -->
<section >
	<div id="demo" class="carousel slide " data-bs-ride="carousel">
		  <!-- The slideshow/carousel -->
		  <!-- <div class="carousel-inner bann"> -->
			<!-- <div class="carousel-item active"> -->
			 <div class="gallary-banner-box1 ">
			 	<div class="gallary-content ms-5 pt-3 ps-4">
				 	<div class="display-5 text-white mt-5 pt-5  fw-bold">News</div>
				 	<p class="text-white text-bold fs-5"><a href="home" class="text-decoration-none text-white">Home </a>/ News</p>
				</div>
			</div>
			<!-- </div> -->
		  <!-- </div> -->
	</div>
</section>
<!-- first banner section end -->
<!-- news content section started -->
<section>
	<div class="container-fluid">
		<div class="row">
			<?php
					$bolg_fetch = Blog_view();
					foreach ($bolg_fetch as $bolg_value) {


					?>
			<div class="col-md-4">
				<!-- content -->
				<div class="bg-white recent-box shadow border rounded-3 mx-1 my-2 p-3">
					<div class="p-3 bg-color text-white dec-19">
						 <?php echo date("d"); ?><br>
                              <?php echo date("M"); ?>
					</div>
					<img class="rounded-3" src="Panel/<?php echo $bolg_value['blog_photo']; ?>" height="272px" width="378px">
					<div class="py-1 ms-4 px-3 d-inline-block text-bold text-white recent-life"><?php echo $bolg_value['blog_Category']; ?></div>
					
					<div class="text-secondary text-bold ms-3">
						<i class="fa-solid fa-circle-user text-color me-1"></i>Admin
						<!-- <i class="fa-solid fa-comments text-color me-1"></i><?php //echo $bolg_value['comment_match_count'] ?> Comments -->
						<i class="fa-solid fa-comments text-color me-1"></i><a href="blog_comment_view?id=<?php echo $bolg_value['id'] ?>" class="text-decoration-none text-secondary"><?php echo $bolg_value['comment_match_count'] ?> Comments</a>
					</div>
					<h4 class=" ms-3 my-3"><a href="blog/<?php echo $bolg_value['id'] ?>" class="text-decoration-none"><?php echo $bolg_value['blog_name']; ?></a></h4>
					<p class="text-secondary text-bold ms-3"><?php echo $bolg_value['blog_description']; ?></p>
					<div class="recent_read text-bold ms-3"><a href="blog/<?php echo $bolg_value['id'] ?>" class="text-decoration-none text-secondary">Read More <i class="fa-solid fa-arrow-right text-color"></i></a></div>
				</div>
				<!-- content end -->
			</div>
		<?php } ?>
		</div>
	</div>
</section>
<!-- news content section end -->


<!-- QUISEQUE card start -->
<section>
	<div class="container-fluid">
		<div class="bg-quiseque p-5  mt-5 row">
			<!-- <div class="row"> -->
				<div class="col-md-1">
					<img src="img/travel (3).png">
				</div>
				<div class="col-md-9">
					<a class="text-white text-decoration-none">QUISEQUE VEL ORTOR</a>
					<h1 class="text-white fw-bold">Ready to adventure and enjoy natural</h1>
				</div>
				<div class="col-md-2">
					<button class="btn btn-light fw-bold fs-6 pt-3 pb-3 ps-4 pe-4 mt-2 ">Explore More</button>
				</div>
			<!-- </div> -->
		</div>
		</div>
</section>
<!-- QUISEQUE card end -->
<?php
include('include/footer.php');
?>
</body>
</html>