<?php require_once('Connections/MySqlConn.php'); ?>
<?php
mysql_select_db($database_MySqlConn, $MySqlConn);
$query_Recordset1 = "SELECT * FROM db2";
$Recordset1 = mysql_query($query_Recordset1, $MySqlConn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
