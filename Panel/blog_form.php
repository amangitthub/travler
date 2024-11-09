<?php
include('function.php');
if (isset($_POST['submit_blog'])) {
    blog_insert();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- nic ecitor code -->
  <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
  <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

</head>

<body>

    <?php include('include/sidebar.php'); ?>
    <div class="container-fluid position-relative d-flex p-0">
        


    


        <!-- Content Start -->
        <div class="content">
    <?php include('include/header.php'); ?>
       

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4 d-flex align-items-center justify-content-center">
                <div class="row w-75 bg-secondary rounded  align-items-center justify-content-center mx-0">
                   <h3 class="text-center my-3">Blog Form</h3>
                    <form class="w-75 my-3" id="myForm" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label  class="form-label">Blog name</label>
                                    <input type="text" name="blog_name" class="form-control" placeholder="Blog name">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> Blog Photo</label>
                                    <input type="file"  placeholder="Blog Photo" name="blog_photo" class="form-control bg-dark">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> Blog Category</label>
                                    <select name="blog_Category" class="form-control bg-dark" >
                                        <option></option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Life Style">Life Style</option>
                                        <option value="City Tourd">City Tourd</option>
                                        <option value="Wild Camping">Wild Camping</option>
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> Blog Description</label>
                                    <input type="text"  placeholder="Blog Description" name="blog_description" class="form-control">
                                </div>
                                 <div class="mb-3">
                                         <label  class="form-label"> Blog About</label>
                                         <textarea name="blog_about" class="form-control bg-dark" placeholder="type Something..."></textarea>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> Bolg Testimonial</label>
                                    <input type="text"  placeholder="Blog Testimonial" name="blog_testimonial" class="form-control">
                                </div>
                                <button type="submit" name="submit_blog" class="btn btn-primary">Submit Blog</button>
                            </form>
                </div>
            </div>
            <!-- Blank End -->

    <?php include('include/footer.php'); ?>
            
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script>
$(document).ready(function(){
  $('#myForm').validate({
    rules: {
      // contact_email: {
      //   required: true,
      //   contact_email: true,
      // },
      blog_name: {
          required: true,
      },
      blog_testimonial: {
          required: true,
      },
      blog_photo: {
          required: true,
      },
      blog_Category: {
          required: true,
      },
      blog_about: {
          required: true,
      },
      blog_description: {
          required: true,
      }
    },
    messages: {
      // contact_email: {
      //   required: 'Please enter your email',
      //   contact_email: 'Please enter a valid email address',
      // },
      blog_name: {
        required: 'Please enter your name',
      },
      blog_testimonial: {
        required: 'Please enter your blog_testimonial',
      },
      blog_photo: {
        required: 'Please enter your blog_photo',
      },
      blog_Category: {
        required: 'Please enter your blog_Category',
      },
      blog_about: {
        required: 'Please enter your blog_about',
      },
      blog_description: {
        required: 'Please enter your blog_description',
      }
    }
  });
});
</script>
    


</body>

</html>