<?php


session_start();

include('../config/db_config.php');

if (isset($_POST['fullname'])) {
//     echo "<pre>";
//     print_r($_POST);
// echo "</pre>";


$fullname = $_POST['fullname'];

$check_fullname_sql = "SELECT * FROM tbl_birthday where fullname = :fullname";
        
$check_fullname_data = $con->prepare($check_fullname_sql);
$check_fullname_data ->execute([
  ':fullname' => $fullname
]);

if ($check_fullname_data->rowCount() > 0){

  echo '<div style="color: red;"> <b>'.$fullname.'</b> is already in use! </div>';
  }else{
  echo '<div style="color: green;"> <b>'.$fullname.'</b> is avaialable! </div>';
  }

die();

}


