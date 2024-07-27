<?php
require_once "config.php";
$rowCount = count($_POST["artworks"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connect, "DELETE FROM artworks WHERE artwork_id='" . $_POST["artworks"][$i] . "'");
}
header("Location:artworks.php");
?>