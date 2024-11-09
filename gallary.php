<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Gallary</title>
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
      body{
      overflow-x: hidden;
      }
      /*.plusbtn-gallary{
         padding: 8px 20px 8px 20px;
      }*/
      .btn-pl{
         padding: 7px 3px 0px 3px;
         background-color: rgb(247 146 30);
      }
   </style>
   <body>
      <?php
         include('Panel/function.php');
         include('include/header.php')
         ?>
      <!-- first banner section started -->
      <section class="" style="">
         <div id="demo" class="carousel slide " data-bs-ride="carousel">
            <!-- The slideshow/carousel -->
            <div class="carousel-inner bann">
               <div class="carousel-item active">
                  <div class="gallary-banner-box1 zoom">
                     <div class="gallary-content ms-5">
                        <div class="display-5 text-white mt-5 pt-5 fw-bold">Gallery</div>
                        <p class="text-white text-bold fs-5">People Don’t Take, Trips Take People.</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item active">
                  <div class="gallary-banner-box2 zoom">
                     <div class="gallary-content ms-5">
                        <div class="display-5 text-white mt-5 pt-5 fw-bold">Gallery</div>
                        <p class="text-white text-bold fs-5">People Don’t Take, Trips Take People.</p>
                     </div>
                  </div>
               </div>

            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon   bg-dark rounded-2 "></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-2 "></span>
            </button>
         </div>
      </section>
      <!-- first banner section end -->
      <!-- descovery land section start -->
      <section class="">
         <div class="container-fluid ">
            <div class="row mt-5">
               <?php 
                  	$fetch_model_img = tour_view();
                  	foreach ($fetch_model_img as  $value_model_img) {
                  		$value_model_img_main = explode(",", $value_model_img['tour_photo']);
                  		foreach ($value_model_img_main as  $value_model_img_view) {
                  			
                  		}
                  
                  ?>
               <div class=" col-md-4">
                  <div class="descovery-box descovery-box-gallary m-3">
                     <img id="<?php echo $value_model_img['id']; ?>-img"  class="rounded-3 descovery-img " src="Panel/img/<?php echo $value_model_img_view; ?>" height="368px" width="409px">
                     <div class="descovery-box-i descovery-box-i-gallary">
                        <div class=" justify-content-center d-flex">
                           <div class="plusbtn-gallary">
                              <!-- model btn -->
                              <button type="button" data-id="<?php echo $value_model_img['id']; ?>"  class="pop  border-0 btn-pl rounded-circle text-white"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-plus fw-bolder fa-lg"></i></button>
                              <!-- modal btn -->
                           </div>
                        </div>
                        <h5 class="fw-bold mt-3 text-white text-center">Discovery Island</h5>
                        <p class="text-bold text-white text-center"> ADVENTURE</p>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
      <!-- descovery land section end -->
      <!-- QUISEQUE card start -->
      <div class="bg-quiseque  p-5  mt-5 row">
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
      <!-- QUISEQUE card end -->
      <?php
         include('include/footer.php')
         ?>
      <!-- slick slider js start-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script type="text/javascript">
         $(document).on("click", ".pop", function (e) {
         	e.preventDefault();
              var myBookId = $(this).data('id');
              console.log(myBookId);
               var a = $('#'+myBookId+'-img').attr('src');
         
               console.log(myBookId+'-img');
                 	 // $("#im").html(a);
                 document.getElementById("im").src=a;
          
         });
         
         	
      </script>								
      <!-- The Modal -->
      <div class="modal" id="myModal">
         <div class="modal-dialog" >
            <div class="modal-content border-0 ms-5" style="background-color: transparent;">
               <!-- Modal Header -->
               <!-- <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>	 -->								
               <!-- Modal body -->
               <div class="modal-body "  >
                  <img id="im" class="rounded-3" src="" height="450px" width="100%">
               </div>
               <!-- Modal footer -->
               <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div> -->									
            </div>
         </div>
      </div>
      <!-- modal end -->
   </body>
</html>