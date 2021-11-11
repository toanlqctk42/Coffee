<?php 
session_start();

unset($_SESSION['uid']);
// if(isset($_SESSION['uid']) && $_SESSION(['uid'])!= NULL)
// {
//     unset($_SESSION['uid']);
//     echo "Đăng xuất thành công";
    header("Location:login.php");
// }
?>