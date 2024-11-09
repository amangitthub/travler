<?php
include('Panel/function.php');
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

</style>
<body>
	<div class="avoid">
      <?php include('include/header.php'); ?>
  </div>

<div class="container-fluid my-5 ">
	<div class="row">
         <?php
      $fetch = payment_reciept($login_idp);
      foreach ($fetch as $value) {
        
      ?>
    <div class="col-md-4 shadow p-4 m-4">
    <div class="receipt_header">
    <h1>Receipt of Sale <span class="fw-bold">Tour & Travler</span></h1>
    <!-- <h2>Address: Lorem Ipsum, 1234-5 <span>Tel: +1 012 345 67 89</span></h2> -->
    </div>
    
    <div class="receipt_body">

        <div class="date_time_con text-center">
            <?php echo $value['added_date']; ?>
        </div>
        <div class="fw-bold" style="border-bottom: 1px dashed;">
        	Details
        </div>
        <div>
        	<table >
        		<tr>
        			<td>Name:</td>
        			<td class="text-start"><?php  echo $value['name'];?></td>
        		</tr>
        		<tr>
        			<td>Ph. No.:</td>
        			<td class="text-start"><?php  echo $value['phone'];?></td>
        		</tr>
        		<tr>
        			<td>Email:</td>
        			<td class="text-start"><?php  echo $value['email'];?></td>
        		</tr>
        		<tr>
        			<td>Payment id:</td>
        			<td class="text-start"><?php  echo $value['payment_id'];?></td>
        		</tr>
        	</table>
        </div>
        <div>
              <img class="barcode" alt="" src="barcode.php?text=<?php  echo $value['product_id'];?>&codetype=Code128&orientation=horizontal&size=20&print=false"/>
        </div>
        <div class="items">
            <table>
        
                <thead>
                    <!-- <th>QTY</th> -->
                    <th>Tour Name</th>
                     <td></td>
                    <th>Price</th>
                </thead>
        
                <tbody>
                    <tr>
                        <!-- <td>1</td> -->
                        <td><?php echo $value['productname']; ?></td>
                         <td></td>
                        <td><?php echo $value['amount']; ?></td>
                    </tr>

                </tbody>

                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td><?php echo $value['amount']; ?></td>
                    </tr>

                </tfoot>

            </table>
        </div>

    </div>

  
    <h3>Thank You!</h3>

</div>
<?php } ?>



</div>
<div class="avoid justify-content-center d-flex">
    <button class="border-0 avoid rounded-2 p-2 text-white bg-color " onclick="window.print()">Print this page</button>
</div>

</div>



<div class="avoid">
      <?php include('include/footer.php'); ?>
  </div>
  <script>
    // $(document).ready(function() {
    //     // Trigger button click on page load
    //     $('#myButton').click();
    // });
</script>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     // Trigger button click on page load
    //     document.getElementById('myButton').click();
    // });
</script>
</body>
</html>