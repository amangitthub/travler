<?php 

include('../Panel/config/connection.php');
session_start();
 date_default_timezone_set("Asia/Calcutta");
// data:{product_id:productid,payment_id:paymentid,name_s:name,email_s:payer_email,amount_s:amount,product_name:productname,number_s:payer_number},
$paymentid=$_POST['payment_id'];
$productid=$_POST['product_id'];
$name = $_POST['name_s'];
$payer_email = $_POST['email_s'];
$amount = $_POST['amount_s'];
$productname = $_POST['product_name'];
$payer_number = $_POST['number_s'];
$dt=date('Y-m-d h:i:s');
$loginuserid=$_POST['login_user_id'];

// mail
$subject = "payment details";
     $to = "mailto:amankumar879179@gmail.com, $payer_email";
     
    // $msg =  "productid:" . $productid .
    // "\r\n paymentid:" . $paymentid .
    //  "\r\n current date:" . $dt . 
    //  "\r\n buyer_name:" . $name .
    //  "\r\n buyer_email:" . $payer_email .
    //  "\r\n buyer_contact:" . $payer_number .
    //  "\r\n pay_amount:" . $amount . 
    //  "\r\n tour_name:" . $productname .  "\r\n";
     // message start
          $msg =  '
<html>
<head>
  <title></title>
</head>
<body>
  <p  style="color: #63ab45;">Payment Details</p>
  <table border="1" cellspacing="2" cellpadding="4"  style="border: 1px solid black;">
    <tr>
      <th>Payment ID</th>
      <td>'.$paymentid.'</td>
    </tr>
    <tr>
      <th>Product ID</th>
      <td>'.$productid.'</td>
    </tr>
    <tr>
      <th>Current Date</th>
      <td> '.$dt.'</td>
    </tr>
    <tr>
      <th>Buyer Name</th>
      <td>'.$name.'</td>
    </tr>
    <tr>
      <th>Buyer Email</th>
      <td>'.$payer_email.'</td>
    </tr>
    <tr>
      <th>Buyer Contact</th>
      <td>'.$payer_number.'</td>
    </tr>
    <tr>
      <th>Pay Amount</th>
      <td>'.$amount.'</td>
    </tr>
    <tr>
      <th>Tour Name</th>
      <td>'.$productname.'</td>
    </tr>
  </table>
</body>
</html>
';
     // message end
// mail end

$sql="insert into orders (product_id,payment_id,added_date,name,email,amount,productname,phone,loginuser) values ('".$productid."','".$paymentid."','".$dt."','".$name."','".$payer_email."','".$amount."','".$productname."','".$payer_number."','".$loginuserid."')";

$result=mysqli_query($conn,$sql);

if($result)
{
	echo 'done';
	// mail function strt
	 $header = "mailto:from:thestylesafari.in/travler \r\n";
    $header .= "mailto:cc:thestylesafari.in/travler.in \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$msg,$header);

     if( $retval == true ) {
          ?>
          <script>
             alert('your contact details Submitted');
          </script>
          <?php
                }
          else{
              ?>
          <script>
             alert('contact Failed !!');
          </script>
          <?php
          }
// mail function end

	$_SESSION['paymentid']=$paymentid;
	
}
else 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>