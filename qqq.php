<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?

if (!isset($_SESSION['MM_Username'])) {
	header("Location: index.php" );
}


/*function order_array_num($array, $key, $order = "ASC") 
{ 
	$tmp = array(); 
	foreach($array as $akey => $array2) 
	{ 
		$tmp[$akey] = $array2[$key]; 
	} 
	
	if($order == "DESC") 
	{arsort($tmp , SORT_NUMERIC );} 
	else 
	{asort($tmp , SORT_NUMERIC );} 

	$tmp2 = array();        
	foreach($tmp as $key => $value) 
	{ 
		$tmp2[$key] = $array[$key]; 
	}        
	
	return $tmp2; 
} */



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
	p, div, td, ul li, ol li { font-family:  "Microsoft Sans Serif", "MS Sans Serif", sans-serif;  font-size: 9pt}
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
<title>== ระบบพิมพ์สลิปเงินเดือนออนไลน์ โดยสำนักงาน กศน. จังหวัดเลย ==</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<script language="javascript">
       function chkdata()<!--chkdata คือ ชื่อ function-->
            {
                   with(form1)<!--with คือ การเลือกตำแหน่งซึ่งในที่นี้คือ form1-->
                   {
                        if(noAcc.value=='')
                        {
                           alert('กรุณากรอกหมายเลขบัญชีธนาคารครับ');
						   noAcc.focus();
                                  return false;
                          }
						  
						 if(mAcc.value=='กรุณาเลือก เดือน / ปี ที่ต้องการ')
                        {
                           alert('กรุณาเลือก เดือน / ปี ที่ต้องการครับ');
						   mAcc.focus();
                                  return false;
						}
                       
						  
						  
						  
                       }
					   				 
            }
			
			
			function chkdata2()<!--chkdata คือ ชื่อ function-->
            {
                   with(form2)<!--with คือ การเลือกตำแหน่งซึ่งในที่นี้คือ form1-->
                   {
                        if(noAcc2.value=='')
                        {
                           alert('กรุณากรอกหมายเลขบัญชีธนาคารครับ');
						   noAcc2.focus();
                                  return false;
                                }
                       }
            }
 </script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="800" height="600" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td colspan="3">
			<img src="images/menu_01.jpg" width="800" height="187" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/menu_02.jpg" width="54" height="29" alt=""></td>
		<td>
			<img src="images/menu_03.jpg" width="690" height="29" alt=""></td>
		<td>
			<img src="images/menu_04.jpg" width="56" height="29" alt=""></td>
	</tr>
	
  <tr> 
    <td valign="top"><img src="images/menu_05.jpg" width="54" height="273" alt=""></td>
		
    <td valign="top"><table width="690" border="0" cellpadding="0" cellspacing="0" bordercolor="#0099FF">
        <tr> 
          <td width="119" height="269" valign="top">
<table width="99%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="22%"> 
                  <? if ($_SESSION['permit']=="admin" || $_SESSION['permit']=="accounting" || $_SESSION['permit']=="head_accounting") {?>
                </td>
                <td width="78%"><div align="center"><a href="setting.php"><img src="settings.png" width="84" height="73" border="0"></a></div></td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
                <td><div align="center"><font size="2"><a href="adduser.php"><img src="msn.png" border="0" align="middle" title="เพิ่มผู้ใช้"></a></font></div></td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
                <td><div align="center"><font size="2"><a href="upload.php"><img src="upload.png" border="0" align="middle" title="อัพโหลดไฟล์"></a></font></div></td>
              </tr>
              <tr> 
                <td> 
                  <? } ?>
                </td>
                <td><div align="center"><font size="2"><a href="<?php echo $logoutAction ?>"><img src="exit.png" border="0" align="middle" title="ออกจากระบบ"></a></font></div></td>
              </tr>
            </table></td>
          <td width="603" valign="top"> 
            <?

$directory = "resource";
if (substr($directory,-1)!="/" && $directory!=""){
	 $directory.="/";
}

$dir = opendir($directory);

