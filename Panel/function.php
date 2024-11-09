<?php  
// admin login code start
function login(){
// login function code start
include('config/connection.php');
session_start();
if (isset($_POST['signin'])) {
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];

$select = "select * from admin_login where email = '$admin_email' AND password = '$admin_password'  ";
$query = mysqli_query($conn, $select);
$fetch = mysqli_fetch_array($query);
$num = mysqli_num_rows($query);

$_SESSION['admin_id'] = $fetch['id'];
echo $_SESSION['admin_name'] = $fetch['name'];

if ($num > 0) {
header('location: index.php');
}else{
    echo "<script>alert('login failed');</script>";
    echo "<script> window.location.href='signin.php'</script>"; 
    }
  }
}
// admin login  code end



// admin logout start
function logout(){
	include('config/connection.php');
	session_start();
	session_destroy();
}
// admin logout end



// tour form function and code start

function tour_form(){
include('config/connection.php');
if (isset($_POST['submit_tour'])) {

 $tour_name = $_POST['tour_name'];	
 $tour_location = $_POST['tour_location'];	
 $tour_price = $_POST['tour_price'];	
 $destination_name = $_POST['destination_name'];	
 $tour_days = $_POST['tour_days'];	
 $people = $_POST['people'];	
 $Min_age = $_POST['Min_age'];
$day1 = $_POST['day1'];
$day2 = $_POST['day2'];
$day3 = $_POST['day3'];
$day4 = $_POST['day4'];
$day5 = $_POST['day5'];

// tour multiple image insert code start

     $filepaths = [];
    // Configure upload directory and allowed file types
    // DIRECTORY_SEPARATOR is generated to slash '/'
     // $upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif', 'webp', 'avif');
     
    // Define maxsize for tour_photo i.e 10MB
    $maxsize = 10 * 1024 * 1024; 
 
    // Checks if user sent an empty form 
    if(!empty(array_filter($_FILES['tour_photo']['name']))) {
 
       
        // Loop through each file in tour_photo[] array
        foreach ($_FILES['tour_photo']['tmp_name'] as $key => $value) {
             // print_r($_FILES['tour_photo']['tmp_name']);
             $file_tmpname = $_FILES['tour_photo']['tmp_name'][$key];
             $file_name = $_FILES['tour_photo']['name'][$key];
             $file_size = $_FILES['tour_photo']['size'][$key];
             $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
 
            // Set upload file path
            $filepath = $file_name;
 
            // Check file type is allowed or not
            if(in_array(strtolower($file_ext), $allowed_types)) {
 
                // Verify file size - 2MB max 
                if ($file_size > $maxsize)         
                    echo "Error: File size is larger than the allowed limit."; 
 
                // If file with name already exist then append time in
                // front of name of the file to avoid overwriting of file
                if(file_exists($filepath)) {
                    $filepath = time().$file_name;
                     
                    if( move_uploaded_file($file_tmpname, "img/".$filepath)) {
                        $filepaths[] = $filepath;
                        // echo "{$file_name} successfully uploaded <br />";
                    } 
                    else {                     
                        // echo "Error uploading {$file_name} <br />"; 
                        echo "<script>alert('Error uploading {$file_name}');</script>";
                    }
                }
                else {
                 
                    if( move_uploaded_file($file_tmpname, "img/".$filepath)) {
                         $filepaths[] = $filepath;
                        // echo "{$file_name} successfully uploaded <br />";
                    }
                    else {                     
                        // echo "Error uploading {$file_name} <br />"; 
                        echo "<script>alert('Error uploading {$file_name}');</script>";
                    }
                }
            }
            else {
                 
                // If file extension not valid
                // echo "Error uploading {$file_name} "; 
                // echo "({$file_ext} file type is not allowed)<br / >";

                 echo "<script>alert('Error uploading {$file_name} and . {$file_ext} file type is not allowed ');</script>";
            } 
        }

    }
    else {
         
        // If no files selected
        // echo "No files selected.";
        echo "<script>alert('No files selected');</script>";
    }

// tour multiple image insert code end
// $folder = join(",", $filepaths);

$insert = "INSERT INTO `tour_form`(`tour_name`, `tour_photo`, `tour_location`, `tour_price`, `destination_name`, `tour_days`, `people`, `Min_age`, `day1`, `day2`, `day3`, `day4`, `day5`) VALUES ('$tour_name','".join(",", $filepaths)."','$tour_location','$tour_price','$destination_name','$tour_days','$people', '$Min_age', '$day1','$day2','$day3','$day4','$day5')";
$sql = mysqli_query($conn, $insert);

if ($sql) {
	echo "<script>alert(' Submit Successfull');</script>";
  }
 }
}
// tour form function and code end



