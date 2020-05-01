<?php require_once('Connections/conn.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "menu.php?type=1";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_conn, $conn);
  
  $LoginRS__query=sprintf("SELECT * FROM member WHERE username='%s' AND password='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $conn) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  $row_DetailRS1 = mysql_fetch_assoc($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      
	$_SESSION['name'] = $row_DetailRS1['name'];	   
	$_SESSION['permit'] = $row_DetailRS1['permit'];
	$_SESSION['f2'] = $row_DetailRS1['f2'];
	
    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<html>
<style type="text/css">
	<!--
	body {
	margin: 0px  0px;
	padding: 0px  0px;
}
	a:link {
	color: #841203;
	text-decoration: underline;
	font-weight: normal;
}
	a:visited { color: #841203; text-decoration: underline}
	a:active { color: #841203; text-decoration: underline}
	a:hover { color: #000000; text-decoration: none}
	p, div, td, ul li, ol li { font-family:  "Microsoft Sans Serif", "MS Sans Serif", sans-serif;  font-size: 10pt}
.style1 {
	color: #FF0000;
	font-weight: normal;
}
.style2 {
	color: #0000FF;
	font-weight: normal;
}
	-->
	</style>
<head>
<title>== ระบบพิมพ์สลิปเงินเดือนออนไลน์ โดยระบบสลิปเงินเดือนออนไลน์ สำนักงาน กศน. จังหวัดเลย ==</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="800" height="600" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td colspan="3">
			<img src="images/index_01.jpg" width="800" height="251" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/index_02.jpg" width="54" height="38" alt=""></td>
		<td>
			<img src="images/index_03.jpg" width="690" height="38" alt=""></td>
		<td>
			<img src="images/index_04.jpg" width="56" height="38" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/index_05.jpg" width="54" height="205" alt=""></td>
		
    <td><table width="99%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><form name="form1" method="post" action="<?php echo $loginFormAction; ?>">
              <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="48%"><div align="right">ลงชื่อเข้าสู่ระบบ<font color="#FFFFFF"><img src="images/arr_right.gif" width="16" height="16" align="absmiddle"></font></div></td>
                  <td width="52%"><input name="username" type="text" id="username" /></td>
                </tr>
                <tr>
                  <td><div align="right">รหัสผ่าน<font color="#FFFFFF"><img src="images/arr_right.gif" width="16" height="16" align="absmiddle"></font></div></td>
                  <td><input name="password" type="password" id="password" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="Submit" value="เข้าสู่ระบบ" /></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table> </td>
		<td>
			<img src="images/index_07.jpg" width="56" height="205" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/index_08.jpg" width="54" height="106" alt=""></td>
		<td>
			<img src="images/index_09.jpg" width="690" height="106" alt=""></td>
		<td>
			<img src="images/index_10.jpg" width="56" height="106" alt=""></td>
	</tr>
</table>
</body>
</html>