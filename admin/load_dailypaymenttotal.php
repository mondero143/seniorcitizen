<?php
include('../config/db_config.php');

$ornomas =   $_POST['ornomas'];
$barangay =   $_POST['barangay'];

$date_from =  date('Y-m-d', strtotime($_POST['date_from']));
$date_to =    date('Y-m-d', strtotime($_POST['date_to']));




if (isset($ornomas)) {

    $get_all_total_sql = "SELECT t.objidmas,t.id,t.datepayment,t.ornomas,
    t.amountmas,t.masname,r.barangay, sum(t.amountmas) as total
    from masdailypayment t inner join registration r on r.objid = t.id WHERE 
    t.ornomas = '" . $ornomas . "' AND r.barangay = '" . $barangay . "' 
    AND t.datepayment between '".$date_from."' and '".$date_to."' and t.status = 'ACTIVE'";

    
    $get_all_total_data = $con->prepare($get_all_total_sql);
    $get_all_total_data->execute();
  
    
    while ($total_amount = $get_all_total_data->fetch(PDO::FETCH_ASSOC)) {
        
         $total = $total_amount['total'];
     
    }

   
 
}




?>