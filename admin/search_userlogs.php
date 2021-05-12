<?php
include('../config/db_config.php');

$columns= array( 
    // datatable column index  => database column name
        0 =>  'objid', 
        1 =>  'user', 
        2 => 'date',
        3 => 'person_name',
        4 => 'activity',
        5 => 'orno',
        6 => 'amount'


    
    );
    

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$getAllIndividual = "SELECT objid,date,user,person_name,activity,orno,amount from userlogs
                     ORDER BY objid DESC LIMIT ".$requestData['start']." ,".$requestData['length']."  ";

$getIndividualData = $con->prepare($getAllIndividual);
$getIndividualData->execute();                   

$countNoFilter = "SELECT COUNT(objid) as id from userlogs";
$getrecordstmt = $con->prepare($countNoFilter);
$getrecordstmt->execute() or die("search_userlogs.php");
$getrecord = $getrecordstmt->fetch(PDO::FETCH_ASSOC);
$totalData = $getrecord['id'];

$totalFiltered = $totalData;  
// when there is no search parameter then total number rows = total number filtered rows.


$getAllIndividual = "SELECT * from userlogs where ";
             
     if( !empty($requestData['search']['value']) ) {
        $getAllIndividual.=" (objid LIKE '%".$requestData['search']['value']."%'";
        $getAllIndividual.=" OR user LIKE '%".$requestData['search']['value']."%' ";
        $getAllIndividual.=" OR person_name LIKE '%".$requestData['search']['value']."%') ";

        $getAllIndividual.=" ORDER BY objid DESC LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
        $getIndividualData = $con->prepare($getAllIndividual);
        $getIndividualData->execute(); 

        $countfilter = "SELECT COUNT(objid) as id,person_name,user from userlogs where";
       $countfilter.=" (id LIKE '%".$requestData['search']['value']."%'";
       $countfilter.=" OR user LIKE '%".$requestData['search']['value']."%' ";
    
   

       $countfilter.=" OR person_name LIKE '%".$requestData['search']['value']."%') ";
       $countfilter.="LIMIT ".$requestData['length']." " ;

        $getrecordstmt = $con->prepare($countfilter);
        $getrecordstmt->execute() or die("search_userlogs.php");
        $getrecord1 = $getrecordstmt->fetch(PDO::FETCH_ASSOC);
        $totalData = $getrecord['id'];
        $totalFiltered = $totalData;
     }

     $data = array();
// while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	while ($row = $getIndividualData->fetch(PDO::FETCH_ASSOC)){
	$nestedData=array(); 

	$nestedData[] = $row["objid"];
 
    $nestedData[] = $row["date"];
    $nestedData[] = $row["user"];
    $nestedData[] = $row["person_name"];
    $nestedData[] = $row["activity"];
    $nestedData[] = $row["orno"];
    $nestedData[] = $row["amount"];
	// $nestedData[] = ucwords(strtolower($row["fullname"]));
	$data[] = $nestedData;
}
        $json_data = array(
    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
    "recordsTotal"    => intval( $totalData ),  // total number of records
    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data"            => $data   // total data array
    );

    echo json_encode($json_data);  // send data as json format


?>