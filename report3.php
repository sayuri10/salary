<?php require_once('Connections/conn.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$noAcc = $_POST['noAcc2'];
$mAcc = $_POST['mAcc'];


$last1 = $_POST['last1'];
$last2 = $_POST['last2'];
$last3 = $_POST['last3'];

$noAcc_old = $noAcc;
//400-0-00000-0

$noAcc_01 = substr($noAcc,0,3);
$noAcc_02 = substr($noAcc,3,1);
$noAcc_03 = substr($noAcc,4,5);
$noAcc_04 = substr($noAcc,-1);
if ($noAcc!="") {
$noAcc = $noAcc_01."-".$noAcc_02."-".$noAcc_03."-".$noAcc_04;
}
//400-0-00000-0

mysql_select_db($database_conn, $conn);

$query_DetailRS1 = "SELECT * FROM orgtxt WHERE orgid = 0";
$DetailRS1 = mysql_query($query_DetailRS1, $conn) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);

$query_s = "SELECT * FROM slip WHERE typeid = 1";
$DetailRS_s = mysql_query($query_s, $conn) or die(mysql_error());
$row_DetailRS_s = mysql_fetch_assoc($DetailRS_s);


if ($_GET['type']==1) {
	$type = "/01";
} elseif ($_GET['type']==2) {
	$type = "/02";
} elseif ($_GET['type']==3) {
	$type = "/03";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>ระบบสลิปเงินเดือนออนไลน์ <?php echo $row_DetailRS1['name']; ?></title>
<script type="text/javascript" src="jquery-1.5.2.js"></script>
<script type="text/javascript" src="jquery.jqprint-0.3.js"></script>
<script type="text/javascript">
function printpage()
  {
  window.print()
  }
  function goback()
  {
  window.location="menu.php" 


  }
</script>
<style type="text/css">
<!--
.style5 {font-size: smaller}
-->

@media print {
    background1{background-image:url(nfe.gif)};
	#no_p{display:none;}
	#followbuttons{display:none;}
	
  }
  
.style7 {font-size: small; font-weight: bold; }

h5 {
	page-break-before: always;
}

.background1 { 
background-image: url(nfe.gif); 
background-repeat: no-repeat; 
background-position: center;

} 

</style>

</head>

<body>
<!-- FLOAT BAR -->
<style> 
div#followbuttons {
	top:200px;
	border:0px;
	position:fixed;
	z-index: 1000;
	right:-2px;
	width:35px;
	height:124px;
 
 
}
div#followbuttons a  {
	float:left;
	border:0px;
}
div#followbuttons a:hover {
	float:right;
}
</style>
<span align="right" id="AdFloater" style="position: absolute; visibility: hidden; top: 130px;">
<div id="followbuttons">
<a href="#" rel="nofollow" onclick="printpage()"><img src="print.png" border="0" title="<-- ปริ๊น -->" /></a><br /><br />
<a href="menu.php?type=<? echo $_GET['type'];?>" rel="nofollow" onclick="goback()"><img src="left.png" border="0" title="<!- กลับ ->"/></a><br />

</div>
</span>
 
<script type="text/javascript" language="JavaScript"><!-- Copyright 2001 William Bontrager
var Type = 'Z';
function StartFloat() {
if(document.all) {
	document.all.AdFloater.style.pixelLeft = document.body.clientWidth - document.all.AdFloater.offsetWidth;
	document.all.AdFloater.style.visibility = 'visible';
	Type = 'A';
	}
else if(document.layers) {
	document.AdFloater.left = window.innerWidth - document.AdFloater.clip.width - 16;
	document.AdFloater.visibility = 'show';
	Type = 'B';
	}
else if(document.getElementById) {
	document.getElementById('AdFloater').style.left = (window.innerWidth - 35) + 'px';
	document.getElementById('AdFloater').style.visibility = 'visible';
	Type = 'C';
	}
if (document.all) { window.onscroll = Float; }
else { setInterval('Float()', 100); }
}
function Float() {
if (Type == 'A') { document.all.AdFloater.style.pixelTop = document.body.scrollTop+150; }
else if (Type == 'B') { document.AdFloater.top = window.pageYOffset; }
else if (Type == 'C') { document.getElementById('AdFloater').style.top = window.pageYOffset + 'px'; }
} //-->
 
document.onload = StartFloat();
</script>
<!-- FLOAT BAR -->

