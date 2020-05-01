<?php require_once('Connections/conn.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$noAcc = $_POST['noAcc'];
$mAcc = $_POST['mAcc'];

//echo $mAcc;
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>ระบบสลิปเงินเดือนออนไลน์</title>
<style type="text/css">
<!--
.style2 {font-size: small}
.style3 {font-size: 12px; }
-->

@media print {
    
	#no_p{display:none;}
	table { font-size: 8pt }
	body { font-size: 8pt }
	form { font-size: 8pt }
	
  }






</style>

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

</head>
<body>
<div id="toprint" class="toprint"> 

<form id="form1" name="form1" method="post" action="">
<?
//echo "<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">";
echo "<center>";

echo "<table border=0 cellspadding=1 cellspacing=20>";
/* echo "<tr><td valign=top align=center>";		// คอลัมภ์ที่ 1	สั่งพิมพ์ + กลับหนัาหลัก
echo "<a href=\"\"><img class=\"shakeimage\" onmouseover=\"init(this);rattleimage()\" style=\"LEFT: -3px; TOP: 0px\" onclick=\"window.print()\" onmouseout=\"stoprattle(this);top.focus()\" src=\"images/button/th_print_".$buttontype.".gif\" border=\"0\" type=\"image\"></a><br>";
echo "<a href=\"modules.php?name=$module_name\">";
echo "<img class=\"shakeimage\" onmouseover=\"init(this);rattleimage()\" style=\"LEFT: -3px; TOP: 0px\" onclick=\"top.focus()\" onmouseout=\"stoprattle(this);top.focus()\" src=\"images/button/th_home_".$buttontype.".gif\" border=\"0\" type=\"image\"></a>";

echo "</td><td>";		// คอลัมภ์ที่ 2	แสดงรายละเอียด */


echo "<tr>";		// คอลัมภ์ที่ 2	แสดงรายละเอียด

	//echo "<form method=\"post\" action=\"modules.php?name=$module_name&file=report.php&op=printAcc&mAcc=$mAcc&yAcc=$yAcc&noAcc=$noAcc\" name=\"printForm\">";

	$directory = "resource";
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
	//$fileAcc = $directory.$yAcc."2554-02.txt" ;
	//echo $fileAcc;

	if ( file_exists ($fileAcc) ){

		echo "</td><td>";		// คอลัมภ์ที่ 2	แสดงรายละเอียด

			//filesize($fileAcc)			=	ขนาดของไฟล์ 
			//sizeof($rowAcc)		=	จำนวนแถวทั้งหมดในไฟล์ 
			
			
mysql_select_db($database_conn, $conn);

$query_DetailRS1 = "SELECT * FROM orgtxt WHERE orgid = 0";
$DetailRS1 = mysql_query($query_DetailRS1, $conn) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);


?>
<table width="398" border=0 cellspacing=0 cellspdding=0>
  <tr>
    <td align="center" valign="middle"></td>
  </tr>
  <tr><td align="center">
			<div align="center"><span class="style3"><B> ระบบพิมพ์สลิปออนไลน์</B><br>
	        <!--<br style="page-break-before:always;">  -->
	        <?php echo $row_DetailRS1['name']; ?><br>
	        <?php echo $row_DetailRS1['add']; ?>
			  
	        <? 
	
			
			
			if ( $status_auth_array[0] == $status_dep_ck[0] ){
				//echo "<br><B>กลุ่ม</B> ".$MUgroup_name."";
				if ( $MUsubgroup_name != '' ){
					echo " &nbsp; <B>งาน</B> ".$MUsubgroup_name.""; }
			}else{
				echo "<br><b>".$MUdepartment_name."</b>";
			}

			echo "<br>ประจำเดือน &nbsp;<B>".$mAccThai."</B>  พ.ศ. <B>".$yAcc."</B><br><br>";
			echo "</td></tr></table>";
			
			//echo $noAcc;
			
			//exit ();
			?>
		    </span>
		  </div>
			<table width="200" border="1" bordercolor="#CCCCCC">
  <tr>
    <td align="center" valign="top" class="style3">	  <strong>รายรับ</strong><br />
	  <? //รายรับ
			echo "<table border=0 cellspdding=0 cellspacing=0><tr>";
			$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว

			//  กำหนดให้แสดงรายละเอียดส่วนหัว จากแถวแรก
			$headAcc = explode("	",$rowAcc[0]);		// แบ่งแถวส่วนหัว(Fecord) ออกเป็นฟิลด์ (Field)
			echo "<td valign=top>";
			
			//array_search("รวมเงิน",$headAcc);
			
			//for ( $h=0; $h<count($headAcc); $h++){//<------------to2n mark
			//for ( $h=0; $h<array_search("รวมเงิน",$headAcc)+1; $h++){
			//for ( $h=0; $h<array_search($row_DetailRS1['cutfield'],$headAcc)+1; $h++){
			for ( $h=0; $h<$row_DetailRS1['cutfield']+1; $h++){
				echo "<table border=0 cellspdding=1 cellspacing=1 bgcolor=#c0c0c0 width=100%><tr><td bgcolor=#FFFFFF nowrap>&nbsp; ".$headAcc[$h]." &nbsp;&nbsp;</td></tr></table>";
				echo "<table><tr height=1><td></td></tr></table>";
			}
			
			echo "</td>";
		
			//  กำหนดให้ค้นหา และแสดงข้อมูล ตั้งแต่บรรทัดที่ 2 เป็นต้นไป
			for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		// แบ่งแถวส่วนรายละเอียด(Fecord) ออกเป็นฟิลด์ (Field)

								
				for ( $h=1; $h<count($dataAcc); $h++){
				
					//	if ( $noAcc == trim($dataAcc[$h] ) ){ 
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
						echo "<td valign=top align=left>";
						//for( $d=0; $d<count($dataAcc); $d++ ){  //    <------------to2n mark
						
						//for( $d=0; $d<array_search($row_DetailRS1['cutfield'],$headAcc)+1; $d++ ){
						for( $d=0; $d<$row_DetailRS1['cutfield']+1; $d++ ){
							echo "<table border=0 cellspdding=1 cellspacing=1 bgcolor=#c0c0c0 width=100%><tr>"
										."<td bgcolor=#FFFFFF nowrap align=right>&nbsp; ".$dataAcc[$d]." &nbsp;</td></tr></table>";
							echo "<table><tr height=1><td></td></tr></table>"; 
						}	//end for( $d=0; $d<count($dataAcc); $d++ ){

					}	//end if ( $noAcc == trim($dataAcc[$h] ) ){ 
					echo "</td>";
				}		//end for ( $h=0; $h<count($dataAcc); $h++){
			}		//end for($i = 0; $i <= sizeof($rowAcc); $i++) {
			
			echo "</tr></table>";
	
	?>    </td>
	
	
    <td align="center" valign="top" class="style3">	  <strong>รายจ่าย</strong><br />	  <? //รายจ่าย
			echo "<table border=0 cellspdding=0 cellspacing=0><tr>";
			$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว

			//  กำหนดให้แสดงรายละเอียดส่วนหัว จากแถวแรก
			$headAcc = explode("	",$rowAcc[0]);		// แบ่งแถวส่วนหัว(Fecord) ออกเป็นฟิลด์ (Field)
			echo "<td valign=top>";
			//for ( $h=0; $h<count($headAcc); $h++){     //<------------to2n mark
			//for ( $h=array_search($row_DetailRS1['cutfield'],$headAcc)+1; $h<count($headAcc)-1; $h++){
			for ( $h=$row_DetailRS1['cutfield']+1; $h<count($headAcc)-$row_DetailRS1['cutfield2']; $h++){
				echo "<table border=0 cellspdding=1 cellspacing=1 bgcolor=#c0c0c0 width=100%><tr><td bgcolor=#FFFFFF nowrap>&nbsp; ".$headAcc[$h]." &nbsp;&nbsp;</td></tr></table>";
				echo "<table><tr height=1><td></td></tr></table>";
			}
			echo "</td>";
		
			//  กำหนดให้ค้นหา และแสดงข้อมูล ตั้งแต่บรรทัดที่ 2 เป็นต้นไป
			for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		// แบ่งแถวส่วนรายละเอียด(Fecord) ออกเป็นฟิลด์ (Field)

				for ( $h=0; $h<count($dataAcc); $h++){
				
				//	if ( $noAcc == trim($dataAcc[$h] ) ){ 
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
						echo "<td valign=top align=left>";
						
						
						//for( $d=0; $d<count($dataAcc); $d++ ){   //<------------to2n mark
						//for( $d=array_search($row_DetailRS1['cutfield'],$headAcc)+1; $d<count($dataAcc)-1; $d++ ){
						for( $d=$row_DetailRS1['cutfield']+1; $d<count($dataAcc)-$row_DetailRS1['cutfield2']; $d++ ){
							echo "<table border=0 cellspdding=1 cellspacing=1 bgcolor=#c0c0c0 width=100%><tr>"
										."<td bgcolor=#FFFFFF nowrap align=right>&nbsp; ".$dataAcc[$d]." &nbsp;</td></tr></table>";
							echo "<table><tr height=1><td></td></tr></table>"; 
						}	//end for( $d=0; $d<count($dataAcc); $d++ ){

					}	//end if ( $noAcc == trim($dataAcc[$h] ) ){ 
					echo "</td>";
				}		//end for ( $h=0; $h<count($dataAcc); $h++){
			}		//end for($i = 0; $i <= sizeof($rowAcc); $i++) {
			
			echo "</tr></table>";
	
	?>    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top" class="style2">      <? //สุทธิ
			echo "<table border=0 cellspdding=0 cellspacing=0><tr>";
			$fpAcc = fopen($fileAcc, "r");
			$frAcc = fread($fpAcc, filesize($fileAcc) );
			fclose($fpAcc);
			$rowAcc = explode("\n", $frAcc);			//  แบ่งไฟล์ออกเป็นแถว

			//  กำหนดให้แสดงรายละเอียดส่วนหัว จากแถวแรก
			$headAcc = explode("	",$rowAcc[0]);		// แบ่งแถวส่วนหัว(Fecord) ออกเป็นฟิลด์ (Field)
			echo "<td valign=top>";
			//for ( $h=0; $h<count($headAcc); $h++){     // <------------to2n mark
			for ( $h=count($headAcc)-$row_DetailRS1['cutfield2']; $h<count($headAcc); $h++){
			
				echo "<table border=0 cellspdding=1 cellspacing=1 bgcolor=#c0c0c0 width=100%><tr><td bgcolor=#FFFFFF nowrap>&nbsp; ".$headAcc[$h]." &nbsp;&nbsp;</td></tr></table>";
				echo "<table><tr height=1><td></td></tr></table>";
			}
			echo "</td>";
		
			//  กำหนดให้ค้นหา และแสดงข้อมูล ตั้งแต่บรรทัดที่ 2 เป็นต้นไป
			for($i = 1; $i <= sizeof($rowAcc); $i++) {
				$dataAcc = explode("	",$rowAcc[$i]);		// แบ่งแถวส่วนรายละเอียด(Fecord) ออกเป็นฟิลด์ (Field)

				for ( $h=0; $h<count($dataAcc); $h++){
				//	if ( $noAcc == trim($dataAcc[$h] ) ){ 
					if (($noAcc == trim($dataAcc[$h] )) ||($noAcc_old == trim($dataAcc[$h] ))) { 
						echo "<td valign=top align=left>";
						
						
						//for( $d=0; $d<count($dataAcc); $d++ ){   //<------------to2n mark
						for( $d=count($dataAcc)-$row_DetailRS1['cutfield2']; $d<count($dataAcc); $d++ ){
							echo "<table border=0 cellspdding=1 cellspacing=1 bgcolor=#c0c0c0 width=100%><tr>"
										."<td bgcolor=#FFFFFF nowrap align=right>&nbsp; ".$dataAcc[$d]." &nbsp;</td></tr></table>";
							echo "<table><tr height=1><td></td></tr></table>"; 
						}	//end for( $d=0; $d<count($dataAcc); $d++ ){

					}	//end if ( $noAcc == trim($dataAcc[$h] ) ){ 
					echo "</td>";
				}		//end for ( $h=0; $h<count($dataAcc); $h++){
			}		//end for($i = 0; $i <= sizeof($rowAcc); $i++) {
			
			echo "</tr></table>";
	
	?>    </td>
    </tr>
