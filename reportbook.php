<?php require_once('Connections/conn.php'); ?>
<? include("thaiday.php"); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$noAcc = $_POST['noAcc3'];
$mAcc = $_POST['mAcc2'];

//echo $mAcc;
//echo $noAcc;
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
<style>
h5{
	font-size:16px; font-family:MS Sans Serif;
	}

table, th, td {
   /*border: 1px solid black;*/
   	/*border-bottom:#000 0.5px dotted;*/

	
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	
	border-bottom-width: 0px;
	border-right-width: 0px;
	border-left-width: 0px;
	border-right-color: #999999;
	border-left-color: #999999;
	border-bottom-color: #999999;
	
   /*border-left:#000 0.5px dotted;
   border-top:#000 0.5px dotted;
   border-right:#000 0.5px dotted;
   font-size:10px; font-family:MS Sans Serif; height:14px;*/
   font-size:16px; font-family:"TH SarabunPSK"; height:16px;
}   
  p.date {
    text-align: right;
} 

@media print {
    
	#no_p{display:none;}
	#followbuttons{display:none;}
	
  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="jquery-ui-1.11.2.custom/jquery-ui.css">
  <script src="jquery-1.10.2.js"></script>
  <script src="jquery-ui.js"></script>
  

<title></title>
<style type="text/css">
<style>
body{
	 font-size:20px; font-family:"TH SarabunPSK"; height:20px;
	}

#apDiv1 {
	position:absolute;
	width:272px;
	height:35px;
	z-index:1;
	left: 354px;
	top: 120px;
	font-family:"TH SarabunPSK";
}
#apDiv2 {
	position:absolute;
	width:190px;
	height:78px;
	z-index:2;
	left: 19px;
	top: 419px;
	font-family:"TH SarabunPSK";
}
#apDiv3 {
	position:absolute;
	width:500px;
	height:42px;
	z-index:3;
	left: 108px;
	top: 400px;
	font-family:"TH SarabunPSK";
}
#apDiv4 {
	position:absolute;
	width:593px;
	height:115px;
	z-index:4;
	left: 64px;
	top: 210px;
	font-family:"TH SarabunPSK";
}
#apDiv5 {
	position:absolute;
	width:271px;
	height:41px;
	z-index:5;
	left: 62px;
	top: 120px;
	font-family:"TH SarabunPSK";
}
#apDiv6 {
	position:absolute;
	width:236px;
	height:115px;
	z-index:6;
	left: 62px;
	top: 770px;
	font-family:"TH SarabunPSK";
	font-size:20px;
	font-family:"TH SarabunPSK";
	height:20px;
}
-->
</style>
</head>

<body>
<div id="apDiv6">กลุ่มอำนวยการ<br />
งานการเงินและบัญชี<br />
โทร ๐-๔๒๘๑-๒๖๕๗<br />
โทรสาร ๐-๔๒๘๑-๒๒๖๗
</div>
<center>
</center>

<p>&nbsp;</p>
<div id="apDiv1" align="right" style="font-size:20px">สำนักงาน กศน.จังหวัดเลย<br />
ต.กุดป่อง อ.เมือง จ.เลย ๔๒๐๐๐</div>
<center><img src="krut11.jpg" width="90" height="90" ></center><br />

<div id="apDiv5"><font style="font-size:20px">
ที่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/</font></div>
<font style="font-size:16px"><br />

<? $curDay = date("d");
	$curMonth = date("m");
	$curYear = date("Y")+543;
	$showtodaydate=$curDay."-".$curMonth."-".$curYear ;

	
	$today_date = date("Y-m-d");

	?>

<font style="font-family:'TH SarabunPSK'; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo  ThaiEachDate($today_date); ?></font>
<br />

</font>


<font style="font-size:16px"><br />
<br />


</font>
<table border="0" cellpadding="0" cellspacing="0" style="text-align:justify; font-family:'TH SarabunPSK'">
  <tr>
  <td><img src="images/lblank.jpg" width="54" /></td>
    <td><font style="font-size:20px; text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หนังสือฉบับนี้ให้ไว้เพื่อรับรองว่า 
 <?
$directory = "resource".$type;
	if (substr($directory,-1)!="/" && $directory!=""){
		 $directory.="/";
	}

	$dir = opendir($directory);
	$mAccex = explode("-",$mAcc);
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
	$fileAcc = $directory.$mAcc;

?>
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
			//for ( $h=3; $h<$tothead+1; $h++){
				
			?>
           
  				<? // echo $headAcc[4]; ?>
			

					
			<?		
			
		//	}
			

