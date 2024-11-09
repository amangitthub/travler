<?php
include('function.php');

// insert function call 
if (isset($_POST['submit_tour'])) {
   tour_form();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tour form</title>
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
                   <h3 class="text-center my-3">Tour Form</h3>
                    <form class="w-75 my-3" id="myForm" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label  class="form-label">Tour Name</label>
                                    <input type="text" name="tour_name" class="form-control" placeholder="Tour Name">
                                    
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> Tour Image</label>
                                    <input type="file" placeholder="Tour Photo" name="tour_photo[]" class="form-control" multiple>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Tour location</label>
                                    <input type="text" name="tour_location" class="form-control" placeholder="Tour Location">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Tour Price</label>
                                    <input type="number" name="tour_price" class="form-control" placeholder="Tour Price">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Destination name</label>
                                    <select name="destination_name" class="form-control bg-dark" >
                                        <option></option>
 <?php

$fetch = destination_view();
foreach ($fetch as $value) {
?>
<option><?php echo $value['destination_name'];?></option>
<?php }?>

?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Tour Days</label>
                                    <input type="number" min="1" max="5" name="tour_days" class="form-control" placeholder="Tour Days">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> People</label>
                                    <input type="number" name="people" class="form-control" placeholder="people allowed" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> Minimum Age</label>
                                    <input type="number" name="Min_age" class="form-control" placeholder="Minimum Age" required>
                                </div>
                                 <div class="mb-3">
                                    <label  class="form-label">Tour Days Reviews</label>
                                   
                                    <div >
                                         <label  class="form-label"> Day 1</label>
                                         <textarea name="day1" class="form-control bg-dark" placeholder="type Something..."></textarea>
                                    </div>
                                    <div >
                                         <label  class="form-label"> Day 2</label>
                                         <textarea name="day2" class="form-control bg-dark" placeholder="type Something..."></textarea>
                                    </div>
                                    <div >
                                         <label  class="form-label"> Day 3</label>
                                         <textarea name="day3" class="form-control bg-dark" placeholder="type Something..."></textarea>
                                    </div>
                                    <div >
                                         <label  class="form-label"> Day 4</label>
                                         <textarea name="day4" class="form-control bg-dark" placeholder="type Something..."></textarea>
                                    </div>
                                    <div >
                                         <label  class="form-label"> Day 5</label>
                                         <textarea name="day5" class="form-control bg-dark" placeholder="type Something..."></textarea>
                                    </div>
                                   
                                </div>
                                <button type="submit"name="submit_tour" class="btn btn-primary">Submit Tour</button>
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
      tour_name: {
          required: true,
      },
      tour_photo: {
          required: true,
      },
      tour_price: {
          required: true,
      },
      destination_name: {
          required: true,
      },
      tour_days: {
          required: true,
      },
      people: {
          required: true,
      },
      Min_age: {
          required: true,
      },
      tour_location: {
          required: true,
      }
    },
    messages: {
      // contact_email: {
      //   required: 'Please enter your email',
      //   contact_email: 'Please enter a valid email address',
      // },
      tour_name: {
        required: 'Please enter your tour_name',
      },
      tour_photo: {
        required: 'Please enter your tour_photo',
      },
       tour_price: {
        required: 'Please enter your tour_price',
      },
       destination_name: {
        required: 'Please enter your destination_name',
      },
      tour_days: {
        required: 'Please enter your tour_days',
      },
      people: {
        required: 'Please enter your people',
      },
      Min_age: {
        required: 'Please enter your Min_age',
      },
      tour_location: {
        required: 'Please enter your tour_location',
      }
    }
  });
});
</script>

</body>

</html>