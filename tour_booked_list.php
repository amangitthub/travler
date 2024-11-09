<?php
   include('Panel/function.php');
   include('Panel/config/connection.php');
   session_start();
    $login_idp = $_SESSION['idd'];
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Tour Booked</title>
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
      .receipt_header {
      padding-bottom: 40px;
      border-bottom: 1px dashed #000;
      text-align: center;
      }
      .receipt_header h1 {
      font-size: 20px;
      margin-bottom: 5px;
      text-transform: uppercase;
      }
      .receipt_header h1 span {
      display: block;
      font-size: 25px;
      }
      .receipt_header h2 {
      font-size: 14px;
      color: #727070;
      font-weight: 300;
      }
      .receipt_header h2 span {
      display: block;
      }
      .receipt_body {
      margin-top: 25px;
      }
      table {
      width: 100%;
      }
      thead, tfoot {
      position: relative;
      }
      thead th:not(:last-child) {
      text-align: left;
      }
      thead th:last-child {
      text-align: right;
      }
      thead::after {
      content: '';
      width: 100%;
      border-bottom: 1px dashed #000;
      display: block;
      position: absolute;
      }
      tbody td:not(:last-child), tfoot td:not(:last-child) {
      text-align: left;
      }
      tbody td:last-child, tfoot td:last-child{
      text-align: right;
      }
      tbody tr:first-child td {
      padding-top: 15px;
      }
      tbody tr:last-child td {
      padding-bottom: 15px;
      }
      tfoot tr:first-child td {
      padding-top: 15px;
      }
      tfoot::before {
      content: '';
      width: 100%;
      border-top: 1px dashed #000;
      display: block;
      position: absolute;
      }
      tfoot tr:first-child td:first-child, tfoot tr:first-child td:last-child {
      font-weight: bold;
      font-size: 20px;
      }
      /*.date_time_con {
      display: flex;
      justify-content: center;
      column-gap: 25px;
      }*/
      .items {
      margin-top: 25px;
      }
      h3 {
      border-top: 1px dashed #000;
      padding-top: 10px;
      margin-top: 25px;
      text-align: center;
      text-transform: uppercase;
      }
      @media print {
      .avoid{
      display: none;
      }
      }
      @media print {
      .avoid_ad{
      visibility: hidden;
      }
      }
      .numbering{
      height: 1.8em;
      width: 1.8em;
      display: inline-block;
      }

