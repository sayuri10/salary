<?php require_once('Connections/conn.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE orgtxt SET name=%s, `add`=%s, `cutfield`=%s, `cutfield2`=%s WHERE orgid=%s",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['add'], "text"),
					   GetSQLValueString($_POST['cutfield'], "int"),
					   GetSQLValueString($_POST['cutfield2'], "int"),
 						GetSQLValueString($_POST['orgid'], "int"));
						
  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

  $updateGoTo = "menu.php?type=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE slip SET `cutontext`=%s, `cutonhead`=%s",
                       GetSQLValueString($_POST['cutontext'], "text"),
 						GetSQLValueString($_POST['cutonhead'], "text"));
						
  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

  $updateGoTo = "menu.php?type=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
mysql_select_db($database_conn, $conn);
$query_Recordset1 = "SELECT * FROM orgtxt";
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$query_Recordset_s = "SELECT * FROM slip";
$Recordset_s = mysql_query($query_Recordset_s, $conn) or die(mysql_error());
$row_Recordset_s = mysql_fetch_assoc($Recordset_s);
$totalRows_Recordset_s = mysql_num_rows($Recordset_s);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>ระบบสลิปเงินเดือนออนไลน์</title>
</head>

<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right"><!--Orgid: --></td>
      <td><?php //echo $row_Recordset1['orgid']; ?></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap><hr></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">ชื่อสำนักงาน:</td>
      <td><input style="font-size:16px" type="text" name="name" value="<?php echo $row_Recordset1['name']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">ที่อยู่:</td>
      <td><input style="font-size:16px" type="text" name="add" value="<?php echo $row_Recordset1['add']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><hr></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ตัดบรรทัดฝั่งรายรับ:</td>
      <td><input style="text-align:center; font-size:16px" name="cutfield" type="text" value="<?php echo $row_Recordset1['cutfield']; ?>" size="3" maxlength="3" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ตัดบรรทัดฝั่งสรุป:</td>
      <td><input style="text-align:center; font-size:16px" name="cutfield2" type="text" value="<?php echo $row_Recordset1['cutfield2']; ?>" size="3" maxlength="3" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="ยืนยันการเปลี่ยนแปลงข้อมูล"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="orgid" value="<?php echo $row_Recordset1['orgid']; ?>">
</form>
<p>&nbsp;</p>
<hr>
<form id="form2" name="form2" method="post" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right"><!--Orgid: --></td>
      <td><?php //echo $row_Recordset1['orgid']; ?></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap><hr></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">บรรทัดสุท้ายของข้อมูลบุคคล [บน]:</td>
      <td><input style="font-size:16px" type="text" name="cutonhead" value="<?php echo $row_Recordset_s['cutonhead']; ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">บรรทัดสุท้ายของรายรับ [ซ้ายล่าง]:</td>
      <td><input style="font-size:16px" type="text" name="cutontext" value="<?php echo $row_Recordset_s['cutontext']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><hr></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="ยืนยันการเปลี่ยนแปลงข้อมูล"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form2">
</form>
</body>
</html>
<?php
mysql_free_result($Recordset1);
mysql_free_result($Recordset_s);
?>
