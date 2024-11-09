<?php
include('Panel/config/connection.php');
// "checking_viewbtn" this button is ajax btn
if (isset($_POST['checking_viewbtn'])) {
    $ajaxidd = $_POST['myBookId'];
    // echo $return = $ajaxidd;
    $select_data = "SELECT * FROM `orders` WHERE id = '$ajaxidd'";
    $sql = mysqli_query($conn, $select_data);
    while ($fetch_data = mysqli_fetch_assoc($sql)) {
        // response is get by echo 
       echo $return = '
      <!--  <h5>Id: '.$fetch_data['id'].'</h5>
        <h5>pId: '.$fetch_data['product_id'].'</h5>
        <h5>pmId: '.$fetch_data['payment_id'].'</h5>
        <h5>name: '.$fetch_data['name'].'</h5> -->


<div class="bg-white shadow p-4 m-4 w-100">
    <div class="receipt_header">
    <h1>Receipt of Sale <span class="fw-bold">Tour & Travler</span></h1>
    <!-- <h2>Address: Lorem Ipsum, 1234-5 <span>Tel: +1 012 345 67 89</span></h2> -->
    </div>
    
    <div class="receipt_body">

        <div class="date_time_con text-center">
            '. $fetch_data['added_date'].'
        </div>
        <div class="fw-bold" style="border-bottom: 1px dashed;">
            Details
        </div>
        <div>
            <table >
                <tr>
                    <td>Name:</td>
                    <td class="text-start">'. $fetch_data['name'].'</td>
                </tr>
                <tr>
                    <td>Ph. No.:</td>
                    <td class="text-start">'. $fetch_data['phone'].'</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td class="text-start">'. $fetch_data['email'].'</td>
                </tr>
                <tr>
                    <td>Payment id:</td>
                    <td class="text-start">'. $fetch_data['payment_id'].'</td>
                </tr>
            </table>
        </div>
        <div>
              <img class="barcode" alt="" src="barcode.php?text='. $fetch_data['product_id'].'&codetype=Code128&orientation=horizontal&size=20&print=false"/>
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
                        <td>'. $fetch_data['productname'].'</td>
                         <td></td>
                        <td>'. $fetch_data['amount'].'</td>
                    </tr>

                </tbody>

                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td>'. $fetch_data['amount'].'</td>
                    </tr>

                </tfoot>

            </table>
        </div>

    </div>

  
    <h3>Thank You!</h3>
        <div class="avoid justify-content-center d-flex">
              <button class="border-0 avoid rounded-2 p-2 text-white bg-color " onclick="window.print()">Print this page</button>
        </div>
</div>



       ';
    }
}

?>