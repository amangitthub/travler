<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog</title>
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

</style>
<body>
<?php
include('Panel/function.php');

 include('include/header.php'); 

$fetch = Blog_page_view();
foreach ($fetch as $fetch_value) {
	
}

?>


<!-- first banner section started -->
<section >
	<div id="demo" class="carousel slide " data-bs-ride="carousel">
		  <!-- The slideshow/carousel -->
		  <!-- <div class="carousel-inner bann"> -->
			<!-- <div class="carousel-item active"> -->
			 <div class="gallary-banner-box1 ">
			 	<div class="gallary-content ms-5 pt-3 ps-4">
				 	<div class="display-5 text-white mt-5 pt-5 text-center fw-bold"><?php echo $fetch_value['blog_name']; ?></div>
				 	<p class="text-white text-center text-bold fs-5"><a href="home" class="text-decoration-none text-white">Home </a>/ Blog</p>
				</div>
			</div>
			<!-- </div> -->
		  <!-- </div> -->
	</div>
</section>
<!-- first banner section end -->
<!-- blog section started -->

<section>
	<div class=" container-fluid my-5">
		<div class="row">
			<!-- blog details section started -->
			<div class="col-md-8 ps-4">
				<div>
					<img src="Panel/<?php echo $fetch_value['blog_photo']; ?>" class="blog-img">
				</div>
				<div class="text-secondary my-3">
					<i class="fa-solid fa-user text-color"></i>Admin <i class="fa-solid fa-folder-open ms-3 text-color"></i>Adventure
				</div>
				<h2 class="fw-bold my-3"><?php echo $fetch_value['blog_name']; ?></h2>
				<p class="text-secondary"><?php echo $fetch_value['blog_description']; ?></p>
				<h2 class="fw-bold my-3">Build camping easily.</h2>
				<p class="text-secondary"><?php echo $fetch_value['blog_about']; ?></p>
				<!-- testimonal section start -->
				<div class="bg-light p-5" style="border-left: 2px solid #63ab45">
					<div><i class="fa-solid fa-quote-right fa-4x"></i></div>
					<p class="fs-5 text-bold lh-lg"><?php echo $fetch_value['blog_testimonial']; ?></p>
				</div>
				<!-- testimonal section end -->
				<!-- admin section start -->
				<div class="bg-light p-5 row mx-1 my-4">
					<div class="col-md-4">
						<img src="img/avatar.png" class="rounded-3">
					</div>
					<div class="col-md-8">
						<h5 class="fw-bold">Admin</h5>
						<i class="fa-solid fa-minus text-color " style="width: 200px;"></i>
						<p class="text-secondary text-bold mt-3">
The Traveler Admin platform empowers administrators to efficiently manage travel-related content, bookings, and user interactions, ensuring a seamless experience for both travelers and website administrators.</p>
					</div>
					
				</div>
				<!-- admin section end -->
					<!-- add a comment section start -->
			<div>
				<h2 class="fw-bold my-4">Add a Comment</h2>
				<p class="text-secondary">Your email address will not be published.</p>
				<?php 
				if (isset($_POST['p_comment'])) {
					blog_comment();
				}


				?>
				<form method="post" class="c_form">
					<input type="hidden" name="blog_id" value="<?php echo $fetch_value['id']; ?>" placeholder="blog id" class="form-control bg-light py-3" >
					<input type="text" name="c_name" placeholder="Your Name" class="form-control bg-light py-3">
					<input type="email" name="c_email" placeholder="Email" class="form-control bg-light py-3 mt-2">
					<textarea name="comment"  placeholder="Write Your Comment" class="form-control bg-light py-5 mt-2"></textarea>
					<!-- <button type="submit" name="p_comment" class="border-0 text-bold text-white mt-2 rounded-3 py-3 px-4 bg-color">Post Comment</button> -->


					<!-- buttom started -->
								<?php
								if (isset($_SESSION['idd'])) {
									?>
								<button type="submit" name="p_comment" class="border-0 text-bold text-white mt-2 rounded-3 py-3 px-4 bg-color">Post Comment</button>
								<?php 
									}else{
										echo "<script>alert('please login to comment');</script>";
								 	} 
								  ?>
								<!-- button end -->
				</form>
			</div>
			<!-- add a comment section end -->
			</div>
			<!-- blog details section end -->


			<div class="col-md-4 px-4">
				<!-- all categories section started -->
				<div class="rounded-3 bg-light p-4">
					<h5 class="fw-bold">ALL CATEGORIES</h5>
					<div><i class="fa-solid fa-minus fa-2x	 text-color"></i></div>
					<?php 
					$fetch_all_category = Blog_category();
					foreach ($fetch_all_category as $fetch_all_category_data) {

					?>
					<div class="d-flex justify-content-between py-3" style="border-bottom: 1px solid #dcdcdc">
						<div class="text-bold text-secondary"><?php echo $fetch_all_category_data['blog_Category']; ?></div>
						<!-- <div><i class="fa-solid fa-arrow-right text-color"></i></div> -->
					</div>
				<?php } ?>
				</div>

				<!-- all categories section end -->
				<!-- recent post section started -->
				<div class="rounded-3 bg-light p-4 mt-3">
					<h5 class="fw-bold">Recent Post</h5>
					<div><i class="fa-solid fa-minus fa-2x	 text-color"></i></div>
					<?php 
					$recent_blog = Blog_view();
					foreach ($recent_blog as $recent_blog_data) {

					?>
					<div class="row">
						<div class="col-md-3">
							<img src="Panel/<?php echo $recent_blog_data['blog_photo']; ?>" class="rounded-3 w-100">
						</div>
						<div class="col-md-9">
							<a href="blog_comment_view/<?php echo $recent_blog_data['id'] ?>" class="text-secondary text-decoration-none"><i class="fa-solid fa-comments text-color me-2"></i> <?php echo $recent_blog_data['comment_match_count'] ?> Comments</a>
							<p class="fw-bold"><?php echo $recent_blog_data['blog_name']; ?></p>
						</div>
					</div>
				<?php } ?>
				</div>

				<!-- recent post section end -->
				<!-- quick booking section start -->
				<div class="mt-3 rounded-3 p-5 bg-quick">
					<div class="d-flex justify-content-center">
						<img src="img/call.png">
					</div>
					<h2 class="text-center fw-bold text-white my-3" >Quick booking<br>process</h2>
					<hr>
					<p class="text-center text-secondary">Talk to an expert</p>
					<h3 class="text-white text-center fw-bold">+ 1- (246) 333-0089</h3>
				</div>
				<!-- quick booking section end-->
			</div>
		</div>
	</div>
</section>

<!-- blog section end -->
<?php include('include/footer.php'); ?>

</body>
</html>