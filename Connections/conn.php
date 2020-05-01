<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn = "localhost";
$database_conn = "e_account";
$username_conn = "root";
$password_conn = "zzz";
$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");
/*mysql_query("SET character_set_connection='tis620'");
	mysql_query("SET character_set_database=tis620");
	mysql_query("SET character_set_results=tis620");
	mysql_query("SET character_set_server='tis620'");
	mysql_query("SET character_set_client='tis620'");
	mysql_query("collation_connection = tis620_thai_ci");
	mysql_query("collation_database = tis620_thai_ci");
	mysql_query("collation_server = tis620_thai_ci");*/
?>