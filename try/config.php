
<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$connect=mysqli_connect('localhost','root','','indira') or die("connection failed : ".mysqli_connect_error());
if ($connect) {
//echo "Connection Successfully";
}
else{
echo "Sorry Some Mistakes is";
}
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>