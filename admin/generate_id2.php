<?php

include('../config/db_config.php');


function generateEntityID1(){
global $fscap_id;

$template = 'XXXXXX9999';
$k = strlen($template);
$sernum ='';
for ($i=0; $i<$k; $i++)
  {
    switch($template[$i])
    {
      case 'X': $sernum .= chr(rand(65,90)); break;
      case '9': $sernum .= rand(0,9); break;
      case '-': $sernum .= '-'; break;
    }
  }
  $fscap_id = $sernum;
  //echo $entity_no;
  checkEntityID1();
}

function checkEntityID1(){

  global $con;
  global $fscap_id;

  $check_objid1_sql = "SELECT * FROM tbl_birthdaylist where objid = :fscap_id";
  $check_objid1_data = $con->prepare($check_objid1_sql);
  $check_objid1_data->execute([':objid' => $fscap_id]);

  $objid_count1 = $check_objid1_data->rowCount();

    if ($objid_count1 == 0){
      echo $fscap_id;

    }else{

      generateEntityID1();
    }
}

    generateEntityID1();

    die();

?>