<div align="center" class="style5">
  <?
$directory = "resource".$type;
	if (substr($directory,-1)!="/" && $directory!=""){
		 $directory.="/";
	}

	$dir = opendir($directory);
	//$mAccex = explode("-",$mAcc);
	$mAccex = explode("-",$last1);
	$yAcc = $mAccex[0];
	
	$mAccex = explode(".",$mAccex[1]);
	
	
	switch($mAccex[0]) {
		case '01' : $mAccThai = "มกราคม "; break;
		case '02' : $mAccThai = "กุมภาพันธ์ "; break;
		case '03' : $mAccThai = "มีนาคม "; break;
		case '04' : $mAccThai = "เมษายน "; break;
		case '05' : $mAccThai = "พฤษภาคม "; break;
		case '06' : $mAccThai = "มิถุนายน "; break;
		case '07' : $mAccThai = "กรกฎาคม "; break;
		case '08' : $mAccThai = "สิงหาคม "; break;
		case '09' : $mAccThai = "กันยายน "; break;
		case '10' : $mAccThai = "ตุลาคม "; break;
		case '11' : $mAccThai = "พฤศจิกายน "; break;
		case '12' : $mAccThai = "ธันวาคม "; break;	 }
	$fileAcc = $directory.$last1;

?>
  
  <B> ระบบพิมพ์สลิปออนไลน์</B><br>
  <!--<br style="page-break-before:always;">  -->
  <?php echo $row_DetailRS1['name']; ?><br>
  <?php echo $row_DetailRS1['add']; ?><br />
  ประจำเดือน  <strong><? echo $mAccThai;?> พ.ศ. <? echo $yAcc;?> </strong></div>
  <hr>
<table width="678" height="83" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr class="style7">
    <td height="20" colspan="4" align="center" valign="top">:: ข้อมูลบุคคล ::</td>
  </tr>
  <tr>
    <td width="50%" height="47" colspan="2" align="right" valign="top">
    <span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);
			//to2n
			$rowAcc[0] =  str_replace(" ","",$rowAcc[0],$var);
			$headAcc = explode("	",$rowAcc[0]);
			//$tothead = array_search("เลขที่บัญชี",$headAcc);
			$tothead = array_search($row_DetailRS_s['cutonhead'],$headAcc);
			
			//for ( $h=0; $h<$row_DetailRS1['cutfield']+1; $h++){
			for ( $h=0; $h<$tothead+1; $h++){
				
			?>
           
  				<? echo $headAcc[$h]; ?>.....<br>
			

					
			<?		
			
			}
			

?>
    </span>
    </td>
    <td colspan="2" align="left" valign="top">
    <span class="style5">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		
			for ( $h=1; $h<count($dataAcc); $h++){
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
							for( $d=0; $d<$tothead+1; $d++ ){
							
							?>
            
  				&nbsp;<? echo $dataAcc[$d]; ?><br>
			

					
						<?	
							}
					}
					
				}	
}

?>
    </span>
    
    </td>
  </tr>
</table>
  <table class="background1" width="692" height="150" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="20" colspan="2" align="center" valign="middle"><span class="style7">รายรับ</span></td>
    <td colspan="2" align="center" valign="middle"><span class="style7">รายจ่าย</span></td>
  </tr>
  <tr>
    <td width="295" align="right" valign="top"><span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);
			//to2n
			$rowAcc[0] =  str_replace(" ","",$rowAcc[0],$var);
			$headAcc = explode("	",$rowAcc[0]);
			//$totleft = array_search("รวมเงิน",$headAcc);
			$totleft = array_search($row_DetailRS_s['cutontext'],$headAcc);
			
			//for ( $h=0; $h<$row_DetailRS1['cutfield']+1; $h++){
			for ( $h=$tothead+1; $h<$totleft+1; $h++){
				
			?>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><? echo $headAcc[$h]; 
			
			?>::</td></tr></table>
			<?		
			
			}
			

?>
    </span></td>
    <td width="92" align="left" valign="top">
      <span class="style5">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		

								
				for ( $h=1; $h<count($dataAcc); $h++){
				
	
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
							
							//for( $d=0; $d<$row_DetailRS1['cutfield']+1; $d++ ){
							
							for( $d=$tothead+1; $d<$totleft+1; $d++ ){
							
							?>            
  		<table border="0" cellpadding="0" cellspacing="0"><tr><td>
		<? if ($dataAcc[$d]==""){
		echo "<font color ='ffffff'>&nbsp; ฿</font>"; 
		} else {
		echo "&nbsp;".$dataAcc[$d]."<font color ='ffffff'> ฿</font>";
			}
		?></td></tr></table>
			

					
						<?	
							}
					}
					
				}	
}