// tour form view 
function tour_view(){
include('config/connection.php');

$select = "SELECT * FROM `tour_form` order by id DESC";
$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}

// tour form view search 
function tour_view_search(){
include('config/connection.php');

$select = "SELECT * FROM `tour_form` Group By destination_name  ";
$sql = mysqli_query($conn, $select);
$fetch_search = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch_search;
}

// tour form view head
function tour_view_head(){
include('config/connection.php');

$selectq = "SELECT * FROM `tour_form`";
$sqlq = mysqli_query($conn, $selectq);
$fetch_head = mysqli_fetch_all($sqlq, MYSQLI_ASSOC);
return $fetch_head;
}



// travel to destination view start
function destination_and_tour_view(){
include('config/connection.php');

$select = "SELECT 
    td.*,
    COUNT(tf.destination_name) AS matched_tours_count
FROM 
    travler_destination td
LEFT JOIN 
    tour_form tf ON td.destination_name = tf.destination_name
GROUP BY 
    td.destination_name;";
    
$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);

return $fetch;

}
// travel to destination view end




// destination From insert start

function destination_insert(){
include('config/connection.php');
if (isset($_POST['submit_destination'])) {

$destination_name = $_POST['destination_name'];
// destination image insert code
$destination_photo = $_FILES['destination_photo']['name'];
$tempname = $_FILES['destination_photo']['tmp_name'];
$extt = pathinfo($destination_photo, PATHINFO_EXTENSION);
$extt;
$destination_folder = 'img/'. rand(200, 1100000).'.'. $extt;
move_uploaded_file($tempname, $destination_folder);
// destination image insert code end
$destination_language = $_POST['destination_language'];
$destination_description = $_POST['destination_description'];

$insert = "INSERT INTO `travler_destination`(`destination_name`, `destination_photo`, `destination_description`, `destination_language`) VALUES ('$destination_name','$destination_folder','$destination_description', '$destination_language')";
$sql = mysqli_query($conn, $insert);

if ($sql) {
	echo "<script>alert(' Submit Successfull');</script>";
	}
  }
}
// destination From end




// destination view in tour form  start
function destination_view(){
include('config/connection.php');

$select = "SELECT * , count(id) as count FROM `travler_destination` group by destination_name";
$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}
// destination view in tour form  end

//index tour to tour_book code start

function tour_to_tour_view(){
include('config/connection.php');

$id = $_GET['id'];
$select = "SELECT * FROM `tour_form` WHERE id = '$id'";
$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}

//index tour to tour_book code end
// tour view on click destination start
function desti_tours_view(){
include('config/connection.php');

$name = $_GET['destination_name'];
$select = "SELECT * FROM `tour_form` WHERE `destination_name` = '$name'";
$sql = mysqli_query($conn, $select);
$fetchdata = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetchdata;
}
// tour view on click destination end


// destination detail view in destination_tours start

function destination_detali(){
include('config/connection.php');

$name = $_GET['destination_name'];
$select = "SELECT * FROM `travler_destination` WHERE `destination_name` = '$name'";
$sql = mysqli_query($conn, $select);
$fetchd = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetchd;
}

// destination detail view in destination_tours start


// blog insert form start

