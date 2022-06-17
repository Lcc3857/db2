<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MySqlConn = "localhost";
$database_MySqlConn = "db2";
$username_MySqlConn = "root";
$password_MySqlConn = "12345678";
$MySqlConn = mysql_pconnect($hostname_MySqlConn, $username_MySqlConn, $password_MySqlConn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>