?>
    </span> </td>
	
    <td width="196" align="right" valign="top">
      <span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว
			$headAcc = explode("	",$rowAcc[0]);
			//for ( $h=$row_DetailRS1['cutfield']+1; $h<count($headAcc)-$row_DetailRS1['cutfield2']; $h++){
			for ( $h=$totleft+1; $h<count($headAcc)-$row_DetailRS1['cutfield2']; $h++){
				echo $headAcc[$h].":: <br>";
			}
				

?>
      </span>	</td>
    <td width="99" align="left" valign="top">
      <span class="style5">
      <?
for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		

				for ( $h=0; $h<count($dataAcc); $h++){
				
				
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
						//for( $d=$row_DetailRS1['cutfield']+1; $d<count($dataAcc)-$row_DetailRS1['cutfield2']; $d++ ){
						for( $d=$totleft+1; $d<count($dataAcc)-$row_DetailRS1['cutfield2']; $d++ ){
							?>
                            <table border="0" cellpadding="0" cellspacing="0"><tr><td>
		<? if ($dataAcc[$d]==""){
		echo "<font color ='ffffff'>&nbsp; ฿</font>"; 
		} else {
		echo "&nbsp;".$dataAcc[$d]."<font color ='ffffff'> ฿</font>";
			}
		?></td></tr></table>
							
                            <?
						}
					}
				}
}

?>
      </span>	</td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="top">
      <span class="style7">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว
			$headAcc = explode("	",$rowAcc[0]);
			
			for ( $h=count($headAcc)-$row_DetailRS1['cutfield2']; $h<count($headAcc); $h++){
				echo "&nbsp;".$headAcc[$h].":: <br>";
			}


	
	
?>
    </span> </td>
    <td colspan="2" align="left" valign="top">
      <span class="style7">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		// แบ่งแถวส่วนรายละเอียด(Fecord) ออกเป็นฟิลด์ (Field)

				for ( $h=0; $h<count($dataAcc); $h++){
				//	if ( $noAcc == trim($dataAcc[$h] ) ){ 
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
					
						for( $d=count($dataAcc)-$row_DetailRS1['cutfield2']; $d<count($dataAcc); $d++ ){
							echo "&nbsp;".$dataAcc[$d]."<br>";
						}
					}
				}
}

?>
      </span>	</td>
  </tr>
</table>
<div align="center"><span class="style5">
  <?
switch( date('m') ) {
				case '01' : $mThai = "มกราคม "; break;  case '02' : $mThai = "กุมภาพันธ์ "; break;
				case '03' : $mThai = "มีนาคม "; break;  case '04' : $mThai = "เมษายน "; break;
				case '05' : $mThai = "พฤษภาคม "; break;  case '06' : $mThai = "มิถุนายน "; break;
				case '07' : $mThai = "กรกฎาคม "; break;  case '08' : $mThai = "สิงหาคม "; break;
				case '09' : $mThai = "กันยายน "; break;  case '10' : $mThai = "ตุลาคม "; break;
				case '11' : $mThai = "พฤศจิกายน "; break;  case '12' : $mThai = "ธันวาคม "; break;  }
				
				
?>
  รายงาน ณ วันที่ &nbsp;<? echo date('j'); ?>&nbsp;&nbsp; เดือน <? echo $mThai; ?> &nbsp;&nbsp; พ.ศ. <? echo (date('Y')+543); ?>&nbsp;&nbsp; เวลา : <? echo date('h:i:s a'); ?> <br />
  ผู้ยื่นคำขอ/พิมพ์  : <? echo $_SESSION['name']; ?></span> 
  
  <? if ($_SESSION['permit']=="accounting"){?>
  
  <span class="style5">ตำแหน่ง นักวิชาการเงินและบัญชี</span>
<? } ?>
  <? if ($_SESSION['permit']=="head_accounting"){?>
  
  <span class="style5">ตำแหน่ง หัวหน้างานการเงิน</span>
<? } ?>
  

</div>





<!--อีกเดือน -->
<h5> </h5>