function blog_insert(){
include('config/connection.php');
if (isset($_POST['submit_blog'])) {

$blog_name  = trim(mysqli_real_escape_string($conn, $_POST['blog_name']));
$blog_photo = trim(mysqli_real_escape_string($conn, $_POST['blog_photo']));

// blog image insert code
$blog_photo = trim(mysqli_real_escape_string($conn, $_FILES['blog_photo']['name']));
$tempname = trim(mysqli_real_escape_string($conn, $_FILES['blog_photo']['tmp_name']));
$blogext = pathinfo($blog_photo, PATHINFO_EXTENSION);
$blogext;
$blog_folder = 'img/'.'blog'.rand(200, 1100000).'.'. $blogext;
move_uploaded_file($tempname, $blog_folder);
// blog image insert code end

$blog_Category = trim(mysqli_real_escape_string($conn, $_POST['blog_Category']));
$blog_description = trim(mysqli_real_escape_string($conn, $_POST['blog_description']));
$blog_about = trim(mysqli_real_escape_string($conn, $_POST['blog_about']));
$blog_testimonial = trim(mysqli_real_escape_string($conn, $_POST['blog_testimonial']));

$insert = "INSERT INTO `travler_blog`(`blog_name`, `blog_photo`, `blog_Category`, `blog_description`, `blog_about`, `blog_testimonial`) VALUES ('$blog_name','$blog_folder','$blog_Category','$blog_description','$blog_about','$blog_testimonial')";
$sql = mysqli_query($conn, $insert);

if ($sql) {
    echo "<script>alert(' Submit Successfull');</script>";
    }
  }
}

// blog insert end

// blog fetch start
function Blog_view(){
include('config/connection.php');
// $select = "SELECT * FROM `travler_blog` order by id desc";
// , COUNT(tb.blog_id) AS matched_tours_count
// echo $select = "SELECT tbc.* FROM travler_blog tbc LEFT JOIN travler_blog_comment tb ON tb.blog_id = tb.blog_id GROUP BY tb.blog_id;";
$select = "SELECT 
    tbb.*,
    COUNT(tbc.blog_id) AS comment_match_count
FROM 
    travler_blog tbb
LEFT JOIN 
    travler_blog_comment tbc ON tbb.id = tbc.blog_id
GROUP BY 
    tbb.id order by id desc;";

$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}
// blog fetch end


// blog category fetch start
function Blog_category(){
include('config/connection.php');

$select = "SELECT * FROM `travler_blog` GROUP BY blog_Category";

$sql = mysqli_query($conn, $select);
$fetch_category = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch_category;
}
// blog category fetch end

// blog page with id fetch start
function Blog_page_view(){
include('config/connection.php');
$id = $_GET['id'];
$select = "SELECT * FROM `travler_blog` WHERE id = '$id' order by id desc";
$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}
// blog page with id fetch end

// blog comment start
function blog_comment(){
include('config/connection.php');
if (isset($_POST['p_comment'])) {

$c_name = trim(mysqli_real_escape_string($conn, $_POST['c_name']));
$c_email = trim(mysqli_real_escape_string($conn, $_POST['c_email']));
$comment = trim(mysqli_real_escape_string($conn, $_POST['comment']));
$blog_id = trim(mysqli_real_escape_string($conn, $_POST['blog_id']));

$insert = "INSERT INTO `travler_blog_comment`(`c_name`, `c_email`, `comment`, `blog_id`) VALUES ('$c_name','$c_email','$comment','$blog_id')";
$sql = mysqli_query($conn, $insert);
if ($sql) {
    echo "<script>alert(' Submit Successfull');</script>";
    }
  }
}
// blog comment end

// contact start
$contact_type_ajax = $_REQUEST['contact_type_ajax'];
$contact_name =  $_REQUEST['contact_name'];
$contact_email =  $_REQUEST['contact_email'];
$contact_phone =  $_REQUEST['contact_phone'];
$contact_subject =  $_REQUEST['contact_subject'];
$contact_msg =  $_REQUEST['contact_msg'];

if ($contact_type_ajax == "contact_type_ajax") {
    contact_insert($contact_name, $contact_email, $contact_phone, $contact_subject, $contact_msg);
}


