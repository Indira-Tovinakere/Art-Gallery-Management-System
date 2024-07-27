<?php
require_once "config.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["Title"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($connect, "UPDATE artworks set title='" . $_POST["title"][$i] . "', artist_id='" . $_POST["artist_id"][$i] . "', medium='" . $_POST["medium"][$i] . "', year_created='" . $_POST["year_created"][$i] . "', price='" . $_POST["price"][$i]. "' WHERE artwork_id='" . $_POST["artwork_id"][$i] . "'");
}
    
header("Location:artworks.php");
}
?>
<html>
<head>
<title>Edit Multiple Artworks</title>
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
$rowCount = count($_POST["artworks"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($connect, "SELECT * FROM artworks WHERE artwork_id='" . $_POST["artworks"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0"  align="center" class="tblSaveForm">
<tr>
<td><label>Ttitle</label></td>
<td><input type="text" name="Title[]" class="txtField" value="<?php echo $row[$i]['Title']; ?>"></td>
</tr>
<tr>
<td><label>Artwork ID</label></td>
<td><input type="text" name="artist_id[]" class="txtField" value="<?php echo $row[$i]['artist_id']; ?>"></td>
</tr>
<tr>
<td><label>Artwork Medium</label></td>
<td><input type="text" name="medium" class="txtField" value="<?php echo $row[$i]['medium']; ?>"></td>
</tr>
<tr>
<td><label>Year Created</label></td>
<td><input type="text" name="Year_created" class="txtField" value="<?php echo $row[$i]['Year_created']; ?>"></td>
</tr>
<tr>
<td><label>Price</label></td>
<td><input type="text" name="price" class="txtField" value="<?php echo $row[$i]['price']; ?>"></td>
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