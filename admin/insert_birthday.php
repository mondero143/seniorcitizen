<?php

include('../config/db_config.php');

date_default_timezone_set('Asia/Manila');
$alert_msg = '';


if (isset($_POST['insert_birthday'])) {

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $alert_msg = ' ';
    //insert to tbl_individual

    $date_reg = date('Y-m-d', strtotime($_POST['date_register']));
    $full_name = $_POST['fullname'];
    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $last_name = $_POST['lastname'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $barangay = $_POST['barangay'];

    $username = $_POST['username'];

  
    $insert_birthday_sql = "INSERT INTO tbl_birthday SET 

  
    
        datecreate    = :date_register,
        fullname        = :fullnames,
        firstname        = :fname,
        middlename       = :mname,
        lastname         = :lname,
        birthdate        = :birthdates,
        gender           = :genders,
        barangay         = :barangays


 
    
    ";


    $birth_data = $con->prepare($insert_birthday_sql);
    $birth_data->execute([

    
        ':date_register'     => $date_reg,      
        ':fname'         => $first_name,
        ':mname'        => $middle_name,
        ':lname'          => $last_name,
        ':fullnames'          => $full_name,
        ':barangays'          => $barangay,
        ':genders'           => $gender,
        ':birthdates'         => $birthdate
   



    ]);





    $alert_msg .= ' 
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>
                <strong> Success ! </strong> Data Inserted.
        </div>    
      ';




    //echo print_r($firstname);


}
