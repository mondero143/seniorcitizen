<?php
include('../config/db_config.php');


$date_from =  date('Y-m-d', strtotime($_POST['date_from']));
$date_to =    date('Y-m-d', strtotime($_POST['date_to']));





if($date_from){

    $get_all_history_sql = "SELECT * from tbl_birthday where datecreate between '".$date_from ."' and '".$date_to ."' order by objid asc";


    $get_all_history_data = $con->prepare($get_all_history_sql);
    $get_all_history_data->execute();

    
    while ($list_history = $get_all_history_data->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td >";
        echo $list_history['objid'];
        echo "</td>";
        echo "<td>";
        echo $list_history['datecreate'];
        echo "</td>";
        echo "<td>";
        echo $list_history['fullname'] ;
        echo "</td>";

        echo "<td>";
        echo $list_history['birthdate'] ;
        echo "</td>";

        echo "<td>";
        echo $list_history['barangay'];
        echo "</td>";
        echo "<td>";
        echo "<button class='btn btn-danger delete btn-sm' data-placement='top' id='delete' title='Delete Record'><i class='fa fa-trash-o'></i></button>";
        
        echo "</td>";
     
        echo "</tr>";

    }
 
}







?>