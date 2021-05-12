<?php

include('../config/db_config.php');
// include('sql_queries.php');
session_start();

$user_id = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
  header('location:../index.php');
} else {
}


date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');
$time = date('H:i:s');
$now = new DateTime();

$btnSave = $btnEdit = "";

$ornomas = $amount = $date_payment = $entity_no = $objid = $firstname = $lastname = '';
// $entity_no = '';
//fetch user from database
$user_id = $_SESSION['id'];

$get_user_sql = "SELECT * FROM tbl_users where id = :id ";
$user_data = $con->prepare($get_user_sql);
$user_data->execute([':id' => $user_id]);
while ($result = $user_data->fetch(PDO::FETCH_ASSOC)) {


    $db_fullname = $result['fullname'];
}


// $get_all_individual_sql = "SELECT * FROM tbl_individual i inner join tbl_entity e on e.entity_no = i.entity_no order by i.lastname ASC ";
// $get_all_individual_data = $con->prepare($get_all_individual_sql);
// $get_all_individual_data->execute();
// while ($list_individual = $get_all_individual_data->fetch(PDO::FETCH_ASSOC)){
//   $entity_no =  $list_individual['entity_no'];
// }


?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SENIOR CITIZEN | DAILY PAYMENT </title>
  <?php include('heading.php'); ?>


</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php include('sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header"></div>

      <section class="content">
        <div class="card card-info">
          <div class="card-header  text-white bg-success">
            <h4> USER LOGS
          
              <a href="add_individual" id="add_individual" style="float:right;" type="button" class="btn btn-success bg-gradient-success" style="border-radius: 0px;">
                <i class="nav-icon fa fa-plus-square"></i></a>
              <!-- <a href="../cameracapture/capture.php" style="float:right;" type="button" class="btn btn-info bg-gradient-info" style="border-radius: 0px;">
                <i class="nav-icon fa fa-plus-square"></i></a> -->
            </h4>

          </div>

          <div class="card-body">
            <div class="box box-primary">
              <form role="form" method="get" action="">
                <div class="box-body">

                  <div class="table-responsive">
                    <!-- <div class="row">
                      <div class="col-md-3" id="combo"></div>
                    </div>
                    <br> -->


                    <table style="overflow-x: auto;" id="users" name="user" class="table table-bordered table-striped">
                      <thead align="center">

                        <th> ID </th>
                        
                        <th> DATE/TIME </th>
                        <th> USERNAME </th>
                        <th> PERSON_NAME </th>
                        <th> ACTIVITY </th>
                        <th> ORNO </th>
                        <th> AMOUNT </th>
           

                      </thead>
                      <tbody>




                      </tbody>
                    </table>
              
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </section>
      <br><br>

    </div><!-- /.content-wrapper -->


      

    <?php include('footer.php') ?>

  </div><!-- /.wrapper -->



  <?php include('pluginscript.php') ?>


  <script>
 
  
    var dataTable = $('#users').DataTable({

      page: true,
      stateSave: true,
      processing: true,
      serverSide: true,
      scrollX: false,

      ajax: {
        url: "search_userlogs.php",
        type: "post",
        error: function(xhr, b, c) {
          console.log(
            "xhr=" +
            xhr.responseText +
            " b=" +
            b.responseText +
            " c=" +
            c.responseText
            
          );
        }
      },
      // columnDefs: [{
      //     width: "159px",
      //     targets: -1,
      //     data: null,

      //     defaultContent: '<button class="btn btn-outline-success btn-sm editIndividual" style = "margin-right:10px;"  id = "modal" data-placement="top" title="ADD DAILY PAYMENT"> DY</i></button>'
      //      + '<button class="btn btn-outline-success btn-sm editIndividual" style = "margin-right:10px;"  id = "modal1" data-placement="top" title="ADD YEARLY PAYMENT"> YR</i></button>'
      //      +
      //     '<button class="btn btn-outline-success btn-sm editIndividual" style = "margin-right:10px;"  id = "view_dailypayment" data-placement="top" title="ADD"> <i class="fa fa-folder"></i></button>'
      //     + '<button class="btn btn-danger delete btn-sm" data-placement="top" title="Delete Record"><i class="fa fa-trash-o"></i></button>'

            
      //   },
      //   //   defaultContent: '<button class="btn btn-outline-success btn-sm editIndividual" style = "margin-right:10px;"  id = "viewIndividual" data-placement="top" title="Edit Individual"> <i class="fa fa-edit"></i></button>' +
      //   //     '<a class="btn btn-outline-success btn-sm printlink"  style = "margin-right:10px;" id="printlink" href ="../plugins/jasperreport/entity_id.php?entity_no=" data-placement="top" target="_blank" title="Print ID">  <i class="nav-icon fa fa-print"></i></a> ' + checkViewHistory() + checkDelete() +

      //   //     '<button class="btn btn-outline-success btn-sm editIndividual" style = "margin-right:10px;"  id = "modal" data-placement="top" title="ADD"> <i class="fa fa-edit"></i></button>',
      //   // },

      // ],
    });

    // $("#users tbody").on("click", "#view_dailypayment", function() {
    //   event.preventDefault();
    //   var currow = $(this).closest("tr");
    //   var objid = currow.find("td:eq(0)").text();
    //   var masname = currow.find("td:eq(1)").text();
    //   // $('#viewIndividual').attr("href", "view_individual.php?&id=" + entity, '_parent');
    //   window.open("view_dailypayment_member.php?&id=" + objid + "&masname=" +masname+"", '_parent');

    // });

    // $("#users tbody").on("click", "#modal", function() {
    //   event.preventDefault();
    //   var currow = $(this).closest("tr");

    


  </script>
</body>

</html>