function getSize($fileSize){
	// อ่านขนาดของไฟล์
	if ( $fileSize >= 1073741824 ){
		$size = round( $fileSize/1024/1024/1024 , 3 )." Gb" ;
	}elseif ( $fileSize >= 1048576 ){
		$size = round( $fileSize/1024/1024 , 3 )." Mb" ;
	}elseif ( $fileSize >= 1024 ){
		$size = round( $fileSize/1024 , 3 )." Kb" ;
	}else{
		$size = $fileSize." bytes" ;
	}
	return $size;
}
?>
            <form onSubmit="return chkdata();" id="form1" name="form1" method="post" action="report2.php">
              <table width="99%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td colspan="2"><div align="center"><img src="icon.png" width="335" height="60"></div></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td width="38%"><div align="right">กรุณากรอกหมายเลขบัญชีธนาคาร 
                      : </div></td>
                  <td width="62%"><input name="noAcc" type="text" id="noAcc" style="font-size:16px" size="25" /></td>
                </tr>
                <tr> 
                  <td><div align="right">เลือกรายงานบัญชี รับ - จ่าย เงินเดือน 
                      ประจำ :</div></td>
                  <td><select name="mAcc" id="mAcc" style="font-size:16px">
                      <?
		if ( !isset($ymFile) ){ 
		?>
                      <option value="กรุณาเลือก เดือน / ปี ที่ต้องการ">กรุณาเลือก 
                      เดือน / ปี ที่ต้องการ</option>
                      <?	
		}else{
			$ymAcc = substr($ymFile,0,7);
			$ymType = strstr($ymFile,".");
			$ymAcc_array = explode("-",$ymAcc);
			switch ( $ymAcc_array[1] ) {
				case "01" : $mThai = "มกราคม"; break;  case "02" : $mThai = "กุมภาพันธ์"; break;  
				case "03" : $mThai = "มีนาคม"; break;  case "04" : $mThai = "เมษายน"; break;  
				case "05" : $mThai = "พฤษภาคม"; break;  case "06" : $mThai = "มิถุนายน"; break;  
				case "07" : $mThai = "กรกฎาคม"; break;  case "08" : $mThai = "สิงหาคม"; break;  
				case "09" : $mThai = "กันยายน"; break;  case "10" : $mThai = "ตุลาคม"; break;  
				case "11" : $mThai = "พฤศจิกายน"; break;  case "12" : $mThai = "ธันวาคม"; break;  }
			echo "<option value=\"".$ymFile."\" select>".$mThai." ".$ymAcc_array[0]."</option>";
			
		}
		$i = 0;
		$a = array();
		while ($file = readdir($dir)) { 
			if ($file!=".." && $file!="." && $file!="Thumbs.db" && $file!="index.html" && $file!="htacc_old.txt" && $file!="kp.jpg" && $file!="block.php" && $file!=".htaccess") {
				$ymAcc = substr($file,0,7);
				$ymType = strstr($file,".");
				$ymAcc_array = explode("-",$ymAcc);
				switch ( $ymAcc_array[1] ) {
					case "01" : $mThai = "มกราคม"; break;  case "02" : $mThai = "กุมภาพันธ์"; break;  
					case "03" : $mThai = "มีนาคม"; break;  case "04" : $mThai = "เมษายน"; break;  
					case "05" : $mThai = "พฤษภาคม"; break;  case "06" : $mThai = "มิถุนายน"; break;  
					case "07" : $mThai = "กรกฎาคม"; break;  case "08" : $mThai = "สิงหาคม"; break;  
					case "09" : $mThai = "กันยายน"; break;  case "10" : $mThai = "ตุลาคม"; break;  
					case "11" : $mThai = "พฤศจิกายน"; break;  case "12" : $mThai = "ธันวาคม"; break;  }
				//echo "<option value=\"".$ymAcc.$ymType."\" >".$mThai." ".$ymAcc_array[0]."</option>";
				//echo "2";
				
				$a[$i] = $ymAcc.$ymType;
				$i ++;
				

			}
			
		} 	//while		
		
		
					sort($a);
					//print_r($a);
					//echo $a[0];
		
		$ai = 0;
		while ($a[$ai] != NULL) { 
			
				$ymAcc = substr($a[$ai],0,7);
				$ymType = strstr($a[$ai],".");
				$ymAcc_array = explode("-",$ymAcc);
				switch ( $ymAcc_array[1] ) {
					case "01" : $mThai = "มกราคม"; break;  case "02" : $mThai = "กุมภาพันธ์"; break;  
					case "03" : $mThai = "มีนาคม"; break;  case "04" : $mThai = "เมษายน"; break;  
					case "05" : $mThai = "พฤษภาคม"; break;  case "06" : $mThai = "มิถุนายน"; break;  
					case "07" : $mThai = "กรกฎาคม"; break;  case "08" : $mThai = "สิงหาคม"; break;  
					case "09" : $mThai = "กันยายน"; break;  case "10" : $mThai = "ตุลาคม"; break;  
					case "11" : $mThai = "พฤศจิกายน"; break;  case "12" : $mThai = "ธันวาคม"; break;  }
				echo "<option value=\"".$ymAcc.$ymType."\" >".$mThai." ".$ymAcc_array[0]."</option>";
				//echo "2";
				
				//$a[$i] = $ymAcc.$ymType;
				//$i ++;
				$ai ++;

		
			
		} 	//while
					
					
					
	?>
                    </select>
                    &nbsp;<input type="submit" name="Submit2" value="ยืนยัน" /></td>
                    <?
					
					/*$fruits=array(0=>"lemon",1=>"orange",2=>"banana",3=>"apple");
					sort($fruits);
					echo $fruits[0];
					
					
					
					$array1=array('img9.png','img12.png','img10.png');
					natsort($array1);
					echo $array1[0]."<br>";
					echo $array1[1]."<br>";
					echo $array1[2]."<br>";
					natcasesort($array1);
					echo $array1[0]."<br>";
					echo $array1[1]."<br>";
					echo $array1[2]."<br>";


					$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");
					asort($array1);
					echo "Standard sorting\n";
					print_r($array1);
					natsort($array2);
					echo "\nNatural order sorting\n";
					print_r($array2);
*/
					?>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><hr></td>
                  <td><hr></td>
                </tr>
              </table>
              

              </form>
              
              
            <form onSubmit="return chkdata2();" id="form2" name="form2" method="post" action="report3.php">
               
			  <input type="hidden" name="last1" id="last1" value="<? echo $a[$i-1]; ?>">
            <input type="hidden" name="last2" id="last2" value="<? echo $a[$i-2]; ?>">
                <input type="hidden" name="last3" id="last3" value="<? echo $a[$i-3]; ?>">
               กรุณากรอกหมายเลขบัญชีธนาคาร :  <input name="noAcc2" type="text" id="noAcc2" style="font-size:16px" size="25" />
            <input type="submit" name="Submit" value="* 3 เดือนย้อนหลัง *" />
               </form>
            <p><br>
            </p>
            </td>
        </tr>
      </table> </td>
		<td valign="top">
			<img src="images/menu_07.jpg" width="56" height="273" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/menu_08.jpg" width="54" height="111" alt=""></td>
		<td>
			<img src="images/menu_09.jpg" width="690" height="111" alt=""></td>
		<td>
			<img src="images/menu_10.jpg" width="56" height="111" alt=""></td>
	</tr>
</table>
</body>
</html>