<div align="center" class="style5">
  <?
$directory = "resource".$type;
	if (substr($directory,-1)!="/" && $directory!=""){
		 $directory.="/";
	}

	$dir = opendir($directory);
	$mAccex = explode("-",$last2);
	$yAcc = $mAccex[0];
	
	$mAccex = explode(".",$mAccex[1]);
	
	
	switch($mAccex[0]) {
		case '01' : $mAccThai = "มกราคม "; break;
		case '02' : $mAccThai = "กุมภาพันธ์ "; break;
		case '03' : $mAccThai = "มีนาคม "; break;
		case '04' : $mAccThai = "เมษายน "; break;
		case '05' : $mAccThai = "พฤษภาคม "; break;
		case '06' : $mAccThai = "มิถุนายน "; break;
		case '07' : $mAccThai = "กรกฎาคม "; break;
		case '08' : $mAccThai = "สิงหาคม "; break;
		case '09' : $mAccThai = "กันยายน "; break;
		case '10' : $mAccThai = "ตุลาคม "; break;
		case '11' : $mAccThai = "พฤศจิกายน "; break;
		case '12' : $mAccThai = "ธันวาคม "; break;	 }
	$fileAcc = $directory.$last2;

?>
  
  <B> ระบบพิมพ์สลิปออนไลน์</B><br>
  <!--<br style="page-break-before:always;">  -->
  <?php echo $row_DetailRS1['name']; ?><br>
  <?php echo $row_DetailRS1['add']; ?><br />
  ประจำเดือน  <strong><? echo $mAccThai;?> พ.ศ. <? echo $yAcc;?> </strong></div>
  <hr>
<table width="678" height="83" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr class="style7">
    <td height="20" colspan="4" align="center" valign="top">:: ข้อมูลบุคคล ::</td>
  </tr>
  <tr>
    <td width="50%" height="47" colspan="2" align="right" valign="top">
    <span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);
			//to2n
			$rowAcc[0] =  str_replace(" ","",$rowAcc[0],$var);
			$headAcc = explode("	",$rowAcc[0]);
			//$tothead = array_search("เลขที่บัญชี",$headAcc);
			$tothead = array_search($row_DetailRS_s['cutonhead'],$headAcc);
			
			//for ( $h=0; $h<$row_DetailRS1['cutfield']+1; $h++){
			for ( $h=0; $h<$tothead+1; $h++){
				
			?>
           
  				<? echo $headAcc[$h]; ?>.....<br>
			

					
			<?		
			
			}
			

?>
    </span>
    </td>
    <td colspan="2" align="left" valign="top">
    <span class="style5">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		
			for ( $h=1; $h<count($dataAcc); $h++){
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
							for( $d=0; $d<$tothead+1; $d++ ){
							
							?>
            
  				&nbsp;<? echo $dataAcc[$d]; ?><br>
			

					
						<?	
							}
					}
					
				}	
}

?>
    </span>
    
    </td>
  </tr>
</table>
  <table class="background1" width="692" height="150" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="20" colspan="2" align="center" valign="middle"><span class="style7">รายรับ</span></td>
    <td colspan="2" align="center" valign="middle"><span class="style7">รายจ่าย</span></td>
  </tr>
  <tr>
    <td width="295" align="right" valign="top"><span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);
			//to2n
			$rowAcc[0] =  str_replace(" ","",$rowAcc[0],$var);
			$headAcc = explode("	",$rowAcc[0]);
			
			//$totleft = array_search("รวมเงิน",$headAcc);
			$totleft = array_search($row_DetailRS_s['cutontext'],$headAcc);
			
			//for ( $h=0; $h<$row_DetailRS1['cutfield']+1; $h++){
			for ( $h=$tothead+1; $h<$totleft+1; $h++){
				
			?><? echo $headAcc[$h]; ?>::<br>
			<?		
			
			}
			

?>
    </span></td>
    <td width="92" align="left" valign="top">
      <span class="style5">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		

								
				for ( $h=1; $h<count($dataAcc); $h++){
				
	
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
							
							//for( $d=0; $d<$row_DetailRS1['cutfield']+1; $d++ ){
							
							for( $d=$tothead+1; $d<$totleft+1; $d++ ){
							
							?>
                            <table border="0" cellpadding="0" cellspacing="0"><tr><td>
		<? if ($dataAcc[$d]==""){
		echo "<font color ='ffffff'>&nbsp; ฿</font>"; 
		} else {
		echo "&nbsp;".$dataAcc[$d]."<font color ='ffffff'> ฿</font>";
			}
		?></td></tr></table>
							
                            <?
							}
					}
					
				}	
}

