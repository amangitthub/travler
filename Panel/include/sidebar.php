<?php
// include('function.php');
session_start();
//login();


$id = $_SESSION['admin_id'];

if (empty($id)) {

header('location: signin.php');

}
?>

<!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ADMIN PANEL</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Welcome To</h6>
                        <span><?php  echo $n = $_SESSION['admin_name']; ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>HOME</a>
                    
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Log out</a>
                    <a href="tourform.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tour Form</a>
                    <a href="destination_form.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Destination Form</a>
                    <a href="blog_form.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Blog Form</a>



                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->