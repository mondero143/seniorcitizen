<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


include_once("../PHPJasperXML.inc.php");

include_once ('setting.php');
$server = "localhost";
$user = "root";
$pass = "";
$db = "cchurch";


$id=$_GET['id'];
$PHPJasperXML = new PHPJasperXML("en","TCPDF");
$PHPJasperXML->debugsql=false;
$PHPJasperXML->arrayParameter=array("id"=>$id);
$PHPJasperXML->load_xml_file("print_cf3.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