?>
    </span> </td>
	
    <td width="196" align="right" valign="top">
      <span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว
			$headAcc = explode("	",$rowAcc[0]);
			//for ( $h=$row_DetailRS1['cutfield']+1; $h<count($headAcc)-$row_DetailRS1['cutfield2']; $h++){
			for ( $h=$totleft+1; $h<count($headAcc)-$row_DetailRS1['cutfield2']; $h++){
				echo $headAcc[$h].":: <br>";
			}
				

?>
      </span>	</td>
    <td width="99" align="left" valign="top">
      <span class="style5">
      <?
for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		

				for ( $h=0; $h<count($dataAcc); $h++){
				
				
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
						//for( $d=$row_DetailRS1['cutfield']+1; $d<count($dataAcc)-$row_DetailRS1['cutfield2']; $d++ ){
						for( $d=$totleft+1; $d<count($dataAcc)-$row_DetailRS1['cutfield2']; $d++ ){
							?>
                            <table border="0" cellpadding="0" cellspacing="0"><tr><td>
		<? if ($dataAcc[$d]==""){
		echo "<font color ='ffffff'>&nbsp; ฿</font>"; 
		} else {
		echo "&nbsp;".$dataAcc[$d]."<font color ='ffffff'> ฿</font>";
			}
		?></td></tr></table>
							
                            <?
						}
					}
				}
}

?>
      </span>	</td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="top">
      <span class="style7">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว
			$headAcc = explode("	",$rowAcc[0]);
			
			for ( $h=count($headAcc)-$row_DetailRS1['cutfield2']; $h<count($headAcc); $h++){
				echo "&nbsp;".$headAcc[$h].":: <br>";
			}


	
	
?>
    </span> </td>
    <td colspan="2" align="left" valign="top">
      <span class="style7">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		// แบ่งแถวส่วนรายละเอียด(Fecord) ออกเป็นฟิลด์ (Field)

				for ( $h=0; $h<count($dataAcc); $h++){
				//	if ( $noAcc == trim($dataAcc[$h] ) ){ 
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
					
						for( $d=count($dataAcc)-$row_DetailRS1['cutfield2']; $d<count($dataAcc); $d++ ){
							echo "&nbsp;".$dataAcc[$d]."<br>";
						}
					}
				}
}

?>
      </span>	</td>
  </tr>
</table>
<div align="center"><span class="style5">
  <?
switch( date('m') ) {
				case '01' : $mThai = "มกราคม "; break;  case '02' : $mThai = "กุมภาพันธ์ "; break;
				case '03' : $mThai = "มีนาคม "; break;  case '04' : $mThai = "เมษายน "; break;
				case '05' : $mThai = "พฤษภาคม "; break;  case '06' : $mThai = "มิถุนายน "; break;
				case '07' : $mThai = "กรกฎาคม "; break;  case '08' : $mThai = "สิงหาคม "; break;
				case '09' : $mThai = "กันยายน "; break;  case '10' : $mThai = "ตุลาคม "; break;
				case '11' : $mThai = "พฤศจิกายน "; break;  case '12' : $mThai = "ธันวาคม "; break;  }
				
				
?>
  รายงาน ณ วันที่ &nbsp;<? echo date('j'); ?>&nbsp;&nbsp; เดือน <? echo $mThai; ?> &nbsp;&nbsp; พ.ศ. <? echo (date('Y')+543); ?>&nbsp;&nbsp; เวลา : <? echo date('h:i:s a'); ?> <br />
  ผู้ยื่นคำขอ/พิมพ์  : <? echo $_SESSION['name']; ?></span> 
  
  <? if ($_SESSION['permit']=="accounting"){?>
  
   <span class="style5">ตำแหน่ง นักวิชาการเงินและบัญชี</span>
<? } ?>
  <? if ($_SESSION['permit']=="head_accounting"){?>
  
  <span class="style5">ตำแหน่ง หัวหน้างานการเงิน</span>
<? } ?>
  

</div>








<!--อีกเดือน -->
<h5> </h5>

<div align="center" class="style5">
  <?
