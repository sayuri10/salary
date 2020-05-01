<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?
if ($_GET['type']==1) {
	$type = "/01";
} elseif ($_GET['type']==2) {
	$type = "/02";
} elseif ($_GET['type']==3) {
	$type = "/03";
}


if(copy($_FILES["filUpload"]["tmp_name"],"resource/".$type."/".$_FILES["filUpload"]["name"]))
{
	echo "Upload Complete";
}

?>

<br><a href=menu.php?type=1>กลับหน้าหลัก</a>
</br>
</body>
</html>