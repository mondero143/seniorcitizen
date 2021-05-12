<?php
include('../config/db_config.php');

$columns= array( 
    // datatable column index  => database column name
        0 =>  'idp', 
        1 =>  'preparedby', 
        2 => 'pposition',



    
    );
    

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$getAllIndividual = "SELECT idp,preparedby,pposition from preparedby
                     ORDER BY idp DESC LIMIT ".$requestData['start']." ,".$requestData['length']."  ";

$getIndividualData = $con->prepare($getAllIndividual);
$getIndividualData->execute();                   

$countNoFilter = "SELECT COUNT(idp) as id from preparedby";
$getrecordstmt = $con->prepare($countNoFilter);
$getrecordstmt->execute() or die("search_preparedby.php");
$getrecord = $getrecordstmt->fetch(PDO::FETCH_ASSOC);
$totalData = $getrecord['id'];

$totalFiltered = $totalData;  
// when there is no search parameter then total number rows = total number filtered rows.


$getAllIndividual = "SELECT * from preparedby where ";
             
     if( !empty($requestData['search']['value']) ) {
        $getAllIndividual.=" (idp LIKE '%".$requestData['search']['value']."%'";
        $getAllIndividual.=" OR preparedby LIKE '%".$requestData['search']['value']."%' ";
        $getAllIndividual.=" OR pposition LIKE '%".$requestData['search']['value']."%') ";

        $getAllIndividual.=" ORDER BY idp DESC LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
        $getIndividualData = $con->prepare($getAllIndividual);
        $getIndividualData->execute(); 

        $countfilter = "SELECT COUNT(idp) as id,preparedby,pposition from preparedby where";
       $countfilter.=" (id LIKE '%".$requestData['search']['value']."%'";
       $countfilter.=" OR preparedby LIKE '%".$requestData['search']['value']."%' ";
    
   

       $countfilter.=" OR pposition LIKE '%".$requestData['search']['value']."%') ";
       $countfilter.="LIMIT ".$requestData['length']." " ;

        $getrecordstmt = $con->prepare($countfilter);
        $getrecordstmt->execute() or die("search_preparedby.php");
        $getrecord1 = $getrecordstmt->fetch(PDO::FETCH_ASSOC);
        $totalData = $getrecord['id'];
        $totalFiltered = $totalData;
     }

     $data = array();
// while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	while ($row = $getIndividualData->fetch(PDO::FETCH_ASSOC)){
	$nestedData=array(); 

	$nestedData[] = $row["idp"];
 
    $nestedData[] = $row["preparedby"];
    $nestedData[] = $row["pposition"];

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