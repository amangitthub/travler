<?php
session_start();
   $fetch_head = tour_view_head();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>header</title>
  <base href="http://thestylesafari.in/travler/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<style type="text/css">

.nav-hov{
  color: #a2828a;
}
.nav-hov:hover{
  color: #63ab45;
}
.navbar .navbar-nav .nav-link {
    padding: 0.5em 1em;
}




</style>
<body>

<div class="bg-header container-fluid">
  <div class="row ">
    <div class="col-md-3 text-white location-head p-2">
      <i class="fa-solid fa-location-dot text-white me-2"></i>250 Main Street, 2nd Floor, Dehradun
    </div>
    <div class="col-md-3  text-white location-head p-2">
      <i class="fa-solid fa-envelope text-white me-2"></i>contact@gmail.com
    </div>
    <div class="col-md-2">
      
    </div>
    <div class="col-md-2 p-2 d-flex justify-content-end">
      <!-- $_SESSION['user_namee'] -->
      <a class="text-white fw-bold text-decoration-none me-2"><?php echo $_SESSION['user_namee']; ?></a>
      <?php 
        if ($_SESSION['idd']) {
         
      ?>
      <a href="user_logout" class="text-white location-head text-decoration-none"> Logout </a> 
    <?php } ?>

      </div>
    <div class="col-md-2 ">
      <div class="p-2 head-icons">
        <a class="text-white  text-decoration-none ms-3"><i class="fa-brands fa-facebook text-white fa-sm"></i></a>
        <a class="text-white  text-decoration-none ms-3"><i class="fa-brands fa-twitter text-white fa-sm"></i></a>
        <a class="text-white  text-decoration-none ms-3"><i class="fa-brands fa-instagram text-white fa-sm"></i></a>
        <a class="text-white  text-decoration-none ms-3 "><i class="fa-brands fa-pinterest text-white fa-sm"></i></a>
      </div>
    </div>
    <!-- <div class="col-md-1"></div> -->
  </div>
</div>
<header>
  <nav class="navbar navbar-expand-md bg-white">
  <div class="container-xxl px-5">
    <a class="navbar-brand" href="#">
      <img src="img/logo_t.png" alt="" >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
        <li class="nav-item">
          <a class="nav-link nav-hov" aria-current="page" href="home" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-hov" href="gallary" >Gallary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-hov" href="about" >About</a>
        </li>
        <li class="nav-item">
          <div class="nav-link  nav-hov tour-list" >Tour<i class="fa-solid fa-caret-down  ms-2"></i>
            <div class="tour-list-box p-3 border rounded-3 bg-white">
              <div>
                <?php 
                foreach ($fetch_head as $value_head) {
              ?>
                <a class="d-block fw-normal  text-decoration-none nav-hov text-lowercase" href="tour_book/<?php echo $value_head['id'] ?>"><?php echo $value_head['tour_name']; ?></a>
              <?php } ?>

              </div>
            </div>
          </div>
        </li>
        <!-- <li class="nav-item dropdown"> -->
          <!-- <li class="dropdown  nav-item">
            <button class=" dropdown-toggle background-none border-0 fw-bold mt-1 pt-1 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"  style="background: none; color: gray; font-size: 17px;">
              Tour
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1 ">
              <?php 
                //foreach ($fetch_head as $value_head) {
              ?>
              <li><a class="dropdown-item" href="tour_book?id=<?php //echo $value_head['id'] ?>" ><?php// echo $value_head['tour_name']; ?></a></li>
            <?php //} ?>
            </ul>
          </li> -->
        
        <li class="nav-item">
          <a href="news" class="nav-link nav-hov">Blog</a>
        </li>
        <li class="nav-item">
          <a href="contact" class="nav-link nav-hov">Contact</a>
        </li>
         <?php 
        if ($_SESSION['idd']) {
         
      ?>
        <li class="nav-item">
          <a href="tour_booked_list" class="nav-link nav-hov">Reciept</a>
        </li>
      <?php } ?>
        <li class="nav-item border-start border-secondary pt-2 px-2">
          <a href="#" class="nav-hov text-decoration-none  "><i class="fa-solid fa-magnifying-glass fa-lg mt-2"  onclick="myFunction()"></i></a>
          <div id="myDIV" class="p-3 bg-white shadow" >
      <div class="d-flex border p-2 search-box">
        <input type="text" name="search" class=" w-75 search-head border-0 rounded-0" placeholder="Search... " >
        <button type="submit" name="search-h" class="bg-transparent border-0"><i class="fa-solid fa-magnifying-glass fa-lg text-color"  ></i></button>
        
      </div>
      </div>
        </li>
        <li class="nav-item  px-2">
          <p class=" rounded-circle user-icon p-2"><i class="fa-regular fa-circle-user fa-lg "  onclick="myFunctionlogin()" ></i></p>
            <div id="mylogin" class="p-3 bg-white border  rounded-3 shadow" >
                 <?php     if (!$_SESSION['idd']) { ?>
                <div class="d-flex  me-5">
                <i class="fa-regular fa-user me-3 mt-2 text-secondary"></i> <p><a href="loginuser" class="text-decoration-none text-secondary" >Login</a></p>
                </div>
              <?php } ?>
                <div class="d-flex me-5">
                <i class="fa-solid fa-user-plus me-3 mt-1 text-secondary"></i> <p><a href="user_register" class="text-decoration-none text-secondary">Register</a></p>
                </div>
                <?php     if ($_SESSION['idd']) { ?>
                <div class="d-flex me-5">
                <i class="fa-solid fa-user-plus me-3 mt-1 text-secondary"></i> <p><a href="user_logout" class="text-decoration-none text-secondary">Logout</a></p>
                </div>
              <?php } ?>
              </div>
        </li>
      </ul>
      <!-- <div class="search-and-icons">
        <form class="d-flex mb-2 me-2" role="search">
          <input class="form-control me-2" type="search" aria-label="Search">
        </form>
        <div class="user-icons d-flex mb-2">
          <div class="profile"><i class="bi bi-person"></i></div>
          <div class="wishlist"><i class="bi bi-heart"></i></div>
          <div class="cart"><i class="bi bi-cart3"></i></div>
        </div>
      </div> -->
      <!-- <div class="contact-info d-md-flex">
        <p>+0987654321 | +1234567890 </p>
        <p><a href="mailto:">contact@domainname.com</a></p>
      </div> -->
    </div>
  </div>
</nav>

</header>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function myFunctionlogin() {
  var x = document.getElementById("mylogin");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</body>
</html>