?>
<?

for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		
			for ( $h=1; $h<count($dataAcc); $h++){
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
						
							
							?>
            
  				&nbsp;<strong><? echo $dataAcc[1]; ?></strong>&nbsp;
			

					
						<?	
						
					}
					
				}	
}

?> <? echo $_POST['pt'];?> ตำแหน่ง <strong>
  <? if ($_SESSION['permit']=="accounting"){?>
  
  <? echo $_POST['pos']; } else {?>
<? echo $_SESSION['f2']; }?></strong> สังกัด<? if($_POST['suborg']!=''){ echo "ศูนย์การศึกษานอกระบบและการศึกษาตามอัธยาศัย อำเภอ".$_POST['suborg']." "; }?>สำนักงานส่งเสริมการศึกษานอกระบบและการศึกษาตามอัธยาศัย จังหวัดเลย สำนักงานส่งเสริมการศึกษานอกระบบและการศึกษาตามอัธยาศัย สำนักงานปลัดกระทรวงศึกษาธิการ กระทรวงศึกษาธิการ  อัตราเงินเดือน&nbsp;
<strong><?




$totleft = array_search($row_DetailRS_s['cutontext'],$headAcc);
for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		// แบ่งแถวส่วนรายละเอียด(Fecord) ออกเป็นฟิลด์ (Field)

				for ( $h=0; $h<count($dataAcc); $h++){
				//	if ( $noAcc == trim($dataAcc[$h] ) ){ 
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
					
						for( $d=count($dataAcc)-$row_DetailRS1['cutfield2']; $d<count($dataAcc); $d++ ){
							//echo "&nbsp;".$dataAcc[$d];
							//$ttt = $dataAcc[3].$dataAcc[4].$dataAcc[6].$dataAcc[7];
							$ttt = $dataAcc[$totleft];
						}
					}
				}
}

if($_POST['figsal']!=""){
	
	$ttt = number_format((float)$_POST['figsal'], 2, '.', ','); 
	}

$ttt = str_replace(" ","",$ttt);
$ttt = str_replace('"',"",$ttt);

$at = explode(".",$ttt);
//echo $at[0];
$btext = $at;
$btext = str_replace(',',"",$btext);
$btext = $btext[0];


$ttt = str_replace("1","๑",$at[0]);
$ttt = str_replace("2","๒",$ttt);
$ttt = str_replace("3","๓",$ttt);
$ttt = str_replace("4","๔",$ttt);
$ttt = str_replace("5","๕",$ttt);
$ttt = str_replace("6","๖",$ttt);
$ttt = str_replace("7","๗",$ttt);
$ttt = str_replace("8","๘",$ttt);
$ttt = str_replace("9","๙",$ttt);
$ttt = str_replace("0","๐",$ttt);

echo $ttt." บาท "; 

?></strong>

<?
$input_number=number_format((float)$btext, 2, '.', ',');
//echo $btext;
//$input_number=number_format((float)$ttax, 2, '.', ',');
//echo $input_number."<br>";

$digit=array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ','สิบเอ็ด');
$digit2=array('','สิบ','ร้อย','พัน','พัน','หมื่น','แสน','ล้าน');

$explode_number = explode(".",$input_number);
$num0=$explode_number[0]; // เลขจำนวนเต็ม
$num1=$explode_number[1]; // หลักทศนิยม


// เลขจำนวนเต็ม
$didit2_chk=strlen($num0)-1;
for($i=0;$i<=strlen($num0)-1;$i++){
 
  $cut_input_number=substr($num0,$i,1);
  
  if($cut_input_number==0){ // ถ้าเลข 0 ไม่ต้องใส่ค่าอะไร
   //$bathtext1.=''."".$digit2[$didit2_chk]; 
  }elseif($cut_input_number==2 && $didit2_chk==1){ // ถ้าเลข 2 อยู่หลักสิบ
   $bathtext1.='ยี่'."".$digit2[$didit2_chk]; 
  }elseif($cut_input_number==1 && $didit2_chk==1){ // ถ้าเลข 1 อยู่หลักสิบ
   $bathtext1.= ''."".$digit2[$didit2_chk]; 
  }elseif($cut_input_number==1 && $didit2_chk==0){ // ถ้าเลข 1 อยู่หลักหน่วย
   if(substr($num0,$i-1,1)==0){
	   
    //to2n 
	   if (strlen($num0)==1){
		   $bathtext1.= 'หนึ่ง'."".$digit2[$didit2_chk];
	   } else {
   			 $bathtext1.= 'เอ็ด'."".$digit2[$didit2_chk];
	   }
	
   }else{
	   //to2n 
	   if (strlen($num0)==1){
		   $bathtext1.= 'หนึ่ง'."".$digit2[$didit2_chk];
	   } else {
   			 $bathtext1.= 'เอ็ด'."".$digit2[$didit2_chk];
	   }
   } 
     
  }else{
   $bathtext1.= $digit[$cut_input_number]."".$digit2[$didit2_chk];
  }
  
  
  $didit2_chk=$didit2_chk-1;
}

 //to2n 
	   if ($num0==0){
		   //$bathtext1.='บาท';
	   } else {
		   $bathtext1.='บาท';

	   }
