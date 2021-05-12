<?php


include_once("PHPJasperXML.inc.php");


$host = "localhost";
$db_name = "fscap2";
$username = "root";
$password = "";

$objid = $_GET['objid'];
$date_from =   date('Y-m-d', strtotime($_GET['datefrom']));
$date_to =  date('Y-m-d', strtotime($_GET['dateto']));
$PHPJasperXML = new PHPJasperXML("en","TCPDF");
$PHPJasperXML->debugsql=false;
$PHPJasperXML->load_xml_file("dailypayment.jrxml");


$PHPJasperXML->sql = "SELECT * FROM masdailypayment where id = '".$objid."' and datepayment between '".$date_from."' and '".$date_to."' order by datepayment asc";

$PHPJasperXML->transferDBtoArray($host, $username, $password, $db_name);
$PHPJasperXML->outpage("I",""); 






?>


