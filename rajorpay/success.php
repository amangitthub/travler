<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 ">
                <div class="message-box _success">
                     <!-- <i class="fa fa-check-circle" aria-hidden="true"></i> -->
                     <div>
                         <img src="../img/paymentsuccess.PNG">
                     </div>
                    <h2> Your payment was successful </h2>
                    <p class="mb-3"><b>Payment ID :</b> <?php echo $_SESSION['paymentid'];?></p>
                   <p> Thank you for your payment. we will <br>be in contact with more details shortly </p>   
                </div> 
            <div class="justify-content-center d-flex">
                <a href="http://thestylesafari.in/travler/" class=" btn-home-success py-2 me-3 text-decoration-none  text-white fw-bold rounded-3 bg-color d-inline-block text-center">Home</a>
                <a href="http://thestylesafari.in/travler/tour_booked_list" class="btn-home-success py-2 text-decoration-none  text-white fw-bold rounded-3 bg-color  d-inline-block text-center">My Tour</a>

            </div>
        </div> 
    </div> 
</div> 

</body>
</html>