$directory = "resource".$type;
	if (substr($directory,-1)!="/" && $directory!=""){
		 $directory.="/";
	}

	$dir = opendir($directory);
	$mAccex = explode("-",$last3);
	$yAcc = $mAccex[0];
	
	$mAccex = explode(".",$mAccex[1]);
	
	
	switch($mAccex[0]) {
		case '01' : $mAccThai = "มกราคม "; break;
		case '02' : $mAccThai = "กุมภาพันธ์ "; break;
		case '03' : $mAccThai = "มีนาคม "; break;
		case '04' : $mAccThai = "เมษายน "; break;
		case '05' : $mAccThai = "พฤษภาคม "; break;
		case '06' : $mAccThai = "มิถุนายน "; break;
		case '07' : $mAccThai = "กรกฎาคม "; break;
		case '08' : $mAccThai = "สิงหาคม "; break;
		case '09' : $mAccThai = "กันยายน "; break;
		case '10' : $mAccThai = "ตุลาคม "; break;
		case '11' : $mAccThai = "พฤศจิกายน "; break;
		case '12' : $mAccThai = "ธันวาคม "; break;	 }
	$fileAcc = $directory.$last3;

?>
  
  <B> ระบบพิมพ์สลิปออนไลน์</B><br>
  <!--<br style="page-break-before:always;">  -->
  <?php echo $row_DetailRS1['name']; ?><br>
  <?php echo $row_DetailRS1['add']; ?><br />
  ประจำเดือน  <strong><? echo $mAccThai;?> พ.ศ. <? echo $yAcc;?> </strong></div>
  <hr>
<table width="678" height="83" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr class="style7">
    <td height="20" colspan="4" align="center" valign="top">:: ข้อมูลบุคคล ::</td>
  </tr>
  <tr>
    <td width="50%" height="47" colspan="2" align="right" valign="top">
    <span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);
			//to2n
			$rowAcc[0] =  str_replace(" ","",$rowAcc[0],$var);
			$headAcc = explode("	",$rowAcc[0]);
			//$tothead = array_search("เลขที่บัญชี",$headAcc);
			$tothead = array_search($row_DetailRS_s['cutonhead'],$headAcc);
			
			//for ( $h=0; $h<$row_DetailRS1['cutfield']+1; $h++){
			for ( $h=0; $h<$tothead+1; $h++){
				
			?>
           
  				<? echo $headAcc[$h]; ?>.....<br>
			

					
			<?		
			
			}
			

?>
    </span>
    </td>
    <td colspan="2" align="left" valign="top">
    <span class="style5">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		
			for ( $h=1; $h<count($dataAcc); $h++){
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
							for( $d=0; $d<$tothead+1; $d++ ){
							
							?>
            
  				&nbsp;<? echo $dataAcc[$d]; ?><br>
			

					
						<?	
							}
					}
					
				}	
}

?>
    </span>
    
    </td>
  </tr>
</table>
  <table class="background1" width="692" height="150" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="20" colspan="2" align="center" valign="middle"><span class="style7">รายรับ</span></td>
    <td colspan="2" align="center" valign="middle"><span class="style7">รายจ่าย</span></td>
  </tr>
  <tr>
    <td width="295" align="right" valign="top"><span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);
			//to2n
			$rowAcc[0] =  str_replace(" ","",$rowAcc[0],$var);
			$headAcc = explode("	",$rowAcc[0]);
			
			//$totleft = array_search("รวมเงิน",$headAcc);
			$totleft = array_search($row_DetailRS_s['cutontext'],$headAcc);
			
			//for ( $h=0; $h<$row_DetailRS1['cutfield']+1; $h++){
			for ( $h=$tothead+1; $h<$totleft+1; $h++){
				
			?><? echo $headAcc[$h]; ?>::<br>
			<?		
			
			}
			

?>
    </span></td>
    <td width="92" align="left" valign="top">
      <span class="style5">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		

								
				for ( $h=1; $h<count($dataAcc); $h++){
				
	
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
							
							//for( $d=0; $d<$row_DetailRS1['cutfield']+1; $d++ ){
							
							for( $d=$tothead+1; $d<$totleft+1; $d++ ){
							
							?>
                            <table border="0" cellpadding="0" cellspacing="0"><tr><td>
		<? if ($dataAcc[$d]==""){
		echo "<font color ='ffffff'>&nbsp; ฿</font>"; 
		} else {
		echo "&nbsp;".$dataAcc[$d]."<font color ='ffffff'> ฿</font>";
			}
		?></td></tr></table>
							
                            <?
							}
					}
					
				}	
}