// เลขทศนิยม
$didit2_chk=strlen($num1)-1;
for($i=0;$i<=strlen($num1)-1;$i++){
 
  $cut_input_number=substr($num1,$i,1);
  
  if($cut_input_number==0){ // ถ้าเลข 0 ไม่ต้องใส่ค่าอะไร
  
  }elseif($cut_input_number==2 && $didit2_chk==1){ // ถ้าเลข 2 อยู่หลักสิบ
   $bathtext1.='ยี่'."".$digit2[$didit2_chk]; 
  }elseif($cut_input_number==1 && $didit2_chk==1){ // ถ้าเลข 1 อยู่หลักสิบ
   $bathtext1.= ''."".$digit2[$didit2_chk];
  }elseif($cut_input_number==1 && $didit2_chk==0){ // ถ้าเลข 1 อยู่หลักหน่วย
   if(substr($num1,$i-1,1)==0){
    $bathtext1.= 'หนึ่ง'."".$digit2[$didit2_chk];
   }else{
    $bathtext1.= 'เอ็ด'."".$digit2[$didit2_chk];
   } 
  }else{
   $bathtext1.= $digit[$cut_input_number]."".$digit2[$didit2_chk];
  }
  
  
  $didit2_chk=$didit2_chk-1;
}
//to2n
if ($num1>0){
$bathtext1.='สตางค์';
} else {
	$bathtext1.='ถ้วน';
	}
//echo trim($bathtext1);
$bathtext1 = str_replace(" ","",$bathtext1);
echo "(".$bathtext1;
?>
) จริง
<? 
/*$query_p = "SELECT * FROM member WHERE username = '".$_SESSION['MM_Username']."'";
$DetailRS_p = mysql_query($query_p, $conn) or die(mysql_error());
$row_DetailRS_p = mysql_fetch_assoc($DetailRS_p);*/


$ttt = str_replace("1","๑",$_POST['duration']);
$ttt = str_replace("2","๒",$ttt);
$ttt = str_replace("3","๓",$ttt);
$ttt = str_replace("4","๔",$ttt);
$ttt = str_replace("5","๕",$ttt);
$ttt = str_replace("6","๖",$ttt);
$ttt = str_replace("7","๗",$ttt);
$ttt = str_replace("8","๘",$ttt);
$ttt = str_replace("9","๙",$ttt);
$ttt = str_replace("0","๐",$ttt);
if ($ttt!=''){
echo "เริ่มรับราชการหริอปฏิบัติราชการตั้งแต่วันที่ ".$ttt." จนถึงปัจจุบัน";
}
?>
</font></td>
<td><img src="images/lblank.jpg" width="40" /></td>
  </tr>
</table>




<br />
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
<a href="#" rel="nofollow" onclick="myFunction()"><img src="print.png" border="0" title="<-- ปริ๊น -->" /></a><br /><br />
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
<div id="no_p">
<? // no print?>
<!--<a href="#" onclick="myFunction()"><img src="print.png" border="0" /></a>-->
<script>
function goBack() {
    window.history.back()
}
function myFunction() {
    window.print();
}
</script>



</div>

<br />

<p>&nbsp;</p>
<div id="apDiv3" align="right" style="top:414px; font-size:20px">
<form id="form2" name="form2" method="post" action="">
<center>
ให้ไว้ ณ วันที่ &nbsp; <? echo  ThaiEachDate($today_date); ?><br />
<br /><br />
<br />
<!--(นายบุญโชค  พลดาหาญ)--><br />
<!--ผู้อำนวยการสำนักงานส่งเสริมการศึกษานอกระบบและการศึกษาตามอัธยาศัย--><br />

</center>
</form>
</div>
</body>
</html>
<?php
mysql_free_result($DetailRS_s);
/*mysql_free_result($DetailRS_p);*/
?>