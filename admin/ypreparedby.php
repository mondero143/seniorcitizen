<?php


include('../config/db_config.php');

if (isset($_POST['idp'])) {


    $idp = $_POST['idp'];
    $position = '';
 


    // $user_id = $_SESSION['id  //select all data type
    $get_all_preparedby_sql = "SELECT * FROM `preparedby` WHERE idp = :idp";
    $get_all_preparedby_data = $con->prepare($get_all_preparedby_sql);
    $get_all_preparedby_data->execute([':idp' => $idp]);
    while ($result = $get_all_preparedby_data->fetch(PDO::FETCH_ASSOC)) {

        $idp =  $result['idp'];
        $preparedby =  $result['preparedby'];
        $position =  $result['pposition'];

    }

    $data = array(
        'statuscode' => 200,
        'data' => $idp,
        'data1' => $preparedby,
        'data2' => $position,
   


        'message' => 'success'
    );
    echo json_encode($data);
}