?>
    </span> </td>
	
    <td width="196" align="right" valign="top">
      <span class="style5">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว
			$headAcc = explode("	",$rowAcc[0]);
			//for ( $h=$row_DetailRS1['cutfield']+1; $h<count($headAcc)-$row_DetailRS1['cutfield2']; $h++){
			for ( $h=$totleft+1; $h<count($headAcc)-$row_DetailRS1['cutfield2']; $h++){
				echo $headAcc[$h].":: <br>";
			}
				

?>
      </span>	</td>
    <td width="99" align="left" valign="top">
      <span class="style5">
      <?
for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		

				for ( $h=0; $h<count($dataAcc); $h++){
				
				
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
						//for( $d=$row_DetailRS1['cutfield']+1; $d<count($dataAcc)-$row_DetailRS1['cutfield2']; $d++ ){
						for( $d=$totleft+1; $d<count($dataAcc)-$row_DetailRS1['cutfield2']; $d++ ){
							?>
                            <table border="0" cellpadding="0" cellspacing="0"><tr><td>
		<? if ($dataAcc[$d]==""){
		echo "<font color ='ffffff'>&nbsp; ฿</font>"; 
		} else {
		echo "&nbsp;".$dataAcc[$d]."<font color ='ffffff'> ฿</font>";
			}
		?></td></tr></table>
							
                            <?
						}
					}
				}
}

?>
      </span>	</td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="top">
      <span class="style7">
      <?

$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว
			$headAcc = explode("	",$rowAcc[0]);
			
			for ( $h=count($headAcc)-$row_DetailRS1['cutfield2']; $h<count($headAcc); $h++){
				echo "&nbsp;".$headAcc[$h].":: <br>";
			}


	
	
?>
    </span> </td>
    <td colspan="2" align="left" valign="top">
      <span class="style7">
      <?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		// แบ่งแถวส่วนรายละเอียด(Fecord) ออกเป็นฟิลด์ (Field)

				for ( $h=0; $h<count($dataAcc); $h++){
				//	if ( $noAcc == trim($dataAcc[$h] ) ){ 
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
					
						for( $d=count($dataAcc)-$row_DetailRS1['cutfield2']; $d<count($dataAcc); $d++ ){
							echo "&nbsp;".$dataAcc[$d]."<br>";
						}
					}
				}
}

?>
      </span>	</td>
  </tr>
</table>
<div align="center"><span class="style5">
  <?
switch( date('m') ) {
				case '01' : $mThai = "มกราคม "; break;  case '02' : $mThai = "กุมภาพันธ์ "; break;
				case '03' : $mThai = "มีนาคม "; break;  case '04' : $mThai = "เมษายน "; break;
				case '05' : $mThai = "พฤษภาคม "; break;  case '06' : $mThai = "มิถุนายน "; break;
				case '07' : $mThai = "กรกฎาคม "; break;  case '08' : $mThai = "สิงหาคม "; break;
				case '09' : $mThai = "กันยายน "; break;  case '10' : $mThai = "ตุลาคม "; break;
				case '11' : $mThai = "พฤศจิกายน "; break;  case '12' : $mThai = "ธันวาคม "; break;  }
				
				
?>
  รายงาน ณ วันที่ &nbsp;<? echo date('j'); ?>&nbsp;&nbsp; เดือน <? echo $mThai; ?> &nbsp;&nbsp; พ.ศ. <? echo (date('Y')+543); ?>&nbsp;&nbsp; เวลา : <? echo date('h:i:s a'); ?> <br />
  ผู้ยื่นคำขอ/พิมพ์  : <? echo $_SESSION['name']; ?></span> 
  
  <? if ($_SESSION['permit']=="accounting"){?>
  
   <span class="style5">ตำแหน่ง นักวิชาการเงินและบัญชี</span>
<? } ?>
  <? if ($_SESSION['permit']=="head_accounting"){?>
  
  <span class="style5">ตำแหน่ง หัวหน้างานการเงิน</span>
<? } ?>
  

</div>





<div id="no_p">
<? // no print?>
</div>





</body>
</html>
<?php
mysql_free_result($DetailRS1);
?>