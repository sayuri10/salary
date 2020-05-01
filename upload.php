<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>upload_file</title>
</head>
<body>
<select name="menu1" style="font-size:16px" onChange="MM_jumpMenu('parent',this,0)">
                     <option value="upload.php?type=1" <? if ($_GET['type']==1) { echo "selected='selected'";};?>>ข้าราชการ-ลูกจ้างประจำ</option>
					 <option value="upload.php?type=2" <? if ($_GET['type']==2) { echo "selected='selected'";};?>>พนักงานราชการ</option>
					 <option value="upload.php?type=3" <? if ($_GET['type']==3) { echo "selected='selected'";};?>>จ้างเหมาบริการ-อื่นๆ</option>
                  </select>
<form name="form1" method="post" action="upload_2.php?type=<? echo $_GET['type']; ?>" enctype="multipart/form-data">
	<input type="file" name="filUpload">
	<input name="btnSubmit" type="submit" value="Submit">
</form>

</body>
</html>