function contact_insert($contact_name, $contact_email, $contact_phone, $contact_subject, $contact_msg){
include('config/connection.php');
// if (isset($_POST['submit_contact'])) {

// mail code start

 $to = "amankumar879179@gmail.com";
 $subject = $contact_subject;
 // $message =  "$contact_name . $contact_email . $contact_phone . $contact_msg";

 // message mail variable
  $message =  '
<html>
<head>
  <title></title>
</head>
<body>
  <p  style="color: #63ab45;">Contact Details</p>
  <table border="1" cellspacing="2" cellpadding="4"  style="border: 1px solid black;">
    <tr>
      <th>Name</th>
      <td>'.$contact_name.'</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>'.$contact_email.'</td>
    </tr>
    <tr>
      <th>Ph. No.</th>
      <td>'.$contact_phone.'</td>
    </tr>
    <tr>
      <th>Subject</th>
      <td>'.$contact_subject.'</td>
    </tr>
    <tr>
      <th>Message</th>
      <td>'.$contact_msg.'</td>
    </tr>
  </table>
</body>
</html>
';
 // message mail variable end
// mail code end

$insert = "INSERT INTO `travler_contact`(`contact_name`, `contact_email`, `contact_phone`, `contact_subject`, `contact_msg`) VALUES ('$contact_name','$contact_email','$contact_phone','$contact_subject','$contact_msg')";
$sql = mysqli_query($conn, $insert);
if ($sql == true) {
            echo "true";
        }else{
            echo "false";
        }
     $header = "From:thestylesafari.in/travler \r\n";
            $header .= "Cc:thestylesafari.in/travler \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            
            $retval = mail ($to,$subject,$message,$header);

             // if( $retval == true ) {
             //   echo "<script> alert('mail Submitted'); </script>";
             //   }
             //   else{
             //         echo "<script> alert('mail Sent failed'); </script>";
             //      }
  // }
}
// contact end

// comment view start
function comment_view(){
include('config/connection.php');
$id = $_GET['id'];
$select = "SELECT * FROM `travler_blog_comment` WHERE blog_id = '$id' order by id desc";
$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}

// comment view end

// user register start

function user_register(){
include('config/connection.php');
if (isset($_POST['register'])) {

$user_name = trim(mysqli_real_escape_string($conn, $_POST['user_name']));
$user_email = trim(mysqli_real_escape_string($conn, $_POST['user_email']));
        // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$user_password = trim(mysqli_real_escape_string($conn, password_hash($_POST['user_password'], PASSWORD_BCRYPT)));
$user_mobile = trim(mysqli_real_escape_string($conn, $_POST['user_mobile']));

$insert = "INSERT INTO `travler_user_register`(`user_name`, `user_email`, `user_password`, `user_mobile`) VALUES ('$user_name','$user_email','$user_password','$user_mobile')";
$sql = mysqli_query($conn, $insert);
if ($sql) {
    echo "<script>alert(' resiter Successfull');</script>";
    echo "<script>window.location.href='home'</script>";
    }
  }
}

// user register start
// user login start

function user_login(){
include('config/connection.php');

if (isset($_POST['login'])) {
    
$id = $_GET['id'];    
$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];

// query to match email
$select = "SELECT * FROM `travler_user_register` WHERE user_email = '$login_email' ";
$query = mysqli_query($conn, $select);
$num = mysqli_num_rows($query);
$fetch = mysqli_fetch_array($query);

if ($num > 0) {
    // encrypted password
 $hpassword = $fetch['user_password'];
// password match condition
if (password_verify($login_password, $hpassword)) {
    // echo 'Password is valid!';
      echo "<script>alert('login Successfull');</script>";
      if ($id) {
        echo "<script> window.location.href='tour_book/".$id."'</script>"; 
      }else{
        echo "<script> window.location.href='home'</script>"; 
      }
} else {
    // echo 'Invalid password.';
    echo "<script>alert('login failed');</script>";
    if ($id) {
        echo "<script> window.location.href='tour_book/".$id."'</script>"; 
      }else{
        echo "<script> window.location.href='home'</script>"; 
      } 
}
}
 $_SESSION['idd'] = $fetch['id'];
 $_SESSION['user_namee'] = $fetch['user_name'];
 $_SESSION['user_emaile'] = $fetch['user_email'];
 $_SESSION['user_mobilee'] = $fetch['user_mobile'];


 }
}

// user login end

// user logout start
function user_logout(){
    include('config/connection.php');
    session_start();
    session_destroy();
}
// user logout end

// book form start

