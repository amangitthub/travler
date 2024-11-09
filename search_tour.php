
<?php
include('Panel/config/connection.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Tour</title>
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
/*      .b{
         display: none;
      }
 .a:hover .b{
   display: inline-block;
 }*/
   </style>
   <body>
      <?php include('Panel/function.php'); ?>

      <?php include('include/header.php'); ?>
      <!-- first banner section started -->
<div>
   
<?php
     $query = "SELECT * FROM tour_form WHERE `tour_location` = '".$_REQUEST['t_location']."' or `destination_name` = '".$_REQUEST['t_destination']."' or `people` < '".$_REQUEST['t_guest']."' ";
     $query_run = mysqli_query($conn, $query);
     $num = mysqli_num_rows($query_run);

?>

</div>
<!-- tour search section started -->
<section>
   <div class="container-fluid">
      <div class="row">
         <!-- start -->
            <?php 
               if ($num > 0) {
                  
               while ($value = mysqli_fetch_assoc($query_run)) { 
               $value_img = explode(",", $value['tour_photo']);
               foreach ($value_img as $value_image) {
               }

               ?>
                     <div class="col-md-3 ">
                        <a href="tour_book/<?php echo $value['id'] ?>" class="text-decoration-none">
                           <!-- content -->
                           <div class="border rounded-3 m-3 amazing-box-cont">
                              <img class="rounded-3" src="Panel/img/<?php echo $value_image; ?>" height="321px" width="299px">
                           </div>
                           <div class="amazing-box a rounded-3 m-3 pt-2 ">
                              <div class="d-flex justify-content-between m-3">
                                 <button class="rounded-3 text-white border-0 amazing-featured px-2">FEATURED</button>
                                 <button style="background-color: #00000066;" class="rounded-3 float-end  text-white border-0  px-1"><i class="fa-regular fa-heart"></i></button>
                              </div>
                              <div class="empty-amazing p-5 m-2">
                              </div>
                              <div class="d-flex justify-content-between m-3">
                                 <div class="star-amazing">
                                    <i class="fa-solid fa-star text-color"></i>
                                    <i class="fa-solid fa-star text-color"></i>
                                    <i class="fa-solid fa-star text-color"></i>
                                    <i class="fa-solid fa-star text-color"></i>
                                    <i class="fa-solid fa-star text-color"></i>
                                 </div>
                                 <div class="text-warning text-bold star-amazing-i">
                                    4.47 by 3 Reviews
                                 </div>
                                 <div>
                        <a href="#" class="text-decoration-none"><i class="fa-solid fa-camera text-secondary fa-lg"></i></a>
                        <a href="#" class="text-decoration-none ms-1 me-3"><i class="fa-solid fa-video text-secondary fa-lg"></i></a>
                        </div>
                        </div>
                        <h5 class="ms-3 fw-bold w-75 amazing-title"><a href="tour_book/<?php echo $value['id'] ?>" class="text-decoration-none"><?php echo $value['tour_name']; ?></a></h5>
                        <p class="text-bold ms-3 lh-sm amazing-location"><i class="fa-solid fa-location-dot me-1 text-color"></i><?php echo $value['tour_location']; ?></p>
                        <div class="text-bold ms-3 mb-2 fs-6 amazing-rupee"><i class="fa-solid fa-circle-dollar-to-slot text-color"></i> From <span class="text-color"><i class="fa-solid fa-indian-rupee-sign me-1"></i><?php echo $value['tour_price']; ?></span></div>
                        <div class="slide-d b">
                        </div>
                        </div>
                        <!-- content end -->
                        </a>
                     </div>
                  <?php } 
                     }else{
                        ?>
                        <div class="d-flex justify-content-center my-5">
                        <div class="p-5 shadow w-25 ">
                           <p class="text-secondary text-center m-3 fs-5">No Record Find</p>
                        </div>
                        </div>

                        <?php
                     }
                   ?>
         <!-- end -->
      </div>
   </div>
</section>
      <?php include('include/footer.php'); ?>

   </body>
</html>