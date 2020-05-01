<?
function ThaiEachDate($vardate="") {   
/* $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
    "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
    "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
    "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม");  */
  $_month_name = array("01"=>"&nbsp; มกราคม &nbsp;",  "02"=>"&nbsp; กุมภาพันธ์ &nbsp;",  "03"=>"&nbsp; มีนาคม &nbsp;",    
    "04"=>"&nbsp; เมษายน &nbsp;",  "05"=>"&nbsp; พฤษภาคม &nbsp;",  "06"=>"&nbsp; มิถุนายน &nbsp;",    
    "07"=>"&nbsp; กรกฎาคม &nbsp;",  "08"=>"&nbsp; สิงหาคม &nbsp;",  "09"=>"&nbsp; กันยายน &nbsp;",    
    "10"=>"&nbsp; ตุลาคม &nbsp;", "11"=>"&nbsp; พฤศจิกายน &nbsp;",  "12"=>"&nbsp; ธันวาคม &nbsp;");  
$yy =substr($vardate,0,4);$mm =substr($vardate,5,2);$dd =substr($vardate,8,2);  
$yy += 543;  
 if ($yy==543){  
  $dateT = "-";  
 }else{  
  $dateT=$dd ."".$_month_name[$mm]."".substr($yy,0,4);  
 }  
 
 if(substr($dateT,0,1)=="0"){
	//$dateT = str_replace("0","",$dateT);
	}
	
$dateT = str_replace("1","๑",$dateT);
$dateT = str_replace("2","๒",$dateT);
$dateT = str_replace("3","๓",$dateT);
$dateT = str_replace("4","๔",$dateT);
$dateT = str_replace("5","๕",$dateT);
$dateT = str_replace("6","๖",$dateT);
$dateT = str_replace("7","๗",$dateT);
$dateT = str_replace("8","๘",$dateT);
$dateT = str_replace("9","๙",$dateT);
$dateT = str_replace("0","๐",$dateT);



  return $dateT;  
} 


?>
<?
function ThaiEachDate2($vardate="") {   
/* $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
    "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
    "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
    "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม");  */
  $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
    "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
    "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
    "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม");  
$yy =substr($vardate,0,4);$mm =substr($vardate,5,2);$dd =substr($vardate,8,2);  
$yy += 543;  
 if ($yy==543){  
  $dateT = "-";  
 }else{  
  $dateT=$dd ." ".$_month_name[$mm]." ".$yy;  
 }  
  return $dateT;  
} 
?>