<?php
include "openeclass-2.3/config/config.php";

// Connect
$db = mysql_connect($mysqlServer, $mysqlUser, $mysqlPassword);

$message  = "<script>alert('hello')</script>";

// Get input
$message = trim($message);
echo "trim: ".$message;
echo "<br>";
// Sanitize message input
$message = stripslashes( $message );
echo "stripslashes: ".$message;
echo "<br>";
$message = mysql_real_escape_string( $message );
echo "mysql_real_escape_string: ".$message;
echo "<br>";
$message = htmlspecialchars( $message );
echo "htmlspecialchars: ".$message;
echo "<br>";

?>
