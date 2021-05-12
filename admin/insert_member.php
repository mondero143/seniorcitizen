<?php

include('../config/db_config.php');

date_default_timezone_set('Asia/Manila');
$alert_msg = '';


if (isset($_POST['insert_member'])) {

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $alert_msg = ' ';
    //insert to tbl_individual
    $objid = $_POST['objid'];
    $date_register = date('Y-m-d', strtotime($_POST['date_register']));
    $fullname = $_POST['firstname'] . ' ' . $_POST['middlename'] . ' ' . $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    
    $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $mobile_no = $_POST['mobile_no'];
    $telephone_no = $_POST['telephone_no'];
    $barangay = $_POST['barangay'];
    $civilstatus = $_POST['civilstatus'];
    $email = $_POST['email'];
    $user_name = $_POST['username'];
    $hashed_password  = password_hash($objid, PASSWORD_DEFAULT);
    $password_text  = $_POST['objid'];;
    $mas = 'MASMEMBER';

    $statusreg = 'ACTIVE';
    // $img = $_POST['image'];
    // $fileName = 'default.jpg';



        //upload image
    // if ($img != '') {
    // $folderPath = "../flutter/images/";
    // $image_parts = explode(";base64,", $img);
    // $image_type_aux = explode("image/", $image_parts[0]);
    // $image_type = $image_type_aux[1];
    // $image_base64 = base64_decode($image_parts[1]);
    // $fileName = uniqid() . '.jpg';
    // $file = $folderPath . $fileName;
    // file_put_contents($file, $image_base64);
    // }
    $insert_member_sql = "INSERT INTO registration SET 

    objid        = :objid,
    id        = :id,
    datecreate    = :date_register,
    fullname        = :fullname,
    firstname        = :firstname,
    middlename       = :middlename,
    lastname         = :lastname,
   

    gender           = :gender,
    dateofbirth        = :dateofbirth,
    age              = :age,
    address           = :address,
    barangay         = :barangay,
    civilstatus         = :civilstatus,
    city             = :city,
    province         = :province,
    mas         = :mas,
    statusreg         = :statusreg
 
    
    ";


    $member_data = $con->prepare($insert_member_sql);
    $member_data->execute([

        ':objid'         => $objid,
        ':id'         => $objid,
        ':date_register'     => $date_register,
        
        ':firstname'         => $firstname,
        ':middlename'        => $middlename,
        ':lastname'          => $lastname,
        ':fullname'          => $fullname,
        ':age'               => $age,
        ':gender'            => $gender,

        ':barangay'          => $barangay,
        ':civilstatus'          => $civilstatus,
        ':dateofbirth'         => $birthdate,
        ':address'            => $street,
        ':city'              => $city,
        ':province'          => $province,
        ':mas'          => $mas,
        ':statusreg'          => $statusreg


    ]);



    //INSERT ENTITY TABLE

    $insert_fscap_sql = "INSERT INTO tbl_fscap SET 
  
    fscap_id           = :objid,
    username            = :username,
    password            = :password,
    password_text       = :password_text";


    $fscap_data = $con->prepare($insert_fscap_sql);
    $fscap_data->execute([

        ':objid'        => $objid,
        ':username'         => $user_name,
        ':password'         => $hashed_password,
        ':password_text'    => $password_text

    ]);

    $alert_msg .= ' 
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>
                <strong> Success ! </strong> Data Inserted.
        </div>    
      ';

    $btn_enabled = 'disabled';
    $btnNew = 'enabled';
    $btnPrint = 'enabled';


    //echo print_r($firstname);


}
