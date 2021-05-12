<?php

include('../config/db_config.php');


function generateEntityID(){
global $objid;

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
  $objid = $sernum;
  //echo $entity_no;
  checkEntityID();
}

function checkEntityID(){

  global $con;
  global $objid;

  $check_objid_sql = "SELECT * FROM tbl_fscap where fscap_id = :objid";
  $check_objid_data = $con->prepare($check_objid_sql);
  $check_objid_data->execute([':objid' => $objid]);

  $objid_count = $check_objid_data->rowCount();

    if ($objid_count == 0){
      echo $objid;

    }else{

      generateEntityID();
    }
}

    generateEntityID();

    die();

?>


