<?php


include_once("PHPJasperXML.inc.php");


$host = "localhost";
$db_name = "fscap2";
$username = "root";
$password = "";

$objid = $_GET['objid'];
$masname1 = $_GET['masname1'];

$ypreparedby = $_GET['ypreparedby'];
$yposition = $_GET['yposition'];

$ystreet = $_GET['ystreet'];
$ybarangay1 = $_GET['ybarangay1'];

$ydate_from1 =   date('Y-m-d', strtotime($_GET['ydatefrom1']));
$ydate_to1 =  date('Y-m-d', strtotime($_GET['ydateto1']));
$PHPJasperXML = new PHPJasperXML("en","TCPDF");
$PHPJasperXML->debugsql=false;
$PHPJasperXML->load_xml_file("yearlypayment.jrxml");


$PHPJasperXML->sql = "SELECT * FROM yearduepayment where id = '".$objid."' and dateyeardue between '".$ydate_from1."' and '".$ydate_to1."'";

$PHPJasperXML->transferDBtoArray($host, $username, $password, $db_name);
$PHPJasperXML->outpage("I",""); 






?>