.view_reciept{
    position: relative;
}
.view_reciept::after{

    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 1.5px;
    background-color: #000;
    width: 0%;
    transition: all .5s ease-in-out;
}
.view_reciept:hover::after{
    
    width: 100%;
}

   </style>
   <body>
      <div class="avoid">
         <?php include('include/header.php'); ?>
      </div>
      <!-- booked tour list start -->
      <div class="container my-5">
         <div class="row avoid_ad">
            <h3 class="fw-bold pb-3 border-0">My Tours</h3>
            <?php 
               $select_my_tour = "SELECT * FROM `orders` WHERE loginuser = '$login_idp' order by id desc";
               $sql_my_tour = mysqli_query($conn, $select_my_tour);
               $i = 0;
               while($fetch_my_tour = mysqli_fetch_assoc($sql_my_tour)){
                   $i++;
               ?>                      
            <div class="col-md-3 "></div>
            <div class=" col-md-6">
            <div class="rounded-3 shadow-sm p-3 d-flex mx-2 my-1 justify-content-between">
               <div class="rounded-circle bg-color text-center text-white numbering align-item-center ">
                  <?php echo $i; ?>
               </div>
               <!-- <div class="rounded-circle bg-color text-center text-white numbering align-item-center "> -->
                  <?php //echo $fetch_my_tour['id']; ?>
               <!-- </div> -->
               <div class="align-left fw-bold">
                  <?php echo $fetch_my_tour['productname'];?>
               </div>
               <div class="fw-bold">
                  <?php echo $fetch_my_tour['added_date'];?>
               </div>
               <div class="fw-bold">
                  <!-- how to check array -->
                  <?php //echo "b is " . is_array($fetch_my_tour) . "<br>"; ?>
                  <div class="pop" data-id="<?php echo $fetch_my_tour['id']; ?>" data-bs-toggle="modal" data-bs-target="#myModal"><span style="cursor: pointer;" class=" view_reciept">View Reciept</span></div>
               </div>
            </div>
            </div>
            <div class="col-md-3"></div>
            <?php } ?>
         </div>
      </div>
      <!-- booked tour list start -->
      <!-- <div class="container-fluid my-5 "> -->
      <!-- <div class="row"> -->
      <?php
         // $fetch = payment_reciept($login_idp);
         // foreach ($fetch as $value) {
           
         ?>
      <!-- reciept start -->
      <!--  <div class="col-md-4 shadow p-4 m-4">
         <div class="receipt_header">
         <h1>Receipt of Sale <span class="fw-bold">Tour & Travler</span></h1>
         -->  <!-- <h2>Address: Lorem Ipsum, 1234-5 <span>Tel: +1 012 345 67 89</span></h2> -->
      <!--   </div>
         <div class="receipt_body">
         
             <div class="date_time_con text-center">
          -->        <?php //echo $value['added_date']; ?>
      <!--  </div>
         <div class="fw-bold" style="border-bottom: 1px dashed;">
            Details
         </div>
         <div>
            <table >
                <tr>
                    <td>Name:</td>
                    <td class="text-start"><?php // echo $value['name'];?></td>
                </tr>
                <tr>
                    <td>Ph. No.:</td>
                    <td class="text-start"><?php  //echo $value['phone'];?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td class="text-start"><?php  //echo $value['email'];?></td>
                </tr>
                <tr>
                    <td>Payment id:</td>
                    <td class="text-start"><?php  //echo $value['payment_id'];?></td>
                </tr>
            </table>
         </div> -->
      <!--  <div>
         <img class="barcode" alt="" src="barcode.php?text=<?php // echo $value['product_id'];?>&codetype=Code128&orientation=horizontal&size=20&print=false"/>
         </div> -->
      <!--  <div class="items">
         <table>
             <thead>
                 <th>Tour Name</th>
                  <td></td>
                 <th>Price</th>
             </thead>
         
             <tbody>
                 <tr>
                     <td><?php //echo $value['productname']; ?></td>
                      <td></td>
                     <td><?php //echo $value['amount']; ?></td>
                 </tr>
         
             </tbody>
         
             <tfoot>
                 <tr>
                     <td>Total</td>
                     <td></td>
                     <td><?php //echo $value['amount']; ?></td>
                 </tr>
         
             </tfoot>
         
         </table>
         </div> -->
      <!-- </div> -->
      <!-- <h3>Thank You!</h3> -->
      <!-- </div> -->
      <!-- reciept end -->
      <?php// } ?>
      <!-- </div> -->
      <!-- <div class="avoid justify-content-center d-flex">
         <button class="border-0 avoid rounded-2 p-2 text-white bg-color " onclick="window.print()">Print this page</button>
         </div> -->
      <!-- </div> -->
      <div class="avoid">
         <?php include('include/footer.php'); ?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script type="text/javascript">
         $(document).on("click", ".pop", function (e) {
            e.preventDefault();
           // in this line "data('id')" is data-id in modal attribute_id 
              var myBookId = $(this).data('id');
              // console.log(myBookId);
              // html embeed code
              // $("#im").html(myBookId);
                 $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: { 
                        // check in button for response other file btn code.php
                        'checking_viewbtn': true,
                        myBookId: myBookId 
                    },
                    // response is get to code.php
                    success: function(response) {
                        // console.log("Data sent to PHP successfully!");
                        // console.log(response);
                        $('#imm').html(response);
                        $('#myModal').modal('show');
         
                    }
                });
         });
            
      </script>
      <!-- The Modal -->
      <div class="modal" id="myModal">
         <div class="modal-dialog" >
            <div class="modal-content border-0 " style="background-color: transparent;">
               <div class="modal-body ">
                  <div id="imm" >
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- modal end -->
   </body>
</html>