function book_form(){
include('config/connection.php');
if (isset($_POST['buy_now'])) {

$buyer_name = trim(mysqli_real_escape_string($conn, $_POST['buyer_name']));
$buyer_email = trim(mysqli_real_escape_string($conn, $_POST['buyer_email']));
$buyer_phone = trim(mysqli_real_escape_string($conn, $_POST['buyer_phone']));
$guest = trim(mysqli_real_escape_string($conn, $_POST['guest']));
$ts_date = trim(mysqli_real_escape_string($conn, $_POST['ts_date']));
$tour_id = trim(mysqli_real_escape_string($conn, $_POST['tour_id']));
$login_user_id = trim(mysqli_real_escape_string($conn, $_POST['login_user_id']));

$insert = "INSERT INTO `travler_tour_book`(`buyer_name`, `buyer_email`, `buyer_phone`, `guest`, `ts_date`, `tour_id`, `login_user_id`) VALUES ('$buyer_name','$buyer_email','$buyer_phone','$guest','$ts_date','$tour_id','$login_user_id')";
$sql = mysqli_query($conn, $insert);

$idi = mysqli_insert_id($conn);


if ($sql) {
    echo "<script>alert(' book Successfull ');</script>";
    echo "<script>window.location.href='checkout/".$idi."'</script>";
    }
  }
}

// book form end

// tour book in checkout page start

function checkout_tour_view($idi2){
include('config/connection.php');

$select = "SELECT 
    tbb.*,
    COUNT(tbc.tour_id) AS comment_match_count
FROM 
    tour_form tbb
LEFT JOIN 
    travler_tour_book tbc ON tbb.id = tbc.tour_id WHERE tbc.id = '$idi2'
GROUP BY 
    tbb.id ;";

$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}

// tour book in checkout page start

// checkout data view start

function checkout_view($idi2){
include('config/connection.php');

$select = "SELECT * FROM `travler_tour_book` WHERE id = '$idi2'";

$sql = mysqli_query($conn, $select);
$fetch_ch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch_ch;
}

// checkout data view end


// search function with pagination start

// Function to get total number of items
function getTotalItems() {
    include('config/connection.php');

    $sql = "SELECT COUNT(*) AS total FROM tour_form";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}
// Function to fetch items for a specific page
function getItemsPerPage($conn, $page, $perPage) {
    include('config/connection.php');

    $offset = ($page - 1) * $perPage;
    $sql = "SELECT * FROM tour_form WHERE `tour_location` = '".$_REQUEST['t_location']."' or `destination_name` = '".$_REQUEST['t_destination']."' or `people` < '".$_REQUEST['t_guest']."' LIMIT $offset, $perPage";
    $result = $conn->query($sql);
    $items = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
    }
    return $items;
}

// Function to generate pagination links
function generatePaginationLinks($totalPages, $currentPage) {
    include('config/connection.php');

    $paginationHTML = "<div style='text-align:center;'>";

    if ($currentPage > 1) {
        $paginationHTML .= "<a href='?page=".($currentPage - 1)."'>Previous</a> ";
    }

    // Display first page link
    if ($currentPage > 3) {
        $paginationHTML .= "<a href='?page=1'>1</a> ";
        if ($currentPage > 4) {
            $paginationHTML .= "... ";
        }
    }

    // Display middle page links
    for ($i = max(1, $currentPage - 2); $i <= min($totalPages, $currentPage + 2); $i++) {
        if ($i == $currentPage) {
            $paginationHTML .= "<strong>$i</strong> ";
        } else {
            $paginationHTML .= "<a href='?page=$i'>$i</a> ";
        }
    }

    // Display last page link
    if ($currentPage < $totalPages - 2) {
        if ($currentPage < $totalPages - 3) {
            $paginationHTML .= "... ";
        }
        $paginationHTML .= "<a href='?page=$totalPages'>$totalPages</a> ";
    }

    if ($currentPage < $totalPages) {
        $paginationHTML .= "<a href='?page=".($currentPage + 1)."'>Next</a>";
    }

    $paginationHTML .= "</div>";

    return $paginationHTML;
}
// search function with pagination end

// payment reciept view code

function payment_reciept($login_idp){
include('config/connection.php');

$select = "SELECT * FROM `orders` WHERE loginuser = '$login_idp'";

$sql = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($sql, MYSQLI_ASSOC);
return $fetch;
}

// payment reciept view code end


?>