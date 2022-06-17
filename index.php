<?php require_once('Connections/MySqlConn.php'); ?>
<?php
$maxRows_Recordset1 = 3;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_MySqlConn, $MySqlConn);
$query_Recordset1 = "SELECT * FROM db2";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $MySqlConn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table width="100" border="0" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <td>新增</td>
  </tr>
</table>
<table width="100" border="0" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <td>從A~Z共X筆</td>
  </tr>
</table>
<table width="100" border="1" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Old</td>
    <td>Addr</td>
  </tr>
  <?php do { ?>
  <tr>
    <td><?php echo $row_Recordset1['ID']; ?></td>
    <td><?php echo $row_Recordset1['Name']; ?></td>
    <td><?php echo $row_Recordset1['Old']; ?></td>
    <td><?php echo $row_Recordset1['Addr']; ?></td>
  </tr>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  
</table>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
