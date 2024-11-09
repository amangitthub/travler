<?php
include('Panel/function.php');
user_logout();
echo "<script>alert('User logout successfull');</script>";
echo "<script>window.location.href='home'</script>";
?>