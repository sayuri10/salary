<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.5.2.js"></script>
<script type="text/javascript" src="jquery.jqprint-0.3.js"></script>
<script type="text/javascript">

</script>
</head>

<body>

<div class="toprint"> elements to print </div> 
<a href="#" id="print">PRINT</a> 
... 


<script type="text/javascript"> 
 $("#print").click( function() { 
                    $('.toprint').jqprint(); 
                    }); 
</script> 



</body>
</html>
