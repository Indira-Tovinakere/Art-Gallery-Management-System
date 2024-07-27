<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully Established with Indira DB";
CloseCon($conn);
?>