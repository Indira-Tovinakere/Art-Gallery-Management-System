<?php
require_once "config.php";
$rowCount = count($_POST["artists"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connect, "DELETE FROM artists WHERE artist_id='" . $_POST["artists"][$i] . "'");
}
header("Location:artists.php");
?>