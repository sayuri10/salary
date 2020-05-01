<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_RCautomname = 10;
$pageNum_RCautomname = 0;
if (isset($_GET['pageNum_RCautomname'])) {
  $pageNum_RCautomname = $_GET['pageNum_RCautomname'];
}
$startRow_RCautomname = $pageNum_RCautomname * $maxRows_RCautomname;

mysql_select_db($database_conn, $conn);
$query_RCautomname = "SELECT * FROM member left join m2 USING(username)";
$RCautomname = mysql_query($query_RCautomname, $conn) or die(mysql_error());
$row_RCautomname = mysql_fetch_assoc($RCautomname);

if (isset($_GET['totalRows_RCautomname'])) {
  $totalRows_RCautomname = $_GET['totalRows_RCautomname'];
} else {
  $all_RCautomname = mysql_query($query_RCautomname);
  $totalRows_RCautomname = mysql_num_rows($all_RCautomname);
}
$totalPages_RCautomname = ceil($totalRows_RCautomname/$maxRows_RCautomname)-1;

$queryString_RCautomname = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_RCautomname") == false && 
        stristr($param, "totalRows_RCautomname") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_RCautomname = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_RCautomname = sprintf("&totalRows_RCautomname=%d%s", $totalRows_RCautomname, $queryString_RCautomname);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>makename</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<?php
//สร้างชื่อ
$strFileName = "autoname/autoname.txt";
$objFopen = fopen($strFileName, 'w');

 do { 
$strText1 = "value: '".$row_RCautomname['bank']."', valpt: '".$row_RCautomname['f1']."', valniti: '".$row_RCautomname['pos']."', valsub: '".$row_RCautomname['suborg']."', valduration: '".$row_RCautomname['duration']."', 'label': '".$row_RCautomname['name']."'}, {\r\n";
fwrite($objFopen, $strText1);
 } while ($row_RCautomname = mysql_fetch_assoc($RCautomname)); 


$guri = str_replace("ap12","ap12ck",$_GET['uri']);
$guri = "menu.php?type=1";

if($objFopen)
{
	echo "เขียนแล้ว";
	echo "<script langquage='javascript'>";
	echo "window.location='".$guri."'";
	echo "</script>";
	
}
else
{
	echo "ไม่สามารถเขียนได้";
}

fclose($objFopen);
?>
</body>
</html>
<?php
mysql_free_result($RCautomname);
?>