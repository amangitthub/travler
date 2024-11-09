<?php
   include('Panel/function.php');
   $fetch = tour_view();
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

      <!-- <script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
      </script>  -->

   </head>
   <style type="text/css">
      body{
      overflow-x: hidden;
      }
.description-top{
   margin-top: -10%;
}
.select_input{
   width: 7rem;
}


   .animated_div {

    position: relative;
    animation: animated_div 3s 1;
    -moz-animation: animated_div 3s 1;
    -webkit-animation: animated_div 3s 1;
    -o-animation: animated_div 3s 1;
    border-radius: 3px;
    -webkit-border-radius: 3px;
}

@keyframes animated_div {
  0% {
    transform: rotate(0deg);
    left: 0px;
}
25% {
    transform: rotate(20deg);
    left: 0px;
}
50% {
    transform: rotate(0deg);
    left: 500px;
}
55% {
    transform: rotate(0deg);
    left: 500px;
}
70% {
    transform: rotate(0deg);
    left: 500px;
}
100% {
    transform: rotate(-360deg);
    left: 0px;
}
}

   </style>
   <body>
      <?php include('include/header.php'); ?>
      <!-- first banner section started -->
      <section>
         <div id="demo" class="carousel slide " data-bs-ride="carousel">
            <!-- The slideshow/carousel -->
            <div class="carousel-inner bann">
               <div class="carousel-item active">
                  <div class="banner-1 zoom">
                     <div class="banner-box">
                        <div class="btn btn-warning rounded-0 rotatee text-white fw-bold animated_div">Tour & travels</div>
                        <h1 class="display-2 fw-bold  texts">Tour Travel & <br>Adventure Camping</h1>
                        <p class="text-white fs-5 text-bold mt-3">Phasellus condimentum laoreet turpist sodales<br>in. integer leo arcu, molis amet tempor.</p>
                        <button style="background-color: #63ab45;" class="btn  text-white pt-3 pb-3 ps-5 pe-5 fs-6 mb-5 fw-bold rounded-3 mt-3">Let's Get Started </button>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="banner-2 zoom">
                     <div class="banner-box">
                        <button class="btn btn-warning rounded-0 rotatee text-white fw-bold animated_div">Tour & travels</button>
                        <h1 class="  fw-bold display-2 texts">Your Journey Begins Here</h1>
                        <h6 class="text-white  mt-3 fs-5">8700 TOURS ARE AVAILABLE, <span class="text-color cursor-pointer">BOOK NOW</span></h6>
                        <button style="background-color: #63ab45;" class="btn  text-white pt-3 pb-3 ps-5 pe-5 fs-6 mb-5 fw-bold rounded-3 mt-3">Let's Get Started </button>
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



      <!-- discription section start -->
          <section class="mx-5 description-top " style="position: relative; z-index: 100;">
            <div class="container-fluid  bg-white rounded-3 shadow disc">
                  <form method="post" action="search_tour">

               <div class="row">
                  <div class="col-md-2 py-3" >
                     <div class="ms-2 d-flex" style="border-right: 1px solid #e2dfeb;">
                     <i class="fa-solid fa-location-dot text-color fa-2x mt-2 me-3"></i>
                     <p class="text-secondary list-inline-item ">&nbsp;Location<br>

                        <select name="t_location" class=" fw-bold border-0 select_input " >
                          <option value="" selected disabled>Location</option>
                          <?php
                          // fetch_t , t is a tour
                          $fetch_t = tour_view_head();
                          foreach ($fetch_t as $value_t) {
                          ?>
                          <option value="<?php echo $value_t['tour_location']; ?>"><?php echo $value_t['tour_location']; ?></option>
                       <?php } ?>
                        </select>

                       </p>
                      </div>
                  </div>

                  <div class="col-md-3 py-3">
                     <div style="border-right: 1px solid #e2dfeb;">

                     <i class="fa fa-bar-chart text-color fa-2x me-3" aria-hidden="true"></i>
                     <p class="text-secondary list-inline-item">&nbsp;Destination<br>
                        <select name="t_destination" class=" fw-bold border-0 select_input  " >
                          <option value="" selected disabled>Destination</option>
                          <?php
                          $fetch_t_destination = tour_view_search();
                          foreach ($fetch_t_destination as $value_t_destination) {
                          ?>
                          <option value="<?php echo $value_t_destination['destination_name']; ?>"><?php echo $value_t_destination['destination_name']; ?></option>
                       <?php } ?>
                        </select>
                     </p>
                     
                  </div>
                  </div>

                  <div class="col-md-3 py-3">
                     <div style="border-right: 1px solid #e2dfeb;">
                     <i class="fa fa-calendar text-color fa-2x me-3" aria-hidden="true"></i>
                     <!-- <p class="text-secondary list-inline-item">date from<br><span class="fw-bold text-dark">Date from</span></p> -->
                      <p class="text-secondary list-inline-item">date from<br><span class="fw-bold text-dark">
                         <input style="border:none; outline: none;" type="date" name="daate">
                      </span></p>
                     <!-- <div class="dropdown list-inline-item"> -->
                    <!--    <button class="btn  dropdown-toggle w-100 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                       </button> -->
                    <!--    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                         <li><a class="dropdown-item" href="#"><input type = "date"></a></li>
                       </ul> -->
                     <!-- </div> -->
                  </div>
                  </div>

                  <div class="col-md-2 py-3">
                     <div style="border-right: 1px solid #e2dfeb;">
                     <i class="fa fa-user text-color fa-2x me-3" aria-hidden="true"></i>
                     <p class="text-secondary list-inline-item">&nbsp;Max Guest<br>
                        <!-- <select name="t_guest" class=" fw-bold border-0 " >
                          <option value="" selected disabled>0</option>
                          <option>12</option>
                        </select> -->
                        <input type="number" min="0" class="fw-bold border-0 select_input text-dark" name="t_guest" placeholder="0">

                     </p>
                     
                  </div>
                  </div>

                  <div class="col-md-2 bg-color  rounded-end" >

                     <!-- <i class="fa fa-bars text-color fa-2x mt-3" aria-hidden="true"></i>

                     <span class="list-inline-item bg-color p-4 ms-2 rounded-2">
                     <i class="fa fa-search text-white p-3 fa-lg" aria-hidden="true"></i>
                        
                     </span> -->
                     <div class="d-flex h-100 " style="margin-right:  -13px;">
                        <div class="bg-color  w-100 ms-3 pt-4 text-white text-bold" style="border-top-right-radius: 8px; border-bottom-right-radius: 8px;">
                         <button type="submit" name="t_submit" class="border-0 bg-transparent fw-bold text-white">
                         <i class="fa fa-search text-white p-3 fa-lg" aria-hidden="true"></i>
                         Search</button>
                        </div>
                        
                     </div>
                  </div>
               </div></form>
            </div>
         </section>
      <!-- discription section end --> 



      <!-- explore section start -->
      <section class="mt-3">
         <div class="container-fluid bg-explore">
            <div class="row">

               <div class="mt-5 pt-5  text-center">
                  <button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Popular Activities</button>
                  <p class="text-center fw-bold display-5 pt-3">Explore Real Adventure</p>
               </div>
               <div>
                  <div class="slider ">
                     <!-- slider container 1 start -->
                     <div>
                        <div class="rounded-2 m-3 bg-explore-slider bg-explore-slider1  ">
                           <!-- trby -->
                           <div class="bg-white rounded-3 overflow-hidden p-4 tent-camping-container">
                              <div class="d-flex mb-4">
                                 <div class="fw-bold fs-5 ">
                                    <p class="tent-camping-cap"></p>
                                    <a href="about" class="text-decoration-none text-dark">Tent Camping Services</a>
                                 </div>
                                 <div>
                                    <p class="explore-arrow rounded-circle mt-4">
                                       <i class="fa fa-arrow-right fa_right text-white" aria-hidden="true"></i>
                                    </p>
                                 </div>
                              </div>
                              <div class="tent-para">
                                 <p class="text-secondary fs-6">keep you safe from weather, animals, and insects</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- slider container end -->
                     <!-- slider container2 start -->
                     <div>
                        <div class="rounded-2 m-3 bg-explore-slider bg-explore-slider2 ">
                           <!-- trby -->
                           <div class="bg-white rounded-3 overflow-hidden p-4 tent-camping-container">
                              <div class="d-flex mb-4">
                                 <div class="fw-bold fs-5 ">
                                    <p class="tent-camping-cap"></p>
                                    <a href="about" class="text-decoration-none text-dark">Trailers and rv spots</a>
                                 </div>
                                 <div>
                                    <p class="explore-arrow rounded-circle mt-4">
                                       <i class="fa fa-arrow-right fa_right text-white" aria-hidden="true"></i>
                                    </p>
                                 </div>
                              </div>
                              <div class="tent-para">
                                 <p class="text-secondary fs-6">RVs are most commonly used for living quarters while traveling</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- slider container end -->
                     <!-- slider container3 start -->
                     <div>
                        <div class="rounded-2 m-3 bg-explore-slider bg-explore-slider3">
                           <!-- trby -->
                           <div class="bg-white rounded-3 overflow-hidden p-4 tent-camping-container">
                              <div class="d-flex mb-4">
                                 <div class="fw-bold fs-5 ">
                                    <p class="tent-camping-cap"></p>
                                    <a href="about" class="text-decoration-none text-dark">Adventure and climbing</a>
                                 </div>
                                 <div>
                                    <p class="explore-arrow rounded-circle mt-4">
                                       <i class="fa fa-arrow-right fa_right text-white" aria-hidden="true"></i>
                                    </p>
                                 </div>
                              </div>
                              <div class="tent-para">
                                 <p class="text-secondary fs-6">Rock climbing is a physically and mentally demanding sport</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- slider container end -->
                     <!-- slider container4 start -->
                     <div>
                        <div class="rounded-2 m-3 bg-explore-slider bg-explore-slider4">
                           <!-- trby -->
                           <div class="bg-white rounded-3 overflow-hidden p-4 tent-camping-container">
                              <div class="d-flex mb-4">
                                 <div class="fw-bold fs-5 ">
                                    <p class="tent-camping-cap"></p>
                                    <a href="about" class="text-decoration-none text-dark">Couple camping or cabin</a>
                                 </div>
                                 <div>
                                    <p class="explore-arrow rounded-circle mt-4">
                                       <i class="fa fa-arrow-right fa_right text-white" aria-hidden="true"></i>
                                    </p>
                                 </div>
                              </div>
                              <div class="tent-para">
                                 <p class="text-secondary fs-6">to disconnect from technology and reconnect with nature</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- slider container end -->
                     <!-- slider container5 start -->
                     <div>
                        <div class="rounded-2 m-3 bg-explore-slider bg-explore-slider5">
                           <!-- trby -->
                           <div class="bg-white rounded-3 overflow-hidden p-4 tent-camping-container">
                              <div class="d-flex mb-4">
                                 <div class="fw-bold fs-5 ">
                                    <p class="tent-camping-cap"></p>
                                    <a href="about" class="text-decoration-none text-dark">Mountain <br> climbing</a>
                                 </div>
                                 <div>
                                    <p class="explore-arrow rounded-circle mt-4">
                                       <i class="fa fa-arrow-right fa_right text-white" aria-hidden="true"></i>
                                    </p>
                                 </div>
                              </div>
                              <div class="tent-para">
                                 <p class="text-secondary fs-6">Climbing mountains will teach you patience, persistence and gratitude.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- slider container end -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- explore section end -->
      <!-- great section started -->
      <section class="mt-5 pt-5">
         <div class="container-fluid bg-great">
            <div class="row">
               <div class="col-md-6">
                  <div>
                     <!-- great section zoom -->
                     <div class="floating p-3  rounded-3">
                        <img class="" src="img/logo-small-white.png">
                     </div>
                     <div class="overflow-hidden rounded-5 great-img-box1 ">
                        <img src="img/tour-5.jpg" height="561px" width="515px">
                     </div>
                     <div class="rounded-5 shadow d-inline-block p-2 great-img-box2-container">
                        <div class="overflow-hidden rounded-5 great-img-box2">
                           <img src="img/tour-2i.jpg" height="202px" width="236px">
                        </div>
                     </div>
                     <div class="p-2 bg-white shadow rounded-3 d-inline-block great-year">
                        <div class="border border-2 border-success ps-4 pt-2 pb-2 d-inline-block rounded-3">
                           <div class="d-flex ">
                              <div class="display-4 text-color fw-bold">28</div>
                              <div class="text-secondary text-bold fs-5 mt-2  pe-3 lh-sm ms-3">Years of<br> experience</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Popular Activities</button>
                  <p class="fw-bold display-5 mt-3">Great opportunity for adventure & travels</p>
                  <div class="d-flex mt-5">
                     <div class="mt-3 me-4 ">
                        <img src="img/checkflower.PNG">
                     </div>
                     <div>
                        <p class="bg-white rounded-circle p-3 shadow me-4">
                           <img src="img/helmet.png" height="40px" width="40px">
                        </p>
                     </div>
                     <div>
                        <p class="fw-bold fs-5 lh-sm">Safety first always</p>
                        <p class="text-secondary text-bold fs-6 lh-sm">It's necessary to remember Safety1st because it can ultimately save lives</p>
                     </div>
                  </div>
                  <div class="d-flex mt-4">
                     <div class="mt-3 me-4 ">
                        <img src="img/checkflower.PNG">
                     </div>
                     <div>
                        <p class="bg-white rounded-circle p-3 shadow me-4">
                           <img src="img/best-price.png" height="40px" width="40px">
                        </p>
                     </div>
                     <div>
                        <p class="fw-bold fs-5 lh-sm">Low price & friendly</p>
                        <p class="text-secondary text-bold fs-6 lh-sm">The selling price is how much a buyer pays for a product or service</p>
                     </div>
                  </div>
                  <div class="d-flex mt-4">
                     <div class="mt-3 me-4 ">
                        <img src="img/checkflower.PNG">
                     </div>
                     <div>
                        <p class="bg-white rounded-circle p-3 shadow me-4">
                           <img src="img/travel.png" height="40px" width="40px">
                        </p>
                     </div>
                     <div>
                        <p class="fw-bold fs-5 lh-sm">Trusted travel guide</p>
                        <p class="text-secondary text-bold fs-6 lh-sm">a book of information about a place designed for the use of visitors or tourists</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- great section end -->
      <!-- feel real section started -->
      <section class="mt-5 pt-5">
         <div class="container-fluid">
            <div class="row m-4 bg-feel rounded-4 pb-5">
               <div class="text-center pt-5">
                  <button class=" pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold" style="background-color: #222823; color: #dd851e;">Popular Activities</button>
               </div>
               <h1 class="text-white mt-4 mb-5 fw-bold text-center display-5">Feel real adventure and very<br> close to nature</h1>
               <div class="col-md-4">
                  <div class="bg-white rounded-3 p-4">
                     <div class="d-flex feel-list-box p-3 mb-4 rounded-3">
                        <div>
                           <img src="img/tent.png" height="32px" width="32px">
                        </div>
                        <div class="ms-3 fw-bold mt-1 fs-5">Tent camping</div>
                     </div>
                     <div class="d-flex mb-4 feel-list-box p-3 rounded-3">
                        <div>
                           <img src="img/travel (1).png" height="32px" width="32px">
                        </div>
                        <div class="ms-3 fw-bold mt-1 fs-5">Adevnture travel</div>
                     </div>
                     <div class="d-flex mb-4 feel-list-box p-3 rounded-3">
                        <div>
                           <img src="img/cycling.png" height="32px" width="32px">
                        </div>
                        <div class="ms-3 fw-bold mt-1 fs-5">Mountain biking</div>
                     </div>
                     <div class="d-flex mb-4 feel-list-box p-3 rounded-3">
                        <div>
                           <img src="img/travel (2).png" height="32px" width="32px">
                        </div>
                        <div class="ms-3 fw-bold mt-1 fs-5">Discovery World</div>
                     </div>
                     <div class="d-flex mb-4 feel-list-box p-3 rounded-3">
                        <div>
                           <img src="img/fishing.png" height="32px" width="32px">
                        </div>
                        <div class="ms-3 fw-bold mt-1 fs-5">Fishing and swimming</div>
                     </div>
                     <div class="d-flex feel-list-box p-3 rounded-3">
                        <div>
                           <img src="img/hiking.png" height="32px" width="32px">
                        </div>
                        <div class="ms-3 fw-bold mt-1 fs-5">Mountain hiking</div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div>
                     <img src="img/camp (1).png" height="116px" width="116px">
                     <h3 class="text-white fw-bold mt-3">Real adventure & enjoy your dream tours</h3>
                     <p class="text-secondary mt-4 fs-6 text-bold">Sit amet consectetur velit integer tincidunt<br> scelerisque volutpat neque fermeny massa<br> lacus.</p>
                     <img class="mt-3" src="img/people.png" height="50px" width="253px">
                     <div class="mt-4  text-white progress-etc"><span>Satisfication Clients</span><span class="ninefive">89%</span></div>
                     <div class="progress  mt-3">
                        <div  class="progress-bar  border border-none rounded-0" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="40" style="width: 89%;">
                        </div>
                     </div>
                     <div class="mt-4  text-white progress-etc"><span>Saccess rate</span><span class="ninefive">86%</span></div>
                     <div class="progress  mt-3 ">
                        <div  class="progress-bar  border border-none rounded-0" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="40" style="width: 86%;">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-5">
                  <div>
                     <img class="img-fluid rounded-3 mb-5" src="img/image-06.jpg">
                  </div>
               </div>
            </div>
            <!-- QUISEQUE card start -->
            <div class="bg-quiseque p-5 ms-4 me-4  rounded-4 row">
               <!-- <div class="row"> -->
               <div class="col-md-1">
                  <img src="img/travel (3).png">
               </div>
               <div class="col-md-9">
                  <a class="text-white text-decoration-none">QUISEQUE VEL ORTOR</a>
                  <h1 class="text-white fw-bold">Ready to adventure and enjoy natural</h1>
               </div>
               <div class="col-md-2">
                  <button class="btn btn-light fw-bold fs-6 pt-3 pb-3 ps-4 pe-4 mt-2 "><a href="about" class="text-decoration-none text-dark">Explore More</a></button>
               </div>
               <!-- </div> -->
            </div>
            <!-- QUISEQUE card end -->
         </div>
      </section>
      <!-- feel real section end -->
      <!-- amazing tour section started -->
      <section>

         <div class="container-fluid bg-amazing mt-5">
            <div class="row">
               <div class="text-align-center mt-5 justify-content-center d-flex">
                  <button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Featured Tours</button>
               </div>
               <h1 class="text-center fw-bold mt-4 mb-4 display-5">Amazing tour places around the world</h1>
               <div>
                  <div class="slider">
                     <?php
                        foreach ($fetch as $value) {
                        	// print_r($value);
                        	// multiple image explode
                        	$fileview = explode(",", $value['tour_photo']);
                        	// print_r($fileview);
                        	//only one image fetch
                        	foreach ($fileview as $fileview_main) {
                        		// echo $fileview_main;
                        	}
                        	// echo $fileview_main;
                        ?>
                     <div>
                        <a href="tour_book/<?php echo $value['id'] ?>" class="text-decoration-none">
                           <!-- content -->
                           <div class="border rounded-3 m-3 amazing-box-cont">
                              <img class="rounded-3" src="Panel/img/<?php echo $fileview_main; ?>" height="321px" width="299px">
                           </div>
                           <div class="amazing-box rounded-3 m-3 pt-2 ">
                              <div class="d-flex justify-content-between m-3">
                                 <button class="rounded-3 text-white border-0 amazing-featured px-2">FEATURED</button>
                                 <button style="background-color: #00000066;" class="rounded-3 float-end  text-white border-0  px-1"><a href="https://wa.me/?text=http://thestylesafari.in/travler/tour_book/<?php echo $value['id']; ?>" target="_blank"><i class="fa-solid fa-share text-color"></i></a></button>
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
                        <div class="slide-d ">
                        </div>
                        </div>
                        <!-- content end -->
                        </a>
                     </div>
                     <?php  }?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- amazing tour section started -->
      <!-- best security card section start -->
      <section class="best-security" style="margin-top: -20%; z-index: 100; position: relative;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4">
                  <div class="top-to-b-box shadow border  rounded-3">
                     <div class="top-to-b rounded-3">
                     </div>
                     <div class="d-flex  p-4">
                        <div>
                           <img class="mt-3 me-4 img-best-color" src="img/rabbit (1).png" height="54px" width="54px">
                           <img class="mt-3 me-4 img-best" src="img/rabbit.png" height="54px" width="54px">
                        </div>
                        <div>
                           <h5 class="fw-bold">Best Security</h5>
                           <p class=" text-bold2 fs-6">debt securities, equity securities and hybrid securities</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="top-to-b-box shadow border  rounded-3">
                     <div class="top-to-b rounded-3">
                     </div>
                     <div class="d-flex  p-4">
                        <div>
                           <img class="mt-3 me-4 img-best-color" src="img/wifi-router.png" height="54px" width="54px">
                           <img class="mt-3 me-4 img-best" src="img/wifi-router (1).png" height="54px" width="54px">
                        </div>
                        <div>
                           <h5 class="fw-bold">Free Internet</h5>
                           <p class=" text-bold2 fs-6">The internet has made it possible to share images, files.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="top-to-b-box shadow border  rounded-3">
                     <div class="top-to-b rounded-3">
                     </div>
                     <div class="d-flex  p-4">
                        <div>
                           <img class="mt-3 me-4 img-best-color" src="img/solar-energy.png" height="54px" width="54px">
                           <img class="mt-3 me-4 img-best" src="img/solar-energy (1).png" height="54px" width="54px">
                        </div>
                        <div>
                           <h5 class="fw-bold">Solar Energy</h5>
                           <p class=" text-bold2 fs-6">Solar energy is commonly used for solar water heaters and house heating.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="top-to-b-box shadow border  rounded-3">
                     <div class="top-to-b rounded-3">
                     </div>
                     <div class="d-flex  p-4">
                        <div>
                           <img class="mt-3 me-4 img-best-color" src="img/cycling.png" height="54px" width="54px">
                           <img class="mt-3 me-4 img-best" src="img/cycling (1).png" height="54px" width="54px">
                        </div>
                        <div>
                           <h5 class="fw-bold">Mountain Biking</h5>
                           <p class=" text-bold2 fs-6">Mountain biking is the sport of riding bicycles off-road.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="top-to-b-box shadow border  rounded-3">
                     <div class="top-to-b rounded-3">
                     </div>
                     <div class="d-flex  p-4">
                        <div>
                           <img class="mt-3 me-4 img-best-color" src="img/fishing (1).png" height="54px" width="54px">
                           <img class="mt-3 me-4 img-best" src="img/fishing (2).png" height="54px" width="54px">
                        </div>
                        <div>
                           <h5 class="fw-bold">Swimming & Fishing</h5>
                           <p class=" text-bold2 fs-6">Swimming is a popular exercise and sport, As exercise</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="top-to-b-box shadow border  rounded-3">
                     <div class="top-to-b rounded-3">
                     </div>
                     <div class="d-flex  p-4">
                        <div>
                           <img class="mt-3 me-4 img-best-color" src="img/gym.png" height="54px" width="54px">
                           <img class="mt-3 me-4 img-best" src="img/gym (1).png" height="54px" width="54px">
                        </div>
                        <div>
                           <h5 class="fw-bold">GYM and Yoga</h5>
                           <p class=" text-bold2 fs-6">Gym training is remarkable for losing weight quickly.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- best security card section end -->
      <!-- ready to trevel section start -->
      <section class="mt-5 pt-5">
         <div class="container-fluid bg-ready">
            <div class="row">
               <div class="col-md-7 mb-5 pb-5">
                  <div class="play-btn-box">
                     <div class="wrapper">
                        <div class="video-main">
                           <div class="promo-video">
                              <div class="waves-block">
                                 <div class="waves wave-1"></div>
                                 <div class="waves wave-2"></div>
                                 <div class="waves wave-3"></div>
                              </div>
                           </div>
                           <a href="https://www.youtube.com/watch?v=DWuveNWHnNI" class="video video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
                        </div>
                     </div>
                  </div>
                  <div>gh</div>
                  <p class="p-2 ms-4 fs-6 text-bold are-ready rounded-3 d-inline-block"> Are you ready to travel? </p>
                  <h1 class="fw-bold display-5 ms-4 text-white">Ready to travel with real adventure & enjoy natural</h1>
                  <button style="background-color: #63ab45;" class="btn rounded-3 pt-3 pb-3 ps-4 mt-4 ms-4 mb-5 pe-4 text-white fw-bold">Check Availability</button>
               </div>
               <div class="col-md-5 ">
                  <div class="row mt-5 pt-5">
                     <div class="col-md-6">
                        <div class="ready-box-icon  rounded-3">
                           <div class=" rounded-3  ready-container-icon text-white">
                              <div class="deer-box-ready rounded-3  ">
                                 <div class="text-align-center justify-content-center d-flex">
                                    <img class="deerimg text-center" src="img/deer.png" >
                                 </div>
                                 <h5 class="text-white  fw-bold mt-3 text-center">Wildlife<br>Tours</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="ready-box-icon  rounded-3">
                           <div class=" rounded-3  ready-container-icon text-white">
                              <div class="deer-box-ready rounded-3  ">
                                 <div class="text-align-center justify-content-center d-flex">
                                    <img class="deerimg text-center" src="img/paragliding.png" >
                                 </div>
                                 <h5 class="text-white  fw-bold mt-3 text-center">Paragliding<br>Tours</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6" style="margin-top: 230px">
                        <div class="ready-box-icon  rounded-3">
                           <div class=" rounded-3  ready-container-icon text-white">
                              <div class="deer-box-ready rounded-3  ">
                                 <div class="text-align-center justify-content-center d-flex">
                                    <img class="deerimg text-center" src="img/goal.png" >
                                 </div>
                                 <h5 class="text-white  fw-bold mt-3 text-center">Adventure<br>Tours</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6" style="margin-top: 230px">
                        <div class="ready-box-icon  rounded-3">
                           <div class=" rounded-3  ready-container-icon text-white">
                              <div class="deer-box-ready rounded-3  ">
                                 <div class="text-align-center justify-content-center d-flex">
                                    <img class="deerimg text-center" src="img/hang-gliding.png" >
                                 </div>
                                 <h5 class="text-white  fw-bold mt-3 text-center">Hang Gliding<br>Tours</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="row ">
                     <div class="row deer-box-row">
                     <div class="col-md-6" >
                     <div class="ready-box-icon  rounded-3">
                     	<div class=" rounded-3  ready-container-icon text-white">
                     	<div class="deer-box-ready rounded-3  ">
                     		<div class="text-align-center justify-content-center d-flex">
                     			<img class="deerimg text-center" src="img/goal.png" >
                     		</div>
                     		<h5 class="text-white  fw-bold mt-3 text-center">Adventure<br>Tours</h5>
                     	</div>
                     	</div>
                     </div>
                     </div>
                     
                     <div class="col-md-6">
                     <div class="ready-box-icon  rounded-3">
                     	<div class=" rounded-3  ready-container-icon text-white">
                     	<div class="deer-box-ready rounded-3  ">
                     		<div class="text-align-center justify-content-center d-flex">
                     			<img class="deerimg text-center" src="img/hang-gliding.png" >
                     		</div>
                     		<h5 class="text-white  fw-bold mt-3 text-center">Hang Gliding<br>Tours</h5>
                     	</div>
                     	</div>
                     </div>
                     </div>	 
                     </div>
                     </div> -->
               </div>
            </div>
         </div>
      </section>
      <!-- ready to trevel section end -->
      <!-- destination place section start -->
      <section>
         <div class="container-fluid mt-4">
            <div class="row">
               <div class="mt-5 d-flex text-align-center justify-content-center">
                  <button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Destination lists</button>
               </div>
               <h1 class="text-center fw-bold display-5 mt-3">Go Exotic Places</h1>
               <?php 
                  // destination view data 
                  $destination_fetch = destination_and_tour_view();
                  $i = 0;
                  foreach($destination_fetch as $destination_value){
                  	$i++;
                  // print_r($destination_value);
                  ?>
               <!-- turnery operator -->
               <!-- <div class="col-md-<?php // echo $i== 2?'6': '3';?>"> -->
               <div class="col-md-<?php  echo $i== 2?'6': '3';?> p-3">
                  <div class="border rounded-3 destination-box overflow-hidden">
                     <img src="Panel/<?php echo $destination_value['destination_photo']; ?>" alt="Responsive image" class="rounded-3 destination_img">
                     <div class="destination-inner-box border rounded-3" >
                        <div class="d-flex flex-row-reverse p-3">
                           <a href="destination_tours/<?php echo $destination_value['destination_name'] ?>"><button class=" rounded-3 tour-3 py-1 px-4 text-white  border-0"><?php echo $destination_value['matched_tours_count']; ?> Tour</button></a>
                        </div>
                        <div class="mt-5 pt-5">
                           <p class="text-color text-bold ms-4 lh-sm fs-5">Travel to</p>
                           <h4 class="text-white fw-bold lh-sm ms-4 "><a class="text-decoration-none text-white" href="destination_tours?destination_name=<?php echo $destination_value['destination_name'] ?>" ><?php echo $destination_value['destination_name']; ?></a></h4>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
      <!-- destination place section end -->
      <!-- achievements section start -->
      <section>
         <div class="container-fluid mt-5 pt-5">
            <div class="row">
               <div>
                  <div class="text-white py-2 px-3 company-achievements text-bold2 fs-5">Company Fact</div>
               </div>
               <h1 class="display-1 fw-bold mt-3 text-center">ACHIEVEMENTS</h1>
               <div class="col-md-3">
                  <div class="shadow rounded-3 m-2 icon-box-achieve">
                     <div class="text-align-center justify-content-center d-flex">
                        <div class="rounded-circle p-5 mt-5 mb-4 ">
                           <img class="icon-img-achive-color" src="img/hiking.png">
                           <img class="icon-img-achive" src="img/hiking (1).png" alt="">
                        </div>
                     </div>
                     <h1 class="display-6 fw-bold text-center">3500+</h1>
                     <p class="text-bold2 text-secondary text-center pb-4 fs-5">Happy Traveler</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="shadow rounded-3 m-2 icon-box-achieve">
                     <div class="text-align-center justify-content-center d-flex">
                        <div class="rounded-circle p-5 mt-5 mb-4 ">
                           <img class="icon-img-achive-color" src="img/tent.png">
                           <img class="icon-img-achive" src="img/tent (1).png" alt="">
                        </div>
                     </div>
                     <h1 class="display-6 fw-bold text-center">1650+</h1>
                     <p class="text-bold2 text-secondary text-center pb-4 fs-5">Tours success</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="shadow rounded-3 m-2 icon-box-achieve">
                     <div class="text-align-center justify-content-center d-flex">
                        <div class="rounded-circle p-5 mt-5 mb-4 ">
                           <img class="icon-img-achive-color" src="img/reviews.png">
                           <img class="icon-img-achive" src="img/reviews (1).png" alt="">
                        </div>
                     </div>
                     <h1 class="display-6 fw-bold text-center">99.5%</h1>
                     <p class="text-bold2 text-secondary text-center pb-4 fs-5">Positive Reviews</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="shadow rounded-3 m-2 icon-box-achieve">
                     <div class="text-align-center justify-content-center d-flex">
                        <div class="rounded-circle p-5 mt-5 mb-4 ">
                           <img class="icon-img-achive-color" src="img/badge.png">
                           <img class="icon-img-achive" src="img/badge (1).png" alt="">
                        </div>
                     </div>
                     <h1 class="display-6 fw-bold text-center">62k+</h1>
                     <p class="text-bold2 text-secondary text-center pb-4 fs-5">Awards Winning</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- achievements section end -->
      <!-- our testimonal section started -->
      <section>
         <div class="container-fluid bg-ourtestimonal py-5 mt-5">
            <div class="row pb-5">
               <div class="col-md-5">
                  <button class=" bg-light pt-2 ms-4 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Our Testimonals</button>
                  <h1 class="display-5  ms-4 mt-4 fw-bold">What they’re talking about our policy</h1>
                  <p class="text-secondary text-bold ms-4 my-3">We Provide You Best Service And Great Adventure.</p>
                  <button class="btn py-3 px-4 fw-bold text-white bg-color ms-4 mt-4 rounded-3">All Testimonals</button>
               </div>
               <div class="col-md-7 ">
                  <div class="rounded-3 shadow ms-5 me-4 bg-white Testimonals-msg">
                     <div class="bg-color quote-icon">
                        <img src="img/quote.png">
                     </div>
                     <div class="ms-5 star-box">
                        <i class="fa-solid fa-star text-color"></i>
                        <i class="fa-solid fa-star text-color"></i>
                        <i class="fa-solid fa-star text-color"></i>
                        <i class="fa-solid fa-star text-color"></i>
                        <i class="fa-solid fa-star text-color"></i>
                     </div>
                     <p class="text-bold2 ms-5 mb-5 fs-5 mt-4"> It was really awesome. Trek itself was beautiful but most importantly trek leader made it a memorable experience as such, even the fun activity was quite insightful in understanding my group dynamics ... </p>
                     <img class="img-testimonal" src="img/tri.PNG">
                  </div>
                  <div class="d-flex testimonals-outer-box">
                     <div class="rounded-circle p-2 me-4" style=" border: 3px solid #63ab45;">
                        <img class="rounded-circle" src="img/testimonial.jpg" height="68px" width="68px">
                     </div>
                     <div>
                        <h5 class="lh-sm mt-3">Shuruti</h5>
                        <p class="text-secondary lh-sm">Customer</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- our testimonal section end -->
      <!-- recent news section start -->
      <section>
         <div class="container-fluid mt-5 pt-5">
            <div class="row ">
               <div class="col-md-10">
                  <div class="  ms-4 ">
                     <button class=" bg-light pt-2 pb-2 ps-3 pe-3 rounded-2 border-0 text-color text-bold">Recent News Feed</button>
                     <h1 class="fw-bold display-5 my-4">Amazing News & Blog For <br> Every Single Update</h1>
                  </div>
               </div>
               <div class="col-md-2">
                  <button class="border-0 rounded-3 bg-color py-3 px-4 mt-5 ms-5 fw-bold"><a href="about" class="text-white text-decoration-none">View More</a></button>
               </div>
            </div>
            <div class="row">
               <div>
                  <div class="multiple-items">
                     <?php
                        $bolg_fetch = Blog_view();
                        date_default_timezone_set('Asia/Calcutta'); 

                        foreach ($bolg_fetch as $bolg_value) {
                        	// print_r($bolg_value);
                        	// echo $bolg_value['blog_Category'];
                        ?>
                     <div>
                        <!-- blog content -->
                        <div class="bg-white recent-box shadow border rounded-3 m-3 p-3">
                           <div class="p-3 bg-color text-white dec-19">
                              <?php echo date("d"); ?><br>
                              <?php echo date("M"); ?>
                           </div>
                           <img class="rounded-3" src="Panel/<?php echo $bolg_value['blog_photo']; ?>" height="272px" width="378px">
                           <div class="py-1 ms-4 px-3 d-inline-block text-bold text-white recent-life"><?php echo $bolg_value['blog_Category']; ?></div>
                           <div class="text-secondary text-bold ms-3">
                              <i class="fa-solid fa-circle-user text-color me-1"></i>Admin
                              <i class="fa-solid fa-comments text-color me-1"></i><a href="blog_comment_view/<?php echo $bolg_value['id'] ?>" class="text-decoration-none text-secondary"><?php echo $bolg_value['comment_match_count'] ?> Comments</a>
                           </div>
                           <h4 class=" ms-3 my-3"><a href="blog/<?php echo $bolg_value['id'] ?>" class="text-decoration-none"><?php echo $bolg_value['blog_name']; ?></a></h4>
                           <p class="text-secondary text-bold ms-3"><?php echo $bolg_value['blog_description']; ?></p>
                           <div class="recent_read text-bold ms-3"><a href="blog/<?php echo $bolg_value['id'] ?>" class="text-decoration-none text-secondary">Read More <i class="fa-solid fa-arrow-right text-color"></i></a></div>
                        </div>
                        <!--blog content end -->
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- recent news section start -->
      <!-- descovery land section start -->
      <section class="">
         <div class="container-fluid ">
            <div class="row">
               <div class="mt-5 descovery-sec">
                  <div class="slider-2 ">
                     <?php 
                        $fetch_model_img = tour_view();
                        foreach ($fetch_model_img as  $value_model_img) {
                        	$value_model_img_main = explode(",", $value_model_img['tour_photo']);
                        	foreach ($value_model_img_main as  $value_model_img_view) {
                        		
                        	}
                        
                        
                        ?>
                     <div class="col-md-3">
                        <div class="descovery-box">
                           <div >
                              <img id="<?php echo $value_model_img['id']; ?>-img"  class="rounded-3 descovery-img " src="Panel/img/<?php echo $value_model_img_view; ?>" height="257px" width="240px">
                           </div>
                           <div class="descovery-box-i">
                              <div class="text-align-center justify-content-center d-flex">
                                 <div>
                                    <!-- model btn -->
                                    <button type="button" data-id="<?php echo $value_model_img['id']; ?>" class="pop btn border-0 mt-5 rounded-circle p-3 text-white" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color: #f7921e;" ><i class="fa-solid fa-plus fw-bolder fa-lg"></i></button>
                                    <!-- modal btn -->
                                 </div>
                              </div>
                              <h5 class="fw-bold mt-3 text-white text-center">Discovery Island</h5>
                              <!-- <p class="text-danger position-absolute stud_id" style="margin-top: -30px;"><?php //echo $value_model_img['id']; ?></p> -->
                              <p class="text-bold text-white text-center"> ADVENTURE</p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- descovery land section start -->
      <?php include('include/footer.php'); ?>
      <!-- slick slider js start-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script type="text/javascript">
         // pop up js
           $(document).on("click", ".pop", function (e) {
                  	e.preventDefault();
                       var myBookId = $(this).data('id');
                       console.log(myBookId);
                        var a = $('#'+myBookId+'-img').attr('src');
                  
                        console.log(myBookId+'-img');
                          	 // $("#im").html(a);
                          document.getElementById("im").src=a;
                   
                  });
         
         
         // slider js 
         
           $('.slider').slick({
           // dots: true,
           infinite: true,
           speed: 300,
           // autoplay:true,
           autoplaySpeed: 1000,
           slidesToShow: 4,
           slidesToScroll: 1,
           responsive: [
             {
               breakpoint: 1024,
               settings: {
                 slidesToShow: 3,
                 slidesToScroll: 3,
                 infinite: true,
                 dots: true
               }
             },
             {
               breakpoint: 600,
               settings: {
                 slidesToShow: 2,
                 slidesToScroll: 2
               }
             },
             {
               breakpoint: 480,
               settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1
               }
             }
             // You can unslick at a given breakpoint now by adding:
             // settings: "unslick"
             // instead of a settings object
           ]
         });
         
           // slider-2 js start
         
           $('.slider-2').slick({
           // dots: true,
           infinite: true,
           speed: 300,
           // autoplay:true,
           autoplaySpeed: 1000,
           slidesToShow: 5,
           slidesToScroll: 1,
           responsive: [
             {
               breakpoint: 1024,
               settings: {
                 slidesToShow: 3,
                 slidesToScroll: 3,
                 infinite: true,
                 dots: true
               }
             },
             {
               breakpoint: 600,
               settings: {
                 slidesToShow: 2,
                 slidesToScroll: 2
               }
             },
             {
               breakpoint: 480,
               settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1
               }
             }
             // You can unslick at a given breakpoint now by adding:
             // settings: "unslick"
             // instead of a settings object
           ]
         });
         
           $('.multiple-items').slick({
           infinite: true,
           slidesToShow: 3,
           slidesToScroll: 3
         });
      </script>	
      <!-- slick slider js end-->
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