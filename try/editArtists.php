<?php
require_once "config.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["artist_name"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($connect, "UPDATE artists set artist_name='" . $_POST["artist_name"][$i] . "', artist_age='" . $_POST["artist_age"][$i] . "', artist_nationality='" . $_POST["artist_nationality"][$i] . "', artist_contactnumber='" . $_POST["artist_contactnumber"][$i] . "' WHERE artist_id='" . $_POST["artist_id"][$i] . "'");
}
if ($connect) {
    echo "<script>alert('Select Data');</script>";
  }else{
    echo "error";
  }
header("Location:artists.php");
}
?>
<html>
<head>
<title>Edit Multiple Artists</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="margin-top: 15px;">
<table border="1" cellpadding="10" cellspacing="0" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["artists"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($connect, "SELECT * FROM artists WHERE artist_id='" . $_POST["artists"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0"  align="center" class="tblSaveForm">
<tr>
<td><label>Artist Name</label></td>
<td><input type="hidden" name="artist_id[]" class="txtField" value="<?php echo $row[$i]['artist_id']; ?>"><input type="text" name="artist_name[]" class="txtField" value="<?php echo $row[$i]['artist_name']; ?>"></td>
</tr>
<tr>
<td><label>Artist Age</label></td>
<td><input type="text" name="artist_age[]" class="txtField" value="<?php echo $row[$i]['artist_age']; ?>"></td>
</tr>
<td><label>Artist Nationality</label></td>
<td><input type="text" name="artist_nationality[]" class="txtField" value="<?php echo $row[$i]['artist_nationality']; ?>"></td>
</tr>
<td><label>Artist Contactnumber</label></td>
<td><input type="text" name="artist_contactnumber[]" class="txtField" value="<?php echo $row[$i]['artist_contactnumber']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>