</table>

			
			
			
			<table border=0 cellspdding=0 cellspacing=0><tr><td class="style2">			  <?
					
			switch( date('m') ) {
				case '01' : $mThai = "มกราคม "; break;  case '02' : $mThai = "กุมภาพันธ์ "; break;
				case '03' : $mThai = "มีนาคม "; break;  case '04' : $mThai = "เมษายน "; break;
				case '05' : $mThai = "พฤษภาคม "; break;  case '06' : $mThai = "มิถุนายน "; break;
				case '07' : $mThai = "กรกฎาคม "; break;  case '08' : $mThai = "สิงหาคม "; break;
				case '09' : $mThai = "กันยายน "; break;  case '10' : $mThai = "ตุลาคม "; break;
				case '11' : $mThai = "พฤศจิกายน "; break;  case '12' : $mThai = "ธันวาคม "; break;  }
				
				
				
			echo "<div align=left>รายงาน ณ วันที่ &nbsp;".date('j')."&nbsp;&nbsp; เดือน ".$mThai."&nbsp;&nbsp; พ.ศ. ".(date('Y')+543)."&nbsp;&nbsp; เวลา : ".date('h:i:s a')."<br>"
							."ผู้ยื่นคำขอ/พิมพ์  : ".$_SESSION['name']."</div>";
			?>    			</td>
			</tr></table>


		</td></tr>
	</table>
<p>
  <?	}   ?>
  
  
  
  </td>
  </tr>
  </table>
  
</p>
</form>
</div> 
<!--<a href="#" id="print">PRINT</a>  -->
<div id="no_p">
<input type="button" value="กลับ" onclick="goback()" />
<input type="button" value="ปริ๊นสลิป" onclick="printpage()" />
</div>
<script type="text/javascript"> 
 $("#print").click( function() { 
                    $('.toprint').jqprint(); 
                    }); 
</script> 
</body>
<?php
mysql_free_result($DetailRS1);

?>

