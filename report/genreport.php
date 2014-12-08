<?php
//http://www.simit.com.my/wiki/index.php/Integrate_.jrxml_with_PHP_(With_parameter)
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");
include_once ('settingDB.php');
//echo $_GET['rname'].".jrxml";
$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;
//$PHPJasperXML->arrayParameter=array("year"=>$_GET['year']);
$PHPJasperXML->load_xml_file($_GET['rname'].".jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file

?>
