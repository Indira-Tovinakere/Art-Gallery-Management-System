<?php
require_once "config.php";
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connect, "DELETE FROM users WHERE userId='" . $_POST["users"][$i] . "'");
}
header("Location:show_